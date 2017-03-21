<head>
    <link rel="stylesheet" type="text/css" href="css/chat.css">      
</head>

<body>        
    
    <div class="top">
        <!--A single card starts here!-->
        <div class="ui fluid card">
            <div class="content">
                <div class="header">
                    <a class="ui small header">
                        Joffrey Baratheon
                    </a>
                    <img 
                     class="ui custom right floated circular image"
                     src="img/characters/joeffrey">

                </div>

                <div class="meta">
                    CSE &ensp; 2015XXX
                </div>

            </div>     
        </div><!--A single card ends here!-->
        <div class="ui divider"></div>
    </div>
            
    <!--The chat starts here!-->
    <div id="chat-history" class="chat ui fluid card"
         style="height: 29.25vw;">        
<!--
        <a class="ui left pointing red label">Red Pointing</a>
-->
        <div class="content"
             style="height: inherit;
                    overflow-y: scroll;
                    overflow-x: hidden;">
            
            <div class="header"></div>
            
            <div class="description">
            
                
                <button id="goto"
                        class="circular ui icon red button"
                        onclick="gotoEnd()"
                        style=" float: right;
                                margin-top: 20vw;
                                margin-left: 36vw;
                                position: fixed;
                                z-index: 99;">

                    <i class="Angle Double Down icon"></i>
                </button>
                
                <!--All the chat goes in here!-->
                <ul>
                    
                    <!--The time stamp goes here-->
                    <div class="ui divider"></div>
                    <li class="center aligned meta">
                        Yesterday, 12:30 PM
                    </li>
                    <div class="ui divider"></div>
                    
                    <li class="sender">
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

                    
                    <!--The time stamp goes here-->
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

                    
                </ul>
            
            </div>
        
        </div>
        
        <div class="extra content">
            <div class="ui form">
                <div class="two fields">
                    
                    <div class="field" style="width: 92.5vw;">
                        <textarea rows="2" id="message-textarea"
                                  placeholder="Enter Message here...">
                        </textarea>
                    </div>
                    
                    <div class="two fields">
                        <div class="field">
                            <button class="circular ui icon button">
                                <i class="attach icon"></i>
                            </button>
                        </div>
                        <div class="field">
                            <button id="send-button"
                                    class="ui primary button right floated">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
<!--
<script id="message-template" type="text/x-handlebars-template">
  <li>
    <div class="message-data align-right">
      <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
      <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message other-message float-right">
      {{messageOutput}}
    </div>
  </li>
</script>

<script id="message-response-template" type="text/x-handlebars-template">
  <li>
    <div class="message-data">
      <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
      <span class="message-data-time">{{time}}, Today</span>
    </div>
    <div class="message my-message">
      {{response}}
    </div>
  </li>
</script>
-->
    
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/semantic.min.js"></script>
    <script type="text/javascript" src="js/chat.js"></script>
    
</body>
