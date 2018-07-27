<?php session_start();
include("db-connection.php");

  $UserName = $_POST['userName']; 
 $pass = $_POST['password']; 
 
      


function Check($user, $pass, $conn){
        $user=(filter_var($user,  FILTER_SANITIZE_EMAIL));

       $sql = "SELECT * FROM users WHERE UserName = '".$user."'";

        $runQuery = mysqli_query($conn, $sql);
        $result = mysqli_fetch_array($runQuery);


        if(password_verify($pass, $result["password"])) {

        
                header('Location: ./serviceProfile.html');
            
            exit();
        }else{
            print("<strong><center><font  color ='red'>LOGIN FAILED. PLEASE RETRY.</font></center></strong>");
        }

    }
    //then you can use them in a PHP function.

    $result = Check($UserName, $pass,$mySQLConnection);


?>
