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
<li><a href="countries.php">Страны</a></li>
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
$id = $_GET['player_id'];
if($id) {
deletePlayer($db, $id);
} else {
echo "<h1>Error</h1>";
exit();
}
?>
</div>
</div>
<footer>
</footer>
</body>
</html>