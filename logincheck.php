<?php
          
		$roll = $_POST['rollnum'];
		$pass = $_POST['password'];
	
		//dabase connection code 
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

    $query = "SELECT password FROM users WHERE rollnum=$roll";

    $result = mysqli_query($conn, $query);
	
    $row = mysqli_fetch_array($result);
	$p=$row[0];
		
		if($roll=="" || $pass==""){
			
			header('Location: login.php');
		}
		
		else if($p!=$pass){
			header('Locaion : login.php');
		}
		else{
			
			$query = "SELECT fname,lname,email FROM users WHERE rollnum=$roll";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
			$fn=$row[0];
			$ln=$row[1];
			$email=$row[2];
            
            session_start();
            $_SESSION["userRoll"] = $roll;
            echo "Session variables are set.";
            
		}
			header("Location: chat.php" );
?>