<?php

    require 'mainte/db_connection.php';

    if (!empty($_POST['id'])) {
        try {
            $stmt = $pdo->prepare("DELETE FROM blog WHERE id = :id");
            $stmt->bindValue( ':id', $_POST['id'], PDO::PARAM_INT);
            $stmt->execute();
            echo "削除しました。";
        } catch (Exception $e) {
            echo 'エラーが発生しました。:' . $e->getMessage();
        } 
        if(empty($_POST['id']) ) {
            header("Location: index.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>削除完了</h1>
        <a href="index.php">一覧表示画面へ</a>
    </body>
</html>