<?php 
	session_start(); 
        $db = mysqli_connect('localhost', 'root', '', 'test');
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: purchase.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: purchase.php");
	}

?>
<!DOCTYPE html>
<html>
    <head>

	<title>Home</title> 
	<link rel="stylesheet" type="text/css" href="style.css">
        <style>            body  {
    background-image: url("goodim4.jpg");
}</style>
</head>
<body>
    
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
                
                
                
                

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                        
                         <?php
                            $uname = $_SESSION['username'];
                            
                            $query = "select *from users where username='$uname'";
                            $rs = mysqli_query($db, $query);
                            
                            if(mysqli_num_rows($rs)){
                                while($rows = mysqli_fetch_assoc($rs)){
                                     echo "Name : ".$rows['name'];
                                    echo "<br>Username : ".$rows['username'];
                                    echo "<br>Email : ".$rows['email'];
                                    echo "<br>Address : ".$rows['address'];
                                    echo "<br>Mobile : ".$rows['mobile'];
                                }
                            }
                            
                        ?>
                        
                        
		<?php endif ?>
	</div>
            <br> <br>
         &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="index1.php" style="color: blue;">Click Here To Modify Database</a>
               
</body>
</html>