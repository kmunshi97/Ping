<?php
    $servername = "localhost";
    $root = "root"; 
    $pass = "";
    $dbname = "ping";

    // Create connection
    $conn = mysqli_connect($servername, $root, $pass, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT fname, lname, rollnum, branch, email FROM users ORDER BY `rollnum` ASC";
    $result = mysqli_query($conn, $sql);

    $i = 0;
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $username[$i] = $row["fname"]. " " . $row["lname"];
            $branch[$i] = $row["branch"];
            $rollnum[$i] = $row["rollnum"];
            $mail[$i] = $row["email"];
            $i++;
        }
    } else {
        echo "0 results";
    }

    
    mysqli_close($conn);
?>

<body>
    <div class="ui divider"></div>
    
    <!--The list starts here!-->
    <div class="ui top aligned divided list" 
         id = "users-list"
         style="height: 20vw;
                overflow-y: scroll;">
            
    </div><!--The list ends here-->
</body>

<script type="text/javascript" src="js/usercard.js"></script>
<script type="text/javascript">
    $(document).ready(function() {        
        var username = [];
        var rollnum = [];
        var branch = [];
        var mail = [];
        
        <?php for ($i = 0; $i < count($username); $i++) {?>
            username.push("<?php echo $username[$i]; ?>");
            rollnum.push("<?php echo $rollnum[$i]; ?>");
            branch.push("<?php echo $branch[$i]; ?>");
            mail.push("<?php echo $mail[$i]; ?>");
        <?php }?>

        for(var i = 0; i < username.length; i++){
            getUsers(username[i], rollnum[i], branch[i], mail[i]);
        }
    });
</script>

