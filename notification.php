<?php
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


    $query="SELECT username, course, type, date, month, venue FROM notifications";

	$result=mysqli_query($conn, $query);

    $i = 0;
    $countAll = $result->num_rows;

    if ($countAll > 0) {
        while($row = $result->fetch_assoc()) {
            $prof[$i] = $row["username"];
            $course[$i] = $row["course"];	
            $type[$i] = $row["type"];	
            $venue[$i] = $row["venue"];
            $date[$i] = $row["date"];	
            $month[$i] = $row["month"];	
            $year = '2017';
            $i++;
        }
    }
    else {
        echo "0 results";
    }
    
$conn->close();
    
?>

<body>    
    <!--The parent card gorup starts here!-->
    <div id="notification-list"
         class="ui cards"
         style="overflow-y: auto;
                min-height: 12vw;">
 
    </div>
</body>
<script type="text/javascript" src="js/notifications.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        
        var date = [];
        var month = [];
        var venue = [];
        var type = [];
        var prof = [];
        var course = [];
        
        <?php for ($i = 0; $i < $countAll; $i++) {?>
            date.push("<?php echo $date[$i]; ?>");
            month.push("<?php echo $month[$i]; ?>");
            prof.push("<?php echo $prof[$i]; ?>");
            venue.push("<?php echo $venue[$i]; ?>");
            course.push("<?php echo $course[$i]; ?>");
            type.push("<?php echo $type[$i]; ?>");
        <?php }?>

        for(var i = 0; i < prof.length; i++){
            console.log(<?php echo $countAll; ?>);
            getNotifications(type[i], date[i], month[i], venue[i], prof[i], course[i]);
        }
    });
</script>
