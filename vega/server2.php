<?php 
	session_start();

	// variable declaration
        $name = "";
	$username = "";
	$email    = "";
        $shopname ="";
        $mobile="";
        $address="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'test');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
                $name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
                $shopname=mysqli_real_escape_string($db, $_POST['shopname']);
                $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
                $address = mysqli_real_escape_string($db, $_POST['address']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
                if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
                if (empty($shopname)) { array_push($errors, "Shopname is required"); }
                if (empty($mobile)) { array_push($errors, "Mobile is required"); }
                if (empty($address)) { array_push($errors, "Address is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO shop (name,username, email,shopname,mobile,address,password) 
					  VALUES('$name','$username', '$email', '$shopname', '$mobile', '$address', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index4.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM shop WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index4.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>