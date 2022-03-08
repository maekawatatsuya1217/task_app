<!-- 情報取得 -->
<?php
    require 'mainte/db_connection.php';

    if (!empty($_GET['id'])) {
        $stmt = $pdo->prepare("SELECT * FROM blog WHERE id = :id"); //SQL作成
        $stmt->bindValue( ':id', $_GET['id'], PDO::PARAM_INT); //値セット
        $stmt->execute(); //実行
        $blog_data = $stmt->fetch();
        // データが取得できないときは戻る
        if( empty($blog_data) ) {
            header("Location: index.php");
            exit;
        }
    }

    $id = $blog_data['id'];
    $your_name = $blog_data['your_name'];
    $title = $blog_data['title'];
    $article = $blog_data['article'];
?>
<!-- 情報取得 -->

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            本当に削除しますか？
        </h1>
        
        <form method="POST" action="delete.php?id=<?php echo $id; ?>">
            <!-- id渡す -->
            <input type="hidden" name="id" value="<?php if (!empty($id)) {echo $id;} ?>">
            <!-- id渡す -->
            <input type="hidden" name="your_name" value="<?php if (!empty($your_name)) {
                echo $your_name;
            } ?>">
            <input type="hidden" name="title" value="<?php if (!empty($title)) {
                echo $title;
            } ?>">
            <input type="hidden" name="article" value="<?php if (!empty($article)) {
                echo $article;
            } ?>">
            <input type="submit" value="削除">
        </form>
    </body>
</html>