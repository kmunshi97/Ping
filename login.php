<!--PHP code to generate random superhero and background images!-->
<?php

    $bg = array(
    
        'img/bg/antman.jpg', 
        'img/bg/batman-1.png', 
        'img/bg/flash.jpg', 
        'img/bg/green-lantern.jpg', 
        'img/bg/robin.jpg', 
        'img/bg/winterfell.jpg'
    
    );

    $divAvatar = array(
            
        'img/characters/antman.jpg',
        'img/characters/bat-man.jpg',
        'img/characters/flash.png', 
        'img/characters/green-lantern.png',
        'img/characters/robin.png',
        'img/characters/jonsnow.jpg'
    
    );

    $i = rand(0, count($bg)-1);
    //$j = rand(0, count($divAvatar)-1);
  
    $selectedBg = $bg[$i];
    $selectedDivAvatar = $divAvatar[$i];
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        
        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/reset.css">
        
        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/icon.css">
        
        <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    
        <script src="js/semantic.min.js"></script>
        

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body 
          style="background-image: url(<?php echo $selectedBg; ?>);">

       <div class="container">
            <img 
                 src="<?php echo $selectedDivAvatar; ?>">

            <form method="post" action="">

                <div class="ui big icon input focus" 
                     style="margin-bottom:.5vw;">
                    <i class="user icon"></i>
                    
                    <input type="text" name="username" placeholder="Username">
                </div>
                            
                <div class="ui big icon input focus">
                    <i class="lock icon"></i>
                    
                    <input type="password" name="password" placeholder="Password">
                </div>
                
                <div class="ui divider"></div>
                
                <button type="submit" class="ui huge green button" type="submit" style="margin-bottom: .5vw;">Login</button>
            
                <!--TODO Create a forgot password link-->
                <a href="#"><p>Forgot Password?</p></a>
            </form>
        </div>
    </body>
</html>
