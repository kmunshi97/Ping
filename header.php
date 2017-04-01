<?php $fullName = "Kanishka Munshi"?>
<html>

    <head>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/reset.css">
        
        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/icon.css">
        
        <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    
        <!--The javascripts!-->
        <script src="js/jquery-3.2.0.min.js"></script>
        <script src="js/tab.js"></script>
        <script src="js/semantic.min.js"></script>

        
        <style>
            *{
                margin-left:0;
                margin-right:0;
                font-size: 12pt;
            }
            .username{
                font-size: 18pt;
                font-family: cursive;
            }
        </style>
        
    </head>
    <body>
        
        <div class="ui header">
            <div class="ui massive container" style="width:75%;">
                
                <div class="ui segment">
                
                    <div class="ui secondary pointing menu">
                          
                        <img class="ui bottom aligned circular image" src="img/characters/flash.png" 
                             style="width: 3.5vw; 
                                   height: 3.5vw;">
                        
                            <p class="username">
                                <?php 
                                    echo $fullName;
                                ?>
                            </p>

                        <p class="ui item"></p>
                        <p class="ui item"></p>

                        <p class="ui item"></p>
                        <p class="ui item"></p>

                        <a class="active item" href="chat.php">
                            <i class="home icon"></i>
                            Home
                        </a>
                        <p class="ui item"></p>

                        <a class="item" href="friends.php">
                            <i class="icon users"></i> 
                            Friends
                            <div class="floating ui teal label">
                                99+
                            </div>
                        </a>
                        <p class="ui item"></p>
                        
                        <a class="item">
                            <i class="mail outline icon"></i>
                            Messages
                            <div class="floating ui red label">
                                99+
                            </div>
                        </a>
                        
                        <div class="right menu"> 
                        
                            <a class="item">
                                <i class="user icon"></i>
                                Profile
                            </a>
                            
                            <a class="item">
                                <i class="calendar outline icon"></i>
                                Calendar
                            </a>

                            <a class="item">
                                <i class="privacy outline icon"></i>
                                Lost & Found
                            </a>

                            <!--TODO: Login-->
                            <a class="ui item" href="login.php">
                                <i class="sign out icon"></i>
                                Logout
                            </a>
                        </div>
                        
                    </div>
                </div>
            
            </div>
        </div>

        <div class="ui divider"></div>
        
        <script type="text/javascript" src="js/header.js"></script>
        
