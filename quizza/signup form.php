<?php
session_start()

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign up</title>
        <link rel="stylesheet" href="style signup.css">
        <link rel="icon" type="image/x-icon" href="logo1ico.ico">
    </head>
    
    <body>


        <!--sign up form-->

    <div class="container">
    
            <img class ="image" src="1a.png" alt="Sign Up To QuizzA">
                    
        <!--sign in form-->
        <div class="one">
            
        <form class="signupform" name="form1" method="POST" action="php2.php" autocomplete="off">
        
          
            <h2 class="log" style="margin-top: 14px;">QuizzA - SIGN UP</h2><hr style="margin-top: -12px;">
            

        <div class="sign">
        <input type="text" maxlength="" name="user_name" id="user_name" required>
        <span></span>
        <label>User Name <font color = "red">*</font></label>
        </div>

        <div class="sign">
            <input type="text" maxlength="" name="first_name" id="first_name" required>
            <span></span>
            <label>First Name</label>
            </div>

        <div class="sign">
            <input type="text" maxlength="" name="last_name" id="last_name" required>
            <span></span>
            <label>Last Name</label>
            </div>
        
        

        <div class="sign">
            <input type="email" maxlength="" name="email" id="email" required>
            <span></span>
            <label class ="email">Email Address<font color = "red">*</font></label>
            </div>
    
        <div class="sign">
            <input type="password" maxlength="100" name="password" id="password" required>
            <span></span>
            <label>Password <font color = "red">*</font></label>
            </div>

      



        <div class="sign">
                <input type="password" maxlength="" name="confirm_password" id="confirm_password" required>
                <span></span>
                <label>Confirm Password <font color = "red">*</font></label>
                </div>
        

                <div class="actype">
                <label><select class="actyp" name="account_type" id="account_type" required style="margin-top: -7px; margin-left: 70px; width: 190px; height: 35px; background-color: rgb(176, 226, 238); border-radius: 15px;">
                            <option value="" >Select Your Account Type</option>
                            <option value="Admin" required>Admin</option>
                            <option value="User" required>User</option>
                        </select>
                </label>
                </div>





        <input type="reset" value="Clear" name ="clear" id="clear" style="margin-top: 6px;">
        <input type="submit" value="Sign up" name="submit" id="submit"  style="margin-top: 6px;">

        <div class="create">
        <p>Have an account? <a class="signup" href="index2.php">Login Here</a></p>
        <br>
        <p style="margin-top: -10px;">Want to select account type again? <a class="signup" href="commonlogin.php">Go Back</a></p>
        </div>

        </form>



    </div>          
    </div>
       
   
    </body>
    </html>