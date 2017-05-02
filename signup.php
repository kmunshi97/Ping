

<head>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/reset.css">
        
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/icon.css">
        
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	
    
    <title>||Signup||</title>
	
    
</head>

<body>
    
    
    <div class="ui container">
        <div class="ui divider"></div>
        
        <div class="ui centered raised card" style="width: 32vw;">
            <div class="content">
                <div class="ui header">
                    ||Signup||
                </div>
       
	   <form action="validate.php" method="post">
				
				 <div class="ui divider"></div>
                        <div class="ui fluid input">
                            <input type="text" name="rollnum" placeholder="Roll Number *">
                        </div>
                        
                <div class="ui divider"></div>   
                                
                <div class="description">
                    <div class="ui form">
                        
                        <div class="ui two fields">
                            
                            <div class="ui field">
                                <div class="ui input">
                                    <input type="text" name="fname" placeholder="First Name *">
                                </div>
                            </div>
                            
                            <div class="ui divider"></div>
                            
                            <div class="ui field">
                                <div class="ui input">
                                    <input type="text" name="lname" placeholder="Last Name *">
                                </div>
                            </div>
                        </div>
                        <!--Two Fields ends here!-->
						
                       
                        
                       
                   
                        <div class="ui divider"></div>
                        
                        <div class="ui fluid input">
                            <input type="email" name="email" placeholder="Mail *">
                        </div>
                        
                       <div class="ui divider"></div>   
                                
                <div class="description">
                    <div class="ui form">
                        
                        <div class="ui two fields">
                            
                            <div class="ui field">
                                <div class="ui input">
                                    <input type="password"  name="password" placeholder="Password *">
                                </div>
                            </div>
                            
                            <div class="ui divider"></div>
                            
                            <div class="ui field">
                                <div class="ui input">
                                    <input type="password"  name="cpassword" placeholder="Confirm Password *">
                                </div>
                            </div>
                        </div>
						  <div class="ui divider"></div>  
						  
						<div class="ui two fields">
                            
                            <div class="ui field">
                                <div class="ui input">
                                    <input type="text"  name="programme" placeholder="Programme *">
                                </div>
                            </div>
                            
                            <div class="ui divider"></div>
                            
                            <div class="ui field">
                                <div class="ui input">
                                    <input type="text"  name="branch" placeholder="Branch *">
                                </div>
                            </div>
                        </div>
						  <div class="ui divider"></div>  						  
						  <div class="description">
                    <div class="ui form">
                        
                       
                        
						<div class="ui divider"></div>  
                         <div class="ui field">
                        <div class="ui input">
                            <input type="number" name="phonenum" placeholder="Phone Number">
                        </div>
                        </div>
                        
                        <div class="ui divider"></div>
                        
                       
                        
                    </div>
                    <!-- UI Form ends here! -->
                </div>
                <!--Description ends here!-->
            
            </div>
            <!--Content ends here!-->
            
            <div class="extra content">
                <div class="ui primary button  right floated">
					
                    <input class="ui primary button" type="submit" value="SUBMIT">
                </div>
            </div>
            
        </div>
    </div>
	<span id="status"></span>
	</form>
    
</body>