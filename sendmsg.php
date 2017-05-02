<?php
    $servername = "localhost";
    $server_username = "root";
    $server_password = "";
    $dbname = "ping";
    
    // Create connection
    $conn = mysqli_connect($servername, $server_username, $server_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    session_start();
	$userRoll = $_SESSION['userRoll'];
    $friendRoll = $_POST['inputFriendRollNum'];
    $msg=$_POST["msgText"];

    $time = time();
	$chatId=$userRoll.$friendRoll;


    $query2 = "INSERT INTO chat (senderId,  receiverId, msgId) VALUES($userRoll,$friendRoll,$chatId)";
//    $result=mysqli_query($conn, $query2);
    
    if(!mysqli_query($conn, $query2))
	   echo mysqli_error($conn);

    $query3 = "INSERT INTO messages VALUES('$chatId', '$msg', '$time')";
            
    if(!mysqli_query($conn, $query3))
	   echo mysqli_error($conn);

    $query1 = "SELECT msg, msgId FROM messages WHERE msgId='$userRoll.$friendRoll' OR '$friendRoll.$userRoll'";

	//fetching the message
	$result1 = mysqli_query($conn, $query1);

    while($extract = mysqli_fetch_array($result1)){
		$cid=$extract['msgId'];
		if($cid==$userRoll.$friendRoll){
            $query4 = "SELECT fname,lname FROM users WHERE rollnum=$userRoll";
            
			$r=mysqli_query($conn, $query4);
			$row=mysqli_fetch_array($r);
			$fname=$row['fname'];
			$lname=$row['lname'];
			echo $fname." ".$lname." : ".$extract['msg'];
			echo "<br>";
		}
		else if($cid==$friendRoll.$userRoll){
            $query5 = "SELECT fname,lname FROM users WHERE rollnum=$friendRoll";
			$r=mysqli_query($conn, $query5);
			$row=mysqli_fetch_array($r);
			$fname=$row['fname'];
			$lname=$row['lname'];
			echo $fname." ".$lname." : ".$extract['msg'];
			echo "<br>";
		}
	}
	
   
	
/*	$result1 = mysqli_query("SELECT msg,chatId FROM messages WHERE chatId='$userRoll.$friendsId' OR '$friendsId.$userRoll'");
	while($extract = mysqli_fetch_array($result1)){
		$cid=$extract['chatId'];
		if($cid==$userRoll.$friendsId){
			$r=mysqli_query("SELECT fname,lname FROM users WHERE rollnum=$userRoll");
			$row=mysqli_fetch_array($r);
			$fname=$row['fname'];
			$lname=$row['lname'];
			echo $fname." ".$lname." : ".$extract['msg'];
			echo "<br>";
		}
		else{
			$r=mysqli_query("SELECT fname,lname FROM users WHERE rollnum=$friendsId");
			$row=mysqli_fetch_array($r);
			$fname=$row['fname'];
			$lname=$row['lname'];
			echo $fname." ".$lname." : ".$extract['msg'];
			echo "<br>";
		}
	}*/
    $conn->close();
?>

<script>
    console.log("<?php echo $friendRoll.$userRoll.$msg.$time;?>");
</script>