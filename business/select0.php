<?php
    require "connect.php";
    // ลองให้โชว์ข้อมูล customer
    $sql = "SELECT * FROM customer WHERE CustomerID = 'Cus001' "; 

    // การ prepare คือการทีจะเริ่มประมวลผล
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo '<br>';
    $result = $stmt->fetchAll();
    print_r($result);
?>