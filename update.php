<?php

    require 'mainte/db_connection.php';

    if (!empty($_POST['id'])) {
        try {
            $stmt = $pdo->prepare("UPDATE blog SET your_name = :your_name, title = :title, article = :article WHERE id = :id");
            $stmt->bindValue( ':id', $_POST['id'], PDO::PARAM_INT);
            $stmt->bindValue( ':your_name', $_POST['your_name'], PDO::PARAM_STR);
            $stmt->bindValue( ':title', $_POST['title'], PDO::PARAM_STR);
            $stmt->bindValue( ':article', $_POST['article'], PDO::PARAM_STR);
            $stmt->execute(array(':your_name' => $_POST['your_name'], ':title' => $_POST['title'], ':article' => $_POST['article'], ':id' => $_POST['id']));
            echo "情報を更新しました。";
        } catch (Exception $e) {
            echo 'エラーが発生しました。:' . $e->getMessage();
        }if(empty($_POST['id']) ) {
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