<?php include('server.php') ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>
purchase
</title>
<style>
       body  {
    background-image: url("ora.jpg");
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
        <br>
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
<br>
<div class="header">
		<h2>Admin Login</h2>
	</div>
	
	<form method="post" action="purchase.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
                </div>
	</form>

</body>
</html>


