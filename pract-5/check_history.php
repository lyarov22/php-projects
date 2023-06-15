<?php
require 'connect.php';
$num = $_POST['radio'];
$mysql_select = "SELECT * FROM my_pacient WHERE id=$num";
$result = mysqli_query($db,$mysql_select);
$row = mysqli_fetch_array($result);
printf("<h1>%s %s</h1><p><i>Adress: %s<br>Tel:
 %s</i></p>",$row['name'],$row['last_name'],$row['adress'],$row['tel']);

$mysql_select1 = "SELECT date,comment,next_date FROM visits WHERE num=$num";
$result1 = mysqli_query($db,$mysql_select1);
$row1 = mysqli_fetch_array($result1);
do{
printf("<table border='1'><tr><td><b>Visit date:</b></td><td>%s</td></tr>
<tr><td><b>Comments:</b></td><td>%s</td></tr>
<tr><td><b>Next visit date:</b></td><td>%s</td></tr>
</table><br>", $row1['date'],$row1['comment'],$row1['next_date']);	

}
while($row1 = mysqli_fetch_array($result1))
?>
