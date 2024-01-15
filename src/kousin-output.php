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
<?php
    $pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update music set anime_name=?,create_name=? where anime_id=?');
if (empty($_POST['anime_id'])){
    echo'番号を入力してください。';
}else if (empty($_POST['anime_name'])){
    echo'アニメ名を入力してください。';
}else if (empty($_POST['create_name'])){
    echo'作者を入力してください。';
} else if ($sql->execute([htmlspecialchars($_POST['anime_name']),$_POST['create_name'],$_POST['anime_id']])){
        echo '更新に成功しました';
    } else {
        echo '更新に失敗しました';
    }
?>
    </body>
</html>