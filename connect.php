<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bussiness</title>
</head>
<body>
    
<?php
// ส่วนที่ highlight ขึ้นอยู่กับการตั้งค่าของ นศ
$serverName = "localhost";
$userName = "root";
$userPassword = "12345678";
$dbname = "business";

try
{
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname;charset=UTF8",
        $userName, $userPassword);

    if ($conn) {
        echo "You are now connecting to database!!!";
    }
} catch (PDOException $e) {
    echo "Sorry! You cannot connect to database";
}
?>

</body>
</html>