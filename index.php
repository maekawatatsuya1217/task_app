<?php
    // db接続
    require 'mainte/db_connection.php';

   // 情報取得
   $sql = "SELECT * FROM blog ORDER BY created_at DESC";

   //    変数をわかりやすく
   $blogs = $pdo->query($sql);
    
?>

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
            <a href="create.php">新規投稿</a>
        </div>
        <div>
            <!-- 一覧表示 -->
            <?php foreach($blogs as $blog) : ?>
               <div>
                   <h2><?php echo $blog['title'] ?></h2>
                   <p>筆者：<?php echo $blog['your_name'] ?></p>
                   <a href="edit.php?id=<?php echo $blog['id']; ?>">編集</a>
                   <a href="delete_confirm.php?id=<?php echo $blog['id']; ?>">削除</a>
               </div>
            <?php endforeach; ?>
            <!-- 一覧表示 -->
        </div>
    </body>
</html>