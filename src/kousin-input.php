<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>更新</title>
		<link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
		<div class="box21">
		<h1>更新するアニメを選んでください</h1>
		<div class="th0">アニメ名</div>
		<div class="th1">作者</div>
		
<?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from anime') as $row) {
		echo '<form action="kousin-output.php" method="post">';
		echo'<input type="hidden"name="anime_id" value="',$row['anime_id'],'">';
		echo'<div class="td0">';
		echo'<input type="text"name="anime_name" value="',$row['anime_name'],'">';
		echo '</div> ';
		echo '<div class="th1">';
		echo'<input type="text"name="create_name" value="',$row['create_name'],'">';
		echo '</div> ';
		echo'<div class="td2"><input type="submit" value="更新"></div>';
		echo '</form>';
		echo "\n";
	}
?>
</div>
    </body>
</html>