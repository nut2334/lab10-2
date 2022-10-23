<?php
    $username = $_GET["username"];
    $conn = mysqli_connect("localhost", "root", "","blueshop");
    if ($conn) {
        mysqli_connect("localhost", "root", "","blueshop");
        mysqli_query($conn,"SET NAMES utf8");
    } else {
    echo mysql_errno();
    }
    $sql = "SELECT * FROM member WHERE username LIKE '%$username%'";
    $objQuery = mysqli_query($conn,$sql);
?>
<table border="1">
    <?php while($row = mysqli_fetch_array($objQuery)): ?>
        <tr>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["address"]?></td>
            <td><?php echo $row["mobile"]?></td>
            <td><?php echo $row["email"]?></td>
        </tr>
    <?php endwhile;?>
</table>