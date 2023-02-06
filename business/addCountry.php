<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Country</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Add Country</h1>
    <form action="addCountry.php" method="POST">

    <input type="text" placeholder="Enter Country code" name="CountryCode">
    <br><br>
    <input type="text" placeholder="Enter Country name" name="CountryName">
    <br><br>
    <input type="submit">
    </form>

</body>
</html>

<?php 

    if(!empty($_POST['CountryCode'])&&!empty($_POST['CountryName'])):
    require 'connect.php';
    $sql_insert = "INSERT INTO country VALUES (:CountryCode, :CountryName)";

    $stmt = $conn->prepare($sql_insert);
    $stmt->bindParam(':CountryCode', $_POST['CountryCode']);
    $stmt->bindParam(':CountryName', $_POST['CountryName']);

    if($stmt->execute()):
    $message = 'Suscessfully add new Country!';

    //แสดง Table Country
    header("Location:/PHP_Thirayut/business/selectCountry1.php");

    else: 
        $message = 'Fail to add new Country';
    endif;
    echo $message;
    $conn = null;
    endif;
?>