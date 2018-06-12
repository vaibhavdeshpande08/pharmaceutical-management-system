<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
?>
<html>
<head>    
    <title>Homepage</title>
    <style>            body  {
    background-image: url("hs.jpg");
}</style>
</head>
<body>
    <br/><a href="index2.php">Return to Account</a><br><br/>
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>Symptoms</td>
            <td>Price</td>
            <td>Stock</td>
            <td>Shop</td>
        </tr>
        <?php 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['symptoms']."</td>";
            echo "<td>".$res['price']."</td>"; 
            echo "<td>".$res['stock']."</td>";
            echo "<td>".$res['shop']."</td>"; 
            echo "<td><a href=\"edit1.php?id=$res[id]\">Purchase</a></td>";        
        }
        ?>
    </table>
</body>
</html>