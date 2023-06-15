<html lang="en">
<head>
<meta charset="UTF-8">
<title>Игроки</title>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script></head>
<body>
<header>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" datatoggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Sport CRM</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="/">Главная</a></li>
<li><a href="players.php">Игроки</a></li>
<li><a href="teams.php">Команды</a></li>
</ul>
</div>
</div>
</nav>
</header>
<div class="container-fluid">
<?php include 'db.php'; ?>
<?php include 'api.php'; ?>
<?php
$id = $_GET['player_id'];
if($id) {
$player = getPlayerById($db, $id);
}
else {
echo '<div class="alert alert-danger" role="alert">
<span class="glyphicon glyphicon-exclamation-sign" ariahidden="true"></span>
<span class="sr-only">Error:</span>
Игрок не найден
</div>';
}
?>
<form action="save.php" method="post">
<input type="hidden" name="id" value="<?php echo $player['player_id'];
?>">
<div class="form-group">
<label for="name">Игрок</label>
<input type="text" class="form-control" id="name" name="name"
value="<?php echo $player['player_name']; ?>">
</div>
<button type="submit" class="btn btn-default">Сохранить</button>
</form>
</div>
<footer>
</footer>
</body>
</html>