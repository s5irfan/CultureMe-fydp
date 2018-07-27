<!DOCTYPE html>

<?php include 'db-connection.php';?>
<html>
	<head>
        <title> CultureMe</title>
        <script type="text/javascript" src="mainPage.js"></script>
        <link href="./mainPage.css" type="text/css" rel="stylesheet">
        <link rel="import" href="./login.html">
        

	</head>
	<body>
        <div class="container" >
                <img class="slide" src="bridal.jpg" >
                <img class="slide" src="henna.jpg" >
                <img class="slide" src="hair.jpg" >
                <img class="slide" src="saree.jpg" >
                <img class="logo1" src="logo1.png" >
                <button class="signInBtn" onclick="signIn()">Sign In</button>
                <button class="signUpBtn" onclick="signUp()">Sign Up</button>
        </div>


        
        <div id = "signIn" class="modal">
                <div id='Blockchain' class='BCcontent'>
                <div class="fields1-group">
                        <span class="close" onclick="span()">&times; </span>
                        <p> Sign In</p>
                        <input class='field' id = 'userName'type = 'text' name='userName' placeholder = 'Username'><br>
                        <input class='field' id = 'password'type = 'text' name='password' placeholder = 'Password'><br>
                        <input class = 'submitBtn' type= 'submit' value= 'Sign In' onclick="span()"><br>
                        <u> Forgot Password?</u><br>
                        <p1>Don't have an account?</p1>
                        
                        <u id="signUpTxt" onclick="signInsignUp()"> Sign Up </u> 
                        
                </div>  
                </div>                
        </div>  
    
        <div id = "signUp" class="modal">
                <div id='Blockchain' class='BCcontent'>
                <div class="fields1-group">
                        <span class="close" onclick="span()">&times; </span>
                        <p> Sign Up</p>
                        <input class='field' id = 'first'type = 'text' name='first' placeholder = 'First Name'><br>
                        <input class='field' id = 'last'type = 'text' name='last' placeholder = 'Last Name'><br>
                        <input class='field' id = 'email'type = 'text' name='email' placeholder = 'E-mail'><br>
                        <input class='field' id = 'mobile'type = 'text' name='mobile' placeholder = 'Contact'><br>
                        <input class='field' id = 'userName'type = 'text' name='userName' placeholder = 'Username'><br>
                        <input class='field' id = 'password'type = 'text' name='password' placeholder = 'Password'><br>
                        <input class='field' id = 'confirmPassword'type = 'text' name='confirmPassword' placeholder = 'Confirm Password'><br>
                        <input class = 'submitBtn' type= 'submit' value= 'Sign Up' onclick="span()"><br>
                        <u> Forgot Password?</u><br>
                        <p1>Already have an account?</p1>
                        
                        <u id="signInTxt" onclick="signInsignUp()"> Sign In</u> 
                        
                </div>  
                </div> 
        </div>  
            
        <!-- <div class="wrap">
                        <div class="search">
                           <input type="text" class="searchTerm" placeholder="What are you looking for?">
                           <button type="submit" class="searchButton">
                             <i class="fa fa-search"></i>
                          </button>
                        </div>
                     </div> -->


	</body>






</html>














