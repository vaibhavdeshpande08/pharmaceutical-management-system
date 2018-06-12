<?php
error_reporting(E_ERROR | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "all";

$conn = new mysqli($servername, $username, $password, $dbname);

$symp = $conn->real_escape_string($_POST['symptoms']);
$nme = $conn->real_escape_string($_POST['name']);
$sho = $conn->real_escape_string($_POST['shop']);
$sql = "SELECT * FROM users where symptoms='$symp' or name='$nme' or shop='$sho' ";
$result = $conn->query($sql);

?>
<html>
<head>
<title>
search
</title>
<style>
    body  {
    background-image: url("exac.jpg");
}
        table,tr,th,td
            {
                border: 1px solid black;
            }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body bgcolor="">
        <h1><font color="brown">VEGA PHARMACEUTICAL SERVICES</font></h1>
        <ul>
  <li class="dropdown">
      <a href="home.php" class="dropbtn">Home</a>
  </li>
  <li><a href="about.php">About</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="pur.php">Purchase</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="login.php">Login</a></li>
</ul>
<br>
<h1><font color="blue">Search Through Symptom,Medicine Name And Shop Name</font></h1>
<br>
<form method="post" action="search.php">
    Shop: <input type="text" name="shop" or name="name" or name="symptoms" value="">
    &nbsp;
   Medicine: <input type="text" name="name" value="">
    &nbsp;
    Symptoms: <input type="text" name="symptoms" value="">
    &nbsp;
    <input type="submit" value="click">
    &nbsp;
</form>
</br></br>
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
        }
        ?>
    </table>
</body>
</html>