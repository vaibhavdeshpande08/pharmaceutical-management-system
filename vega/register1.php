<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
        <style>            body  {
    background-image: url("jhg.jpg");
}</style>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register1.php">

		<?php include('errors.php'); ?>

                <div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
                </div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
                </div>
                        <div class="input-group">
			<label>Mobile</label>
			<input type="text" name="mobile" value="<?php echo $mobile; ?>">
		</div>
            <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
            </div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="pur.php">Sign in</a>
		</p>
	</form>
</body>
</html>