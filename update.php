<?php

    require 'mainte/db_connection.php';

    if (!empty($_GET['id'])) {
        try {
            $stmt = $pdo->prepare("UPDATE blog SET your_name = :your_name, title = :title, article = :article WHERE id = :id");
            $stmt->bindValue( ':id', $_GET['id'], PDO::PARAM_INT);
            $stmt->bindValue( ':your_name', $_GET['your_name'], PDO::PARAM_STR);
            $stmt->bindValue( ':title', $_GET['title'], PDO::PARAM_STR);
            $stmt->bindValue( ':article', $_GET['article'], PDO::PARAM_STR);
            $stmt->execute(array(':your_name' => $_GET['your_name'], ':title' => $_GET['title'], ':article' => $_GET['article'], ':id' => $_GET['id']));
            echo "情報を更新しました。";
        } catch (Exception $e) {
            echo 'エラーが発生しました。:' . $e->getMessage();
        }if(empty($_GET['id']) ) {
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
        <h1>更新完了</h1>
        <a href="index.php">一覧表示画面へ</a>
    </body>
</html>