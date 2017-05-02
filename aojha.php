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
                    
                        <img class="ui large image" src="img/me.JPG">
                    
                    <a class="active item" data-tab="first">
                        <i class="food icon"></i>
                        About
                    </a>

                    <a class="item" data-tab="second">
                        <i class="signup icon"></i>
                        Computer Graphics
                    </a>
                    
                    <a class="item" data-tab="third">
                        <i class="signup icon"></i>
                        Network Flow Optimization
                    </a>
                </div>
                <!--The vertical tabbed menu ends here!-->
            </div>
        </div>
        <!-- The left rail starts here! -->

        <!-- The left rail starts here! -->        
        <div class="ui right rail" style="margin:auto;">
            <div class="ui segment">
                <!--The tabcontent #1 starts here!-->
                <div class="ui active tab segment" data-tab="first">
                    <div class="content">
                        <div class="ui header">
                            About
                        </div>
                        <div class="ui divider"></div>
                        Hi!
                    </div>
                </div>
                <!--The tabcontent #1 ends here!-->

                <!--The tabcontent #2 starts here!-->
                <div class="ui tab segment" data-tab="second">
                    <div class="content">
                        <div class="ui header">
                            Computer Graphics
                        </div>
                        <div class="ui divider"></div>
                        Hi!                            
                    </div>
                </div>
                <!--The tabcontent #2 ends here!-->
                
                <!--The tabcontent #3 starts here!-->
                <div class="ui tab segment" data-tab="third">
                    <div class="content">
                        <div class="ui header">
                            Network Flow Optimisation   
                        </div>
                        <div class="ui divider"></div>
                        Hi!                            
                    </div>
                </div>
                <!--The tabcontent #3 ends here!-->

            </div>
        </div>
        <!-- The left rail ends here! -->


        <!--The center rail starts here! -->
        <div class="ui container">
            <!--The tabcontent #1 starts here!-->
            <div class="ui active tab segment" data-tab="first">
                <div class="content">
                    <div class="ui header">
                        About
                    </div>
                    <div class="ui divider"></div>
                    Hi!
                </div>
            </div>
            <!--The tabcontent #1 ends here!-->

            <!--The tabcontent #2 starts here!-->
            <div class="ui tab segment" data-tab="second">
                <div class="content">
                    <div class="ui header">
                        Computer Graphics
                    </div>
                    <div class="ui divider"></div>
                    Hi!                            
                </div>
            </div>
            <!--The tabcontent #2 ends here!-->

            <!--The tabcontent #3 starts here!-->
            <div class="ui tab segment" data-tab="third">
                <div class="content">
                    <div class="ui header">
                        Network Flow Optimization
                    </div>
                    <div class="ui divider"></div>
                    Hi!                            
                </div>
            </div>
            <!--The tabcontent #3 ends here!-->
        </div>
        <!--The central rail ends here!-->
    
    </div><!--The rail ends here! -->
</div>    

<div class="ui footer inverted segment"
     style="width: 100vw;
            margin: auto;
            position: absolute;
            bottom: 1vh;">
    
        <div class="ui stackable divided equal height stackable grid">
        
            <div class="seven wide column">
                <img class="ui tiny image right floated"
                     alt="Site Logo!"
                     src=""
                     style="margin-right: 2.5vw;">                        
            </div>
                                        
            <div class="two wide column">
                <h4 class="ui inverted header">
                    Services
                </h4>
                    
                <div class="ui inverted link list">
                    <a href="#" class="item">
                        Order!
                    </a>
                </div>
            </div>
                
            <div class="four wide column">
                <h4 class="ui inverted header">
                    Team
                </h4>
               
                <div class="ui inverted link list">
                    <a class="item">
                        Kanishka Munshi 2015121
                    </a>
                </div>
            </div>
    </div>
</div>