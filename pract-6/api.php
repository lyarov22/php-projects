<?php
function getAllPlayers($db) {
$sql = "SELECT * FROM players
LEFT JOIN teams ON players.team_id = teams.team_id
LEFT JOIN countries ON players.country_id = countries.country_id;
";
$result = array();
$stmt = $db->prepare($sql);
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
$result[$row['player_id']] = $row;
}
return $result;}
function getAllTeams($db) {
$sql = "SELECT * FROM teams
INNER JOIN countries ON teams.country_id = countries.country_id;
";
$result = array();
$stmt = $db->prepare($sql);
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
$result[$row['team_id']] = $row;
}
return $result;
}
function getPlayerById($db, $id) {
$sql = "SELECT * FROM players
WHERE player_id = :player_id
";
$stmt = $db->prepare($sql);
$stmt->bindValue('player_id', $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
return $row;
}
function savePlayer($db, $name, $id) {
$sql = " UPDATE players
SET player_name = :player_name
WHERE player_id = :player_id
";
$stmt = $db->prepare($sql);
$stmt->bindValue(':player_name', $name, PDO::PARAM_STR);
$stmt->bindValue(':player_id', $id, PDO::PARAM_INT);
$stmt->execute();
}
function getAllCountries($db) {
$sql = "SELECT * FROM countries";
$res = array();
$stmt = $db->prepare($sql);
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {$res[$row['country_id']] = $row;
}
return $res;
}
function addPlayer($db, $playerName, $countryId) {
$sql = "INSERT INTO players(player_name, country_id)
VALUES(:player_name, :country_id)
";
$stmt = $db->prepare($sql);
$stmt->bindValue(':player_name', $playerName, PDO::PARAM_STR);
$stmt->bindValue(':country_id', $countryId, PDO::PARAM_INT);
$stmt->execute();
}
function deletePlayer($db, $id) {
$sql = "DELETE FROM players WHERE player_id = :player_id";
$stmt = $db->prepare($sql);
$stmt->bindValue(":player_id", $id, PDO::PARAM_INT);
$stmt->execute();
}
?>