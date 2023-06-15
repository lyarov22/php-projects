<?php

require 'connect.php';
$mysql_select = "SELECT * FROM `my_pacient`";
$result = mysqli_query($db,$mysql_select);
$row = mysqli_fetch_array($result);

//$row=$result->fetch_row(); 

// с радиокнопками

/*
do{
$id = $row['id'];
$name = $row['name'];
$last_name = $row['last_name'];
printf("<p><label><input type='radio' name='radio' id='radio' value='%s'>%s %s</label></p>",$id,$name,$last_name);	
}
while($row = mysqli_fetch_array($result));
*/

// с выпадающим списком
echo "<p><select name ='radio' id='radio' width='25' > ";
    do{
        $id = $row['id'];
        $name = $row['name'];
        $last_name = $row['last_name'];
        printf("<p><label><option value='%s'>%s   %s</option></label></p>",$id,$name,$last_name);	            
        }
    while($row = mysqli_fetch_array($result));

echo "</select></p>"; 
?>
