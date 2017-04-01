<!--TODO: Change the preferences order based on the Batch-->
<body>
    <div class="ui divider"></div>
    
    <!--The search bar starts here!-->
    <div class="ui search">
        <div class="ui action fluid input">
            <input type="prompt" placeholder="Search...">

            <select class="ui compact selection dropdown">
                <option value="all">All</option>
                <option value="articles">C.S.E.</option>
                <option value="articles">E.C.E.</option>
                <option value="articles">M.E.</option>
                <option value="articles">Design</option>
            </select>

            <div type="submit" class="ui teal icon button">
                &ensp;
                Search
                &ensp;
                &ensp;
                &ensp;
                <i class="search icon"></i>
                &ensp;

            </div>
        </div>
        
        <div class="results"></div>
    
    </div>
    <div class="ui divider"></div>
    
<!--<div class="ui category search">
        <div class="ui fluid icon input">
            <input class="prompt" type="text" placeholder="Search users...">
            <i class="search icon"></i>
        </div>
        
        <div class="results"></div>
    </div> 
    <div class="ui divider"></div>
-->
    <!--The search bar ends here!-->
    
    
    <!--The accordian parent group starts here!-->
    <div class="ui styled fluid accordion">
        
        <!--A single accordian starts here!-->
        <div class="title">
            <i class="dropdown icon"></i>
            Batch 2013
        </div>
  
        <div class="content">
            <p>This view is under construction kindly refrain from entering here!</p>
        </div>
        <!--A single accordian ends here!-->
        
        <!--A single accordian starts here!-->
        <div class="title">
            <i class="dropdown icon"></i>
            Batch 2014
        </div>
  
        <div class="content">
            <p>This view is under construction kindly refrain from entering here!</p>
        </div>
        <!--A single accordian ends here!-->

        
        <!--A single accordian starts here!-->
        <div class="active title">
            <i class="dropdown icon"></i>
            Batch 2015
        </div>
    
        <div class="active content">
            <?php 
                include 'usercard.php';
            ?>
        </div>
        <!--A single accordian ends here!-->
  
        
        <!--A single accordian starts here!-->
        <div class="title">
            <i class="dropdown icon"></i>
            Batch 2016
        </div>
  
        <div class="content">
            <p>This view is under construction kindly refrain from entering here!</p>
        </div>
        <!--A single accordian ends here!-->
        
    </div>
    <!--The parent accordian group ends here!-->
    
    <script type="text/javascript" src="js/accordian.js"></script>
</body>