<?php
session_start();
include_once("config.php");
$db = mysqli_connect('localhost', 'root', '', 'test');
$uname = $_SESSION['username'];
$query = "select shopname from shop where username='$uname'";
$shn= mysqli_query($db, $query);
$row= mysqli_fetch_assoc($shn);
$shop_name=$row['shopname'];
$result = mysqli_query($mysqli, "SELECT * FROM users where shop='$shop_name'"); 
?>
<html>
<head>    
    <title>Homepage</title>
     <style>            body  {
    background-image: url("hs.jpg");
}</style>
</head>
<body>
    <a href="add2.php">Add New Data</a><br/><a href="index4.php">Return to Account</a><br><br/>
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>Symptoms</td>
            <td>Price</td>
            <td>Stock</td>
        </tr>
        <?php 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['symptoms']."</td>";
            echo "<td>".$res['price']."</td>"; 
            echo "<td>".$res['stock']."</td>";
            echo "<td><a href=\"edit2.php?id=$res[id]\">Edit</a> | <a href=\"delete1.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>