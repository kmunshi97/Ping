<?php 
    // The php file with the header template!
    include 'header.php';
?>
<html>
    <head>
        <title>
            Ping!
        </title>
    </head>
    
    <body>

        <!--The main container of the body!-->
        <div class="ui container">
            
            <div class="ui segment" 
                 style="width: 42.5vw;
                        margin-top: 1.5vw;
                        margin-bottom: 0.5vw;
                        margin-left: auto;
                        margin-right: auto;">
            
                <!--Left rail starts here!-->
                <div class="ui left very close mini rail"
                     style="width: 22.5vw;">
                
                    <div class="ui segment">
                        <div class="ui fixed header">
                            Friends:
                        </div>
                        
                        <?php 
                            include 'friendlist.php';
                        ?>
                    </div>
                
                </div>
                <!--Left rails ends here!-->
        
                
                <!--The right rail starts here!-->
                <div class="ui right close rail" 
                     style="width: 23vw;">
                    
                    <!--The quick chat card starts here!-->
                    <div 
                         class="ui fluid card"
                         style="height: 27vw;
                                overflow-y: hidden;">
                        
                        <div class="content">
                         
                            <label class="ui huge basic fluid image label">
                    
                                Kanishka Munshi
                                
                                <span class="right floated">
                                    <img class="ui avatar circular image" src="img/characters/hellboy">
                                </span>
                        
                           </label>
                        
                        </div>
                      
                        <div class="ui move up reveal">
                            
                            <div class="visible content">
                            
                                <img class="ui large image" src="img/characters/white-walker-1">
                            
                            </div>
                            
                            <!--This code is triigered on image reveal-->
                            <div class="hidden content" style="margin: 0;">
                                <div class="ui divider"></div>
                                
                                <div class="description" style="height: auto;">
                                    <br>The quick chat goes here!
                                </div>
                                
                                <!--TODO: Quick chat stuff-->
                                <div class="ui action fluid input" 
                                     style="margin-bottom: 0;
                                            padding: 0;">
                                        <input type="text" placeholder="Enter message here..." >
                                        <button class="ui red right floated icon button ">
                                            <i class="send icon"></i>
                                        </button>
                                    </div>
                            </div>
                        
                        </div>
                        
                        <div class="content">
                        
                            <span class="right floated">
                                2015121
                            </span>
                        
                            <i class="mail icon"></i>
                                kanishkamunshi@iiitdmj.ac.in    

                        </div>
                      
<!--
                        <div class="extra content">
                        
                            <div class="ui huge transparent left icon input">
                            
                                <i class="talk icon"></i>                        
                                <input type="text" placeholder="Enter message here...">
                                <i class=" icon"></i>

                            </div>
                        </div>
-->
                    </div><!--The card ends here!-->
                    
               
                    <!--The events inclusion goes here!-->
                    <div> 
                        <?php
                            include 'notification.php';
                        ?>
                    </div>
                    
                </div><!--Right Rail ends here!-->
              
                <!--The center rail!-->
                <div class="center rail">
                    <?php
                        include 'chatbox.php';
                    ?>
                </div>
                
            </div><!--The entire rail ends here!-->
            
        </div><!--Container ends here!-->
        
    </body>
        
</html>