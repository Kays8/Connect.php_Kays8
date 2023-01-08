<?php
    require "connect.php"; // " require " คือ เรียกไฟล์ connect.php 
    
    $sql = "SELECT * FROM customer WHERE CustomerID = 'Cus001' ";  // เรียกเพื่อโชว์ข้อมูลของตาราง customer

    $stmt = $conn->prepare($sql);  // การเรียกใช้ Method  " ->prepare " คือการทีจะเริ่มประมวลผล
    $stmt->execute();
    $result = $stmt->fetchAll(); // ฟังก์ชั่น " fetchAll " ใช้สำหรับดึงเอาข้อมูลของ MySQL
    print_r($result);
?>