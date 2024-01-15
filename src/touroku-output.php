<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>練習6-5-output</title>
</head>
<body>
   <?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into anime(anime_id,anime_name,create_name)value(?,?,?)');
    if(!preg_match('/^\d+$/',$_POST['id'])){
        echo'番号を整数で入力してください';
    }else if(empty($_POST['name'])){
        echo'アニメ名を入力してください';
    }else if(empty($_POST['name2'])){
        echo'作者を入力してください';
    }else if($sql->execute([$_POST['id'],$_POST['name'],$_POST['name2']])){
        echo'<font color="red">追加に成功しました</font>';
    }else{
        echo'<font color="red">追加に失敗しました</font>';
    }
    ?>
    <br><hr><br>
    <table>
        <tr><th>番号</th><th>アニメ名</th><th>作者</th></tr>
        <?php
        foreach($pdo->query('select*from anime')as $row){
            echo'<tr>';
            echo '<td>',$row['anime_id'],'</td>';
            echo '<td>',$row['anime_name'],'</td>';
            echo '<td>',$row['create_name'],'</td>';
            echo '</tr>';
            echo"\n";
        }
        ?>
        </table>
        <form action="itiran.php"method="post">
        <button type="submit">一覧画面に戻る</button>
    </form>
</body>
</html>