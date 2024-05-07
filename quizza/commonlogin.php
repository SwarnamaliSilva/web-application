<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Select Account Type</title>
        <link rel="stylesheet" href="commonlogin.css">
        <link rel="icon" type="image/x-icon" href="logo1ico.ico">
        

        
    </head>
    
    <body>


        <!--sign up form-->

    <div class="container">
    
            <img class ="image" src="1a.png" alt="Sign Up To QuizzA">
                    
        <!--sign in form-->
        <div class="one">
            
        <form class="loginform" name="form4" method="POST" action="">
           
        <br>
            <h2 class="log">QuizzA</h2><hr style="margin-top: -17px;"><br>

            
        <div class="field1">
            <h2 class="log1">QuizzA</h2><br>

            <p class="sign">Admin Login</p><br>


            <button type="submit" class="sub1"><a class="sub1a" name="alogin" style="text-decoration:none;" href="index3.php">Login</a></button><br>
        </div>
        
        
        <div class="field2">
            <h2 class="log2">QuizzA</h2><br>

            <p class="sign">User Login</p><br>
            <button type="submit" class="sub2"><a class="sub2a" name="ulogin" style="text-decoration:none;" href="index2.php">Login</a></button><br>

            <button type="submit" class="sub3"><a class="sub3a" name="usignup" style="text-decoration:none;" href="signup form.php">Sign Up</a></button><br>
        
        
        </div>
        
        
        
        
        
        
        
           


        
        </form>

    </div>          
    </div>
        
    </body>
    </html>