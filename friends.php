<?php 
    include 'header.php';
?>
<head>
    <title>
        Friends
    </title>

</head>

<body>
    <div class="ui container">
        <!--TODO: resizing!-->
        <!-- style="width: 40%; height: 30%">-->
        
        <!--The Rail starts here!-->    
        <div class="ui segment" 
             style="margin-left: auto;
                    margin-right: auto;
                    width: 48vw;">
            
            <!--The left rail content goes here!-->
            <div class="ui custom close left dividing rail" 
                 style="width: 22.5vw;">
                <div class="ui segment">
                    <div class="ui fixed header">
                        Friends:
                    </div>
                    
                    <div class="">
                        <?php 
                            include 'friendlist.php';
                        ?>
                    </div>
                    
                </div>
            </div><!--The left rail ends here!-->
            
            
            <!--The right rail content goes here!-->
            <div class="ui right close dividing rail"
                 style="width: 22.5vw;">
                <div class="ui segment">
                    <div class="ui fixed header">
                        Friend Requests:
                    </div>
                    
                    <div class="">
                        <?php 
                            include 'friendrequests.php';
                        ?>
                    </div>
                    
                </div>
            </div><!--The right rail ends here!-->
  
            
            <!--The center rail content goes here-->
            <div class="users">
                <div class="ui fixed header">
                    Users:
                </div>

                <div class="">
                    <?php 
                        include 'users.php';
                    ?>
                </div>
            </div>
        </div><!--The rail ends here!-->
    </div><!--The body container ends here!-->
</body>