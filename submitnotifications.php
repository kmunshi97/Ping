<?php
	$username=$_POST['username'];
	$course=$_POST['course'];
	$type=$_POST['type'];
	$date=$_POST['date'];
	$month=$_POST['month'];
	$venue=$_POST['venue'];
	$cpassword = "pass";
    
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
    
/*
    $query="SELECT password FROM faculty WHERE username='$username'";
	
    $result=mysqli_query($conn, $query);
	if(!$result){
		echo 'Could not run query: ' . mysqli_error($conn);
		exit;
	}
	$row=mysqli_fetch_row($result);
*/
	$p="pass";
	
	if($cpassword==$p){
		$query="INSERT INTO notifications
        VALUES('$username','$course','$type','$date','$month','$venue')";
		$result=mysqli_query($conn, $query);
		include('create.html');
	}
	else{
		include('create.html');
		echo"<center><h3>Your Password didn't match!</center></h3>";
	}
    
	$conn->close();
?>