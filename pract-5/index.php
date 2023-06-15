<!doctype html>
<html>
<head>
<meta charset="UTF8">
<title>Главный Интерфейс</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>SELECT AN ACTION</h1>
<!--Первый блок - для занесения нового пациента в список-->
<form id="newPacient" action="add_pacient.php" method="post">
<label for="name"><b>Name:</b></label><br>
<input type="text" size="30" name="name"><br>
<label for="last_name"><b>Second name:</b></label><br>
<input type="text" size="30" name="last_name"><br>
<label for="adress"><b>Adress:</b></label><br>
<input type="text" size="30" name="adress"><br>
<label for="telefon"><b>Telefon:</b></label><br>
<input type="text" size="30" name="telefon"><br>
<input type="submit" value="Add new pacient" name="addNew">
</form>
<!--Второй блок - для внесения записи о приеме для конкретного пациента-->
<form id="addHistory" action="addHistory.php" method="post">
<?php require 'all_pacient.php';?>
<label for="date"><b>Date of visit:</b></label><br>
<input type="date" name="date" value="2014-03-03 12:00:00" size="20"><br>
<label for="comments"><b>Comments:</b></label><br>
<textarea cols="25" rows="5" name="comments"></textarea><br>
<label for="next_date"><b>Next visit date:</b></label><br> 
<input type="date" name="next_date" value="2014-03-10 12:00:00" size="20"><br>
<input type="submit" value="Add new record for pacienr" name="add_history">
</form>
<!--Третий блок - для выбора пациента и просмотра его истории-->
<<!--Третий блок - для выбора пациента и просмотра его истории-->
<form action="check_history.php" method="post">
<?php require 'all_pacient.php'; ?> <!—здесь выводим список пациентов-->
<input type="submit" value="Посмотреть Историю Пациента" name="check_history">

</form>
</body>
</html>
