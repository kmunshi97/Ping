<head>
    <link rel="stylesheet" type="text/css" href="css/chat.css">      
</head>

<?php
    if (isset($_GET['previousChat'])) {
        $friendRollNum = ($_GET['inputFriendRollNum']); 
        //echo $friendRollNum;
        session_start();
        $_SESSION["friendRoll"] = $friendRollNum;
    
    }
    //echo $rollUser;
?>

<body>
<!--
    <form id="previousChatForm" method="get" action="chat.php">
        <input id="inputFriendRollNum" name="inputFriendRollNum" hidden></input>
        
        <input class="ui button right floated" type="submit" id="previousChat" name="previousChat" value="Previous Chat"></input>

    </form> 
-->
    <div class="top">
        <!--A single card starts here!-->
        <div class="ui fluid card">
            <div class="content">
                <div class="header">
                    <a class="ui small header" id="friendName">
                        <?php
                            if(isset($_GET["inputFriendRollNum"])){
                                $friendRollNo = $_GET["inputFriendRollNum"];
            
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

                                $query = "SELECT fname, lname, branch FROM users WHERE rollnum=$friendRollNo";
                                
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_array($result);
                                $fn=$row[0];
                                $ln=$row[1]; 
                                $branch=$row[2]; 
                                
                                $friendName = $fn . "&ensp;" . $ln;
                                $friendBranch = $branch;
                                echo $friendName;
                                
                            }else{
                                $friendName = "A man has no name!";
                                $friendBranch = "";
                                $friendRollNo = "";
                            }
                        ?>
                        
                    </a>
                    <img 
                     class="ui custom right floated circular image"
                     src="img/characters/joeffrey.jpg">                    
                </div>

                <div class="meta" id="friendDetails">
                    <?php 
                        echo $friendBranch;
                        echo "  ";
                        echo $friendRollNo;
                    ?>
                </div>
            </div>     
        </div><!--A single card ends here!-->
        <div class="ui divider"></div>
    </div>
            
    <!--The chat starts here!-->
    <div  class="chat ui fluid card"
         style="height: 29.25vw;">        
<!--
        <a class="ui left pointing red label">Red Pointing</a>
-->
        <div id="chat-history" class="content"
             style="height: inherit;
                    overflow-y: auto;
                    overflow-x: hidden;">
            
            <div class="header"></div>
            
            <div class="description">
            
                <button id="goto"
                        class="circular ui icon red button"
                        onclick="scrollToBottom('chat-history')"
                        style=" float: right;
                                margin-top: 20vw;
                                margin-left: 36vw;
                                position: fixed;
                                z-index: 99;">

                    <i class="Angle Double Down icon"></i>
                </button>
                
                <!--All the chat goes in here!-->
                <ul id="chatbox">
                    
                    <!--The time stamp goes here-->
                    <div class="ui divider"></div>
                    <li class="center aligned meta">
                        Yesterday, 12:30 PM
                    </li>
                    <div class="ui divider"></div>
                    
                    <!--<li class="sender">
                        <div class="sender">
                            <span class="ui left pointing big blue label">
                                Hi Sansa!
                            </span>
                        </div>
                    </li>
                    
                    
                    <li class="receiver">
                        <div class="receiver">
                            <span class="ui right pointing big teal label">
                                Hi Joeffrey!
                            </span>
                        </div>    
                    </li>

                    
                    <li class="sender">
                        <div class="sender">
                            <span class="ui left pointing big blue label">
                                You look beautiful today...
                            </span>
                        </div>
                    </li>
                    
                    <li class="receiver">
                        <div class="receiver">
                            <span class="ui right pointing big teal label">
                                Aww! thank you!
                            </span>
                        </div>
                    </li>

                    
                    <li class="sender">
                        <div class="sender">
                            <span class="ui left pointing big blue label">
                                Since we are going to be married, let me confess, I have a thing for BDSM.
                            </span>
                        </div>
                    </li>
                    
                    
                    <li class="sender">
                        <div class="sender">
                            <span class="ui left pointing big blue label">
                                I don't know are you into that?
                            </span>
                        </div>
                    </li>
                    
                    
                    <li class="receiver">
                        <div class="receiver">
                            <span class="ui right pointing big teal label">
                                WTF?
                            </span>
                        </div>
                    </li>
                    
                    
                    <li class="sender">
                        <div class="sender">
                            <span class="ui left pointing big blue label">
                                Or should I put arrows into you, like I did with those whore that Imp sent for me?
                            </span>
                        </div>
                    </li>

                    
                    <li class="receiver">
                        <div class="receiver">
                            <span class="ui right pointing big teal label">
                                Are you fucking serious?
                            </span>
                        </div>
                    </li>
                  
                                        
                    <li class="sender">
                        <div class="sender">
                            <span class="ui left pointing big blue label">
                                Just Kidding!!! :P
                            </span>
                        </div>
                    </li>

                    
                    <!--The time stamp goes here--><!--
                    <div class="ui divider"></div>
                    <li class="center aligned meta">
                        Today, 10:10 PM
                    </li>
                    <div class="ui divider"></div>

                                        
                    <li class="sender">
                        <div class="sender">
                            <span class="ui left pointing big blue label">
                                I will place your dad's face on a spear and hang him outside Kings Landing!
                            </span>
                        </div>
                    </li>

                    
                    <li class="receiver">
                        <div class="receiver">
                            <span class="ui right pointing big teal label">
                                Dude you are nuts.
                            </span>
                        </div>
                    </li>

                                        
                    <li class="sender">
                        <div class="sender">
                            <span class="ui left pointing big blue label">
                                Again got ya!!!
                            </span>
                        </div>
                    </li>

-->                    
                </ul>
            
            </div>
        
        </div>
        
        <div class="extra content">
            <form class="ui form" id="myForm" action="sendmsg.php" method="POST">
        
                <input id="inputFriendRollNum" name="inputFriendRollNum" hidden></input>

                <div class="two fields">
                    <div class="field" style="width: 92.5vw;">
                        <textarea rows="2"
                                  type="text"
                                  name="msgText" 
                                  id="message-textarea"
                                  placeholder="Enter Message here..."></textarea>
                    </div>
                    
                    <div class="two fields">
                        <div class="field">
                            <button onclick="fetchChat()"
                                    class="circular ui icon button">
                                <i class="attach icon"></i>
                            </button>
                        </div>
            
                    <div class="field">
                            <input id="send-button"
                                   type="submit"
                                   onclick="sendChat()"
                                   class="ui primary button right floated"
                                   value="Send">
                            </input>
                        </div>
                    </div>
                </form>
            <span id="result"></span>
            </div>
        </div>

    </div>
</body>
    
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/semantic.min.js"></script>
    <script type="text/javascript" src="js/chatbox.js"></script>
    <script type="text/javascript" src="js/chat_send.js"></script>
    <script type="text/javascript" src="js/friendlist.js"></script>
    <!--<script>
        $(document).ready(function() {
            document.getElementById("previousChat").submit();
        }
    </script>
    -->
