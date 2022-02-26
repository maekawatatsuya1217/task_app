<?php

    require 'db_connection.php';

    $sql = 'select * from blog where id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue('id', 2, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetchall();

    echo "<pre>";
    var_dump($result);
    echo "</pre>";

    // まとめて処理

    $pdo->beginTransaction();

    try{

        // sql
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue('id', 1, PDO::PARAM_INT);
        $stmt->execute();

        $pdo->commit();

    }catch(PDOExcection $e){

    }
?>