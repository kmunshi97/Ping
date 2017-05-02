<?php
	
	//variables of students user entries..... 
	$rn = $_POST["rollnum"];
	$fn = $_POST["fname"];
	$ln = $_POST["lname"];
	$email = $_POST["email"];
	$p = $_POST["password"];
	$cp = $_POST["cpassword"];
	$programme= $_POST["programme"];
	$branch = $_POST["branch"];
	$pn = $_POST["phonenum"];
	
	
	//entering into table "users" the entered data........
	if($rn ==''|| $fn ==''|| $ln ==''|| $email ==''|| $p ==''|| $cp ==''|| $branch ==''|| $programme ==''){
		include('signup.php');
		echo "<h4>Starred Enteries are Mandatory</h4>";
	}
	
	else if($p != $cp){
		include('signup.php');
		echo "<h4>Your Passwords didn't match</h4>";
	}
	else{
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
			
			if(mysqli_query("INSERT INTO users VALUES('$rn','$fn','$ln','$email','$p','$programme','$branch','$pn')")){
			
				include('login.php');
				echo "<center><h3>Now you can Login</h3></center>";
			
			}
	}
	
?>