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

        <div>
            <a href="new.php">新規投稿</a>
        </div>
        

        <!-- 一覧表示 -->
        <?php

            // db接続
            require 'mainte/db_connection.php';

            $sql = "SELECT * FROM blog";
            $stmt = $pdo->query($sql);
            foreach ($stmt as $row) {
                echo '名前：'. $row['your_name'];
                echo 'タイトル：' . $row['title'];
                echo '記事：' . $row['article'];
                echo '<br>';
            }
        ?>
        <!-- 一覧表示 -->
    </body>
</html>