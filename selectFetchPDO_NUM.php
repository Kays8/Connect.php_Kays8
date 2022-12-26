<?php
    try{
        require "connect.php";
        //โชว์ข้อมูล customer
        $sql = "SELECT CustomerID,Birthdate,OutstandingDebt FROM customer" ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
    echo '<br>' .
        'รหัสลูกค้าของฉันแบบที่ 1 : ' .
        $result[0] .
        ' วันเกิด : ' .
        $result[1] .
        ' ยอดหนี้ : ' .
        $result[2];
}

} catch (PDOException $e) {
echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}

$conn = null;

?>