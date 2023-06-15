<?php
require 'connect.php';
$num = $_REQUEST['radio'];
$date = $_REQUEST['date'];
$comments = $_REQUEST['comments'];
$next_date = $_REQUEST['next_date'];
$query = "INSERT INTO visits VALUES (null,'{$num}','{$date}','{$comments}','{$next_date}')";
    $result = $db->query($query);
    if (!$result)
{
        echo "<span style = 'color:blue'>Data is not added</span>";
}
    if ($result){
        echo "<span style = 'color:blue'>Data is added</span>";
    }
?>
<a href="index.php">Go to main</a>
