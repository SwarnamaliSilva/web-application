<?php
session_start();
//echo "Welcome " . $_SESSION['email'];

unset($_SESSION['email']);

error_reporting(0);
$user_profile = $_SESSION['email'];

if($user_profile  == true){
    header('Location:index2.php');
}

else{
    //echo "error";
}
?>

<?php

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

$connect = new mysqli('localhost','root','','quizza');
if($connect->connect_error){
    die("Failed to connect : ".$connect->connect_error);
}

$result = mysqli_query($connect, "SELECT * FROM signup_details");
$row = mysqli_fetch_assoc($result)

?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Account (User)</title>
        <link rel="stylesheet" href="UserDashboard.css">
        <link rel="icon" type="image/x-icon" href="logo1ico.ico">
    </head>
    
    <body style="margin-left: -18px;">
        <header>
        <div class="nav">
            
            <img src="logo2.png" alt="QuizzA Logo">


            <a href="index.php">Home</a>
            <a href="Categories.php">Categories</a>
            <a href="About.php">About QuizzA</a>
            <a href="Contact.php">Contact Us</a>
            <a href="feedback.php">Feedback</a>
            <a href="commonlogin.php">Login</a>

        </div>
        
<!--body-->
<div>
    <img class="term" style="margin-top: 8px;" src="my2.png" alt="terms">
    </div><br>


    <!--about us-->
    <form class="editprofile" name="form3" method="get" action="">
    <div class="container box" style="margin-left:400px; width:575px; height:500px;"><br>

        <h1 style="text-align:center; color:green;"><u>!! Hi, Welcome To QuizzA !!</u></h1>
        <h3 style="color:blue; text-align:center;">Be Positive</h3><hr>


        <h3 style="text-align: center;">Announcement</h3>
        <p class="qtitle"><b>Dear User,</b><br><br>
        When is a time you forgot your password, and also you want to change your email address, you have to send a mail us with your username.
        <br>Then we will send your password to your email address which is you provided to us.<br><br> <b>
        So, we are thinking that you will improve your interest in general knowledge. let's go for the QuizzA Categories...<br><br><br>
        Good Luck !</b><br><br>Thankyou For being with us.<br> QuizzA Team</p>
        <h4 style= "text-align:center;">"Our updating anouncements will be publish here..."</h4>
        
            
</div>
</form>
            <button class="submit"  style="float:right; margin-right:415px; width:110px; margin-top:28px;"><a href="logout2.php" 
            style="color:#fff; text-decoration:none">Log Out</a></button><br><br><br>

<br><br>           











<!--footer-->
<hr>
        <div class="footer">
            <div class="table">
                <table class="foot">
                    <tr>
                        <td rowspan="6"><img src="logoico.ico" width="200px" height="200px" class="logofoot"></td>  
                    </tr>
                    
                    <tr class="th">
                        <th colspan="2">QuizzA &nbsp;  &nbsp; </th>
                        <th colspan="2">Categories</th>
                        <th colspan="2">Follow us on </th>
                    </tr>

                    <tr>
                        <td colspan="1">2<sup>nd</sup> Floor, NET Building, &nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;</td>
                        <td colspan="3"><a href="Categories.php" style="text-decoration:none; color: black;">Technological QuizzA  &nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</a></td>
                        <td colspan="3"><a href="https://www.facebook.com/profile.php?id=100088285170079" style="text-decoration: none; color:#000;">Facebook/QuizzA.Web</a> &nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="1">No. 28, Main Road,</td>
                        <td colspan="3"><a href="Categories.php" style="text-decoration:none; color: black;">Geographical QuizzA</a></td>
                        <td colspan="1"><a href="https://www.instagram.com/quizza.web/" style="text-decoration: none; color:#000;">Instagram/QuizzA.Web</a></td>
                    </tr>

                    <tr>
                        <td colspan="4">Anuradhapura</td>
                        <td><a href="https://twitter.com/QuizzA_Web?t=SkyTeyZKYP4kk4wiJWgS-Q&s=08" style="text-decoration: none; color:#000;">Twitter/QuizzA.Web</a></td>
                    </tr>

                    <tr>
                        <td colspan="1">Contact: &nbsp; E-mail: 
                        <a href = "mailto:https://www.quizza.webcontact@gmail.com" style="text-decoration:none;">quizza.webcontact@gmail.com</a></td>
                    </tr>

                    <tr>
                        <td colspan="5" style="font-size: 25px;" class="bepos">&nbsp; &nbsp; &nbsp; Be Positive</td>
                        <td><a href="privacy.php" style="text-decoration:none;"><b>Privacy</b></a></td>
                        
                    </tr>

                    <tr>
                    <td> &copy; Copyright &copy; 2022 QuizzA.</td>
                    </tr>






                </table>
            </div>
        </div>
   
</header>
        
    </body>
    </html>