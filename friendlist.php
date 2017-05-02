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

    $sql = "SELECT fname, lname, rollnum, branch FROM users ORDER BY `rollnum` ASC";
    $result = mysqli_query($conn, $sql);

    $i = 0;
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $username[$i] = $row["fname"]. " " . $row["lname"];
            $branch[$i] = $row["branch"];
            $rollnum[$i] = $row["rollnum"];
            $i++;
        }
    } else {
        echo "0 results";
    }

    
    mysqli_close($conn);
?>
<style>
    .ui .friendlist:hover{
        opacity: 0.25;
    }
</style>

<body>
    
    <div class="ui divider"></div>
    
    <!--The search bar starts here!-->
    <div class="ui category search">
        
        <div class="ui fluid icon input">
            <input class="prompt" type="text" placeholder="Search friends...">
            <i class="search icon"></i>
        </div>
        
        <div class="results"></div>
    
    </div> 
    <div class="ui divider"></div>
    <!--The search bar ends here!-->
        
    <!--The parent group starts here!-->
    <div class="ui cards"
         id="friend-list"
         style="overflow-y: auto;">
        
    </div><!--The parent card group ends here!-->
</body>


<script type="text/javascript" src="js/friendlist.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        
        var username = [];
        var rollnum = [];
        var branch = [];
        
        <?php for ($i = 0; $i<count($username); $i++) {?>
            username.push("<?php echo $username[$i]; ?>");
            rollnum.push("<?php echo $rollnum[$i]; ?>");
            branch.push("<?php echo $branch[$i]; ?>");
        <?php }?>

        for(var i = 0; i < username.length; i++){
            getFriends(username[i], rollnum[i], branch[i]);
        }
    });
</script>

