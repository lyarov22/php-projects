<?php
// обработка запроса POST, ($_POST - ассоциативный массив)
if (isset($_POST['name']) && isset($_POST['last_name'])) 
  require 'connect.php';
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $adress = $_POST['adress'];
    $tel = $_POST['tel'];
    $query = "INSERT INTO my_pacient VALUES (null,'$name', '$last_name','$adress','$tel')";
    $result = $db->query($query);
    if (!$result)
{
        echo "<span style = 'color:blue'>Data is not added</span>";
}
    if ($result){
        echo "<span style = 'color:blue'>Data is added</span>";
    }
    // запрос на добавление

    $db->close();

?>

<a href="index.php">Go to main</a><a href="index.php">Вернуться в меню</a>
