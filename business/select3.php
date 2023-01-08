<?php
require "connect.php";  // " require " คือ เรียกไฟล์ connect.php 

$sql = 
"SELECT customer.CustomerID ,customer.Name, customer.OutstandingDebt, country.CountryName
FROM customer,country
WHERE customer.CountryCode = country.CountryCode";  // เรียกเพื่อโชว์ข้อมูลของตาราง customer

$stmt = $conn->prepare($sql);
$stmt->execute();
echo '<br>';

$result = $stmt->fetchAll();  // ฟังก์ชั่น " fetchAll " ใช้สำหรับดึงเอาข้อมูลของ MySQL

foreach ($result as $r) {
print $r['CustomerID'] .'  '. $r['Name'].' '.$r['OutstandingDebt'].'  '.$r['CountryName'] .'<br>';
}
?>