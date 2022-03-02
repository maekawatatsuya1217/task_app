<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TaskApp</title>
    </head>
    <body>
        <h1>入力情報確認</h1>

        <form method="GET" action="index.php">
            名前
            <?php echo $_GET['your_name']; ?>
            タイトル
            <?php echo $_GET['title'] ?>
            記事
            <?php echo $_GET['article'] ?>
            <input type="submit" value="投稿">
            <input type="hidden" name="your_name" value="<?php echo $_GET['your_name']; ?>">
            <input type="hidden" name="title" value="<?php echo $_GET['title']; ?>">
            <input type="hidden" name="article" value="<?php echo $_GET['article']; ?>">
        </form>

        <?php
            require 'mainte/insert.php';
            insertContact($_GET);
        ?>

    </body>
</html>