<html lang="en">
<head>
<meta charset="UTF-8">
<title>Игроки</title>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target=".navbar-ex1-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Sport CRM</a>
</div>
<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav">
<li><a href="index.php">Главная</a></li>
<li><a href="players.php">Игроки</a></li>
<li><a href="teams.php">Команды</a></li>
</ul>
</div>
</div>
</nav>
</header>
<div id="content">
<div class="container-fluid">
<?php include 'db.php'; ?>
<?php include 'api.php'; ?>
<?php
$players = getAllPlayers($db);
?>
<table class="table table-bordered">
<tr>
<th>Игрок</th>
<th>Команда</th>
<th>Страна</th>
<th>Удалить</th>
</tr>
<?php foreach ($players as $player) { ?>
<tr>
<td><a href="edit.php?player_id=<?php echo
$player['player_id'];?>"><?php echo $player['player_name']; ?></a></td>
<td><?php echo $player['team_name']; ?></td>
<td><?php echo $player['country_name']; ?></td>
<td><a class="btn btn-danger" href="delete.php?player_id=<?php
echo $player['player_id'];?>">Удалить</a></td>
</tr>
<?php } ?>
</table>
<button id="addButton" class="btn btn-default">Добавить игрока</button>
<form action="" method="POST" role="form" style="display: none; margin-top:
20px;">
<div class="form-group">
<label for="">Введите имя</label>
<input type="text" class="form-control" id="name" name="name"
placeholder="Введите имя">
</div>
<div class="form-group">
<select name="country" class="form-control" id="country">
<?php
$countries = getAllCountries($db);
foreach ($countries as $key => $value) {
    echo "<option
    value=".$value['country_id'].">".$value['country_name']."</option>";
    }
    ?>
    </select>
    </div>
    <button type="submit" class="btn btn-default">Добавить</button>
    </form>
    </div>
    <?php
    if(isset($_POST['name']) && $_POST['name'] != '') {
    $name = $_POST['name'];
    $countryId = $_POST['country'];
    addPlayer($db, $name, $countryId);
    }
    ?>
    </div>
    <footer>
    </footer>
    <script>
    $("#addButton").click(function(){
    $("form").slideDown();
    });
    </script>
    </body>
    </html>