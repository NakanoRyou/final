<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習6-5-output</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <p>情報を追加します</p>
    <form action="touroku-output.php"method="post">
    <th>番号<input type="text"name="id"><br>
アニメ名<input type="text"name="name"><br>
    作者<input type="text"name="name2"><br>
        <button type="submit">追加</button>
</form>
</body>
</html>