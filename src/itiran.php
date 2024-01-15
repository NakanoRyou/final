<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>更新完了！</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
    <h1>一覧</h1>

<table border='1'>

    <tr>

        <th>番号</th><th>アニメ名</th><th>作者</th>

    </tr>


 

    <?php

 

$pdo = new PDO(

    'mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517826-final;charset=utf8',

    'LAA1517826',

    'Pass0310'

);

    

foreach($pdo->query('select * from anime') as $row) {

    echo '<tr>';

    echo '<td>',$row['anime_id'],'</td>';

    echo '<td>',$row['anime_name'],'</td>';
    echo '<td>',$row['create_name'],'</td>';

    echo '</tr>';

    echo "\n";

}

 

    ?>

    </table>
</body>

</html>