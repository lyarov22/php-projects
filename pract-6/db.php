<?php
$user = "root";
$password = "";// либо пустой, зависит от параметра входа в phpMyAdmin
try {
$db = new PDO("mysql:host=localhost;dbname=sport", $user, $password);
} catch (Exception $e) {
echo $e->getMessage();
}