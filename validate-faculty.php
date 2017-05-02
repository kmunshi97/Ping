<?php
	//variables of faculty user entries
	$username = $_POST["user-name"];
	$firstname = $_POST["first-name"];
	$middlename = $_POST["middle-name"];
	$lastname = $_POST["last-name"];
	$mail = $_POST["e-mail"];
	$password = $_POST["pass-word"];
	$cpassword = $_POST["confirm-password"];
	$phone = $_POST["phone-number"];
	$courses = $_POST["courses"];

	//entering into table "faculty" the entered data
	if($firstname==''|| $midlename==''|| $lastname==''|| $mail==''|| $phone==''|| $username==''|| $courses==''|| $password==''|| $cpassword==''){
		include('faculty-signup.php');
		echo "<h4>Starred Enteries are Mandatory</h4>";
	}
	else if($password != $cpassword){
		include('faculty-signup.php');
		echo "<h4>Your Passwords didn't match</h4>";
	}else{
		$servername = "localhost";
    $server_username = "root";
    $server_password = "";
    $dbname = "ping";
    
    // Create connection
    $conn = new mysqli($servername, $server_username, $server_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
			if(mysqli_query("INSERT INTO faculty VALUES('$rn','$fn','$ln','$email','$p','$programme','$branch','$pn')")){
			include('login.php');
			echo "<center><h3>Now you can Login</h3></center>";
			}
	}
?>