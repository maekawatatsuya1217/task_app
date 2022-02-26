<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TaskApp</title>
    </head>
    <body>
        <h1>新規投稿</h1>

        <!-- 投稿フォーム -->
        <form method="POST" action="confirm.php">
            <label>名前<input type="text" name="your_name"></label>
            <label>タイトル<input type="text" name="title"></label>
            <label>記事<textarea name="article" id="" cols="30" rows="10"></textarea></label>
            <input type="submit" value="確認画面へ">
        </form>
        <!-- 投稿フォーム -->
    </body>
</html>