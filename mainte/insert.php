<?php
    // db接続
    function insertContact($request){

        require 'db_connection.php';

        // db保存
        $params = [
            'id' => null,
            'your_name' => $request['your_name'],
            'title' => $request['title'],
            'article' => $request['article'],
            'created_at' => null
        ];

        $count = 0;
        $columns = '';
        $values = '';

        foreach(array_keys($params) as $key){
        if($count++>0){
            $columns .= ',';
            $values .= ',';
        }
        $columns .= $key;
        $values .= ':'.$key;
        }

        $sql = 'insert into blog ('. $columns .')values('. $values .')';

        $stmt = $pdo->prepare($sql);//プリペアードステートメント
        $stmt->execute($params); //実行
    }

?>