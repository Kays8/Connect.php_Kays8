<?php
    $serv = 'mysql:host=localhost;dbname=business;charset=UTF8';
    $userName = 'root';
    $userPassword = ''; //Lab room 408 or 409 - 12345678


    try {
        $conn = new PDO($serv,$userName,$userPassword);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // set the PDO error mode to exception 

        //echo 'You are now connecting to database!';  //การประกาศว่าเชื่อมต่อสำเร็จ
        
    } catch (PDOException $e) {
    echo 'Sorry! You cannot connect to database: ' . $e->getMessage();  //การประกาศว่าเชื่อมไม่ต่อสำเร็จ
    }
?>