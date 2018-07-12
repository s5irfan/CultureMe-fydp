<!DOCTYPE html>
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
                        <p> Sign In</p>
                        <input class='field' id = 'userName'type = 'text' name='userName' placeholder = 'Username'><br>
                        <input class='field' id = 'password'type = 'text' name='password' placeholder = 'Password'><br>
                        <input class = 'submitBtn' type= 'submit' value= 'Sign In'><br>
                        <u> Forgot Password?</u><br>
                        <p1>Don't have an account?</p1>
                        <div onclick="signUp()">
                        <u> Sign Up </u> 
                        </div>
                </div>  
                </div>                
        </div>  
    
        <div id = "signUp" class="modal">
                        <div id='Blockchain' class='BCcontent'>
                        <div class="fields1-group">
                                <p> Sign Up</p>
                                <input class='field' id = 'userName'type = 'text' name='userName' placeholder = 'Username'><br>
                                <input class='field' id = 'password'type = 'text' name='password' placeholder = 'Password'><br>
                                <input class = 'submitBtn' type= 'submit' value= 'Sign Up'><br>
                                <u> Forgot Password?</u><br>
                                <p1>Already have an account?</p1>
                                <div onclick="signIn1()">
                                <u> Sign In</u> 
                                </div>   
                        </div>  
                        </div> 
                </div>  
            



	</body>
</html>