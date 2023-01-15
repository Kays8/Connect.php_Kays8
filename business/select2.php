<?php
require "connect.php";  // " require " คือ เรียกไฟล์ connect.php 

$sql = "SELECT * FROM customer";  // เรียกเพื่อโชว์ข้อมูลของตาราง customer
$stmt = $conn->prepare($sql);  // การเรียกใช้ Method  " ->prepare " คือการทีจะเริ่มประมวลผล
$stmt->execute();
echo '<br>';

$result = $stmt->fetchAll();  // ฟังก์ชั่น " fetchAll " ใช้สำหรับดึงเอาข้อมูลของ MySQL

foreach ($result as $r) {
print $r['CustomerID'] .'  '. $r['Name'].' '.$r['OutstandingDebt'].'  '.$r['CountryCode'].'<br>';
}

?>