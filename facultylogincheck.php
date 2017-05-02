<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

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

	
		//yaha par database connection ka code likhna h 
	
		$query = "SELECT password FROM faculty WHERE username=$username";

        $result = mysqli_query($conn, $query);
	
        $row = mysqli_fetch_row($result);
		$p=$row[0];
		
		if($username=="" || $password==""){
			
			echo"<center><h3>Both Username and Password are Required</h3></center>";
			exit();
		}
		
		else if($p == $password){
			$query = "SELECT fname,lname,email FROM faculty WHERE username=$username";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
			$user=$row[0];			
		}
		
        else{
            header("Location: homepagera.php");		
		}
?>