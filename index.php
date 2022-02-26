<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TaskApp</title>
    </head>
    <body>
        <h1>一覧表示</h1>

        <a href="new.php">新規投稿</a>

        <!-- 一覧表示 -->
        <?php
            if (!empty($_POST)) {
                echo $_POST['your_name'];
                echo $_POST['title'];
                echo $_POST['article'];
            }
        ?>
        <!-- 一覧表示 -->
    </body>
</html>