    <head>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/reset.css">
        
        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/icon.css">
        
        <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    
        <!--The javascripts!-->
        <script src="js/jquery-3.2.0.min.js"></script>
        <script src="js/tab.js"></script>
        <script src="js/semantic.min.js"></script>
        
    </head>

<!--TODO: add a header here!-->
<div class="ui container" style="height: 5vh;"></div>

<div class="ui container" style="margin: auto;">
    
    <!--The rails starts here! -->
    <div class="ui segment">    
        <!-- The left rail starts here! -->        
        <div class="ui left rail" style="margin:auto; 
                                         width: 20vw;">
            <div class="ui segment">

                <!--The vertical menu starts here!-->
                <div class="ui huge fluid vertical pointing big menu">
                    
                        <img class="ui large image" src="img/pkhanna.jpg">
                    
                    <a class="active item" data-tab="first">
                        <i class="food icon"></i>
                        Create
                    </a>

                    <a class="item" data-tab="second">
                        <i class=" icon"></i>
                        Profile
                    </a>

                    <a class="item" href="faculty-login.html">
                        <i class="sign out icon"></i>
                        Logout
                        <!--TODO: Logout here!-->
                    </a>
                </div>
                <!--The vertical tabbed menu ends here!-->
            </div>
        </div>
        <!-- The left rail starts here! -->

        <!-- The left rail starts here! -->        
        <div class="ui right rail" style="margin:auto;">
            <div class="ui segment">
                <a href="http://web.iiitdmj.ac.in/~pkhanna">Webpage</a>
            </div>
        </div>
        <!-- The left rail ends here! -->


        <!--The center rail starts here! -->
        <div class="ui container">
            <!--The tabcontent Update Stock starts here!-->
            <div class="ui active tab segment" data-tab="first">
                <?php include "create.html"?>
            </div>
            <!--The tabcontent Update Stock ends here!-->

            
        </div>
        <!--The central rail ends here!-->
    
    </div><!--The rail ends here! -->
</div>    

<div class="ui footer segment"
     style="width: 100vw;
            margin: auto;
            position: absolute;
            bottom: 1vh;">
    
        <div class="ui stackable divided equal height stackable grid">
        
            <div class="seven wide column">
                <img class="ui tiny image right floated"
                     alt="Ping!"
                     src=""
                     style="margin-right: 2.5vw;">                        
            </div>
                                        
            <div class="two wide column">
                <h4 class="ui header">
                    Services
                </h4>
                    
                <div class="ui link list">
                    <a href="#" class="item">
                        Ping!
                    </a>
                </div>
            </div>
                
            <div class="four wide column">
                <h4 class="ui header">
                    Team
                </h4>
               
                <div class="ui link list">
                    <a class="item">
                        Kanishka Munshi 2015121
                    </a>
                    <a class="item">
                        Harshit Choubey 2015103
                    </a>
                    <a class="item">
                        Chinmay Saini 2015073
                    </a>
                </div>
            </div>
    </div>
</div>