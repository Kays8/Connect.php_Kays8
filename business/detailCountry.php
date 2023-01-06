<html><head>
        <title> Display Selected Customer Information </title>
    </head>
    <body>
        <?php
        if (isset($_GET["CountryCode"]))
        {
            $strCountryCode = $_GET["CountryCode"];
        }

        /*เอาไว้เช็คค่า 
        echo "show ... = ".$strCustomerID;
        */

        require "connect.php";
        $sql ="SELECT * FROM country WHERE CountryCode = ?";
        $params = array($strCountryCode);
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        // FETCH_ASSOC ดึงข้อมูลตามชื่อคอลัม
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

<table width="300" border="1">
  <tr>
    <th width="325">รหัสประเทศ</th>
    <td width="240"><?php echo $result["CountryCode"]; ?></td>
  </tr>
  
  <tr>
    <th width="325">ชื่อประเทศ</th>
    <td width="240"><?php echo $result["CountryName"]; ?></td>
  </tr>
    
  </body>
</html>
