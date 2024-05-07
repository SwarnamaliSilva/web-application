<?php
session_start();

$connect = new mysqli('localhost','root','','quizza');
if($connect->connect_error){
    die("Failed to connect : ".$connect->connect_error);
}


    if(isset($_POST["email"])){
        $email=$_POST['email'];
        $password =$_POST['password'];
        $account_type = $_POST['account_type'];

    $sql = "SELECT * FROM signup_details WHERE email = '".$email."' AND password= '".$password."' limit 1"; 

    $result = mysqli_query($connect,$sql);
    
    if (mysqli_num_rows($result)==1) {
        $_SESSION['email'] = $login;
        header('Location:geo_interface1.php');
        
        exit();

    }else{
        echo "<br><br><h2><center><font color='#ffffff'>Enter your correct login details</font> <font color='ff0000'>!!!</font><br> 
        ⬅  Go Back To The Login Page</font></h2></center>     <font color='sky blue'>",
         '<center><img src="output-onlinegiftools (2).gif" width="480px" height="380px"></center>','<body bgcolor="sky blue">';
        exit();
    }


    }
    
?>     






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="logo1ico.ico">
        

        
    </head>
    
    <body>


        <!--sign up form-->

    <div class="container">
    
            <img class ="image" src="1a.png" alt="Sign Up To QuizzA">
                    
        <!--sign in form-->
        <div class="one">
        
        <form class="loginform" name="form2" method="POST" >
           
        
            <h2 class="log">QuizzA - LOGIN</h2><hr>
            
        
        <div class="sign">
            <input type="email" maxlength="" name="email" id="email" required>
            <span></span>
            <label class ="email" >Email Address</label>
            </div>
    
        <div class="sign">
            <input type="password" maxlength="" name="password" id="password" required>
            <span></span>
            <label>Password</label>
            </div>

            <div class="actype">
                <label><select class="actyp" name="account_type" id="account_type" required>
                            <option value="" >Select Your Account Type</option>
                            <option value="Admin" required>Admin</option>
                            <option value="User" required>User</option>
                        </select>
                </label>
                </div><br><br>

        <input type="reset" value="clear" name ="clear">
        <input type="submit" value="login" name="login"><br>

    <div class="create">
        <p>Haven't an account? <a class="signup" href="signup form.php">Sign up here</a></p>
    <br>
    <p style="margin-top: -10px;">Want to select account type again? <a class="signup" href="commonlogin.php">Go Back</a></p>
    </div>

        </form>

    </div>          
    </div>
        
    </body>
    </html>