<html>
<head>
<title>
contact
</title>
<style>
       body  {
    background-image: url("har3.jpg");
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
<body>
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
<font align="center">        
<h2><font color="blue"> Contact Us</font></h2>
<form action="contact.php" method="post" onSubmit="alert('Thank you for your feedback.');" >

  Name:
  <input type="text" name="name" required><br>
  <br>
  Email:
  <input type="email" name="email" required><br>
  <br>
  Address: <textarea id="message" name="address" rows="7" cols="30"></textarea><br />
  <br>
  Mobile:
  <input type="text" name="mobile" required><br>
  <br>
  Subject:
  <input type="text" name="subject" required><br>
  <br>
Your message: <textarea id="message" name="message" rows="7" cols="30"></textarea><br />
  <br>
  <br>
  <input type="submit" value="Submit">
  <br>
</form>
<?php
error_reporting(E_ERROR | E_PARSE);
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "test";
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 // Create connection
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$address = $conn->real_escape_string($_POST['address']);
$mobile = $conn->real_escape_string($_POST['mobile']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into contact (name,email,address,mobile,subject,message) VALUES('" . $name . "','" . $email . "','" . $address . "','" . $mobile . "','" . $subject . "','" . $message . "')";
$success = $conn->query($query);
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
?>
</body>
</html>