<?php
session_start();
$status = '';

//checking if the form is submitted
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $emailaddress = $_POST['emailaddress'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'backupswarnamali@gmail.com';
    $header = "From $emailaddress";
    $mail_subject = 'Message from QuizzA';


    $header = "From: $emailaddress";

    $send_mail_result = mail($to, $mail_subject, $message, $header);

    if($send_mail_result){
    $status = '<p><center><b><font color="green">Thankyou for your feedback!</font></b></center></p>';
    
    }else{
    $status = '<p><center><b><font color="orange">Sorry, message sending failed!</font></b></center></p>';
}

}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback</title>
        <link rel="stylesheet" href="Feedback.css">
        <link rel="icon" type="image/x-icon" href="logo1ico.ico">
    </head>
    

    <body>
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
    <img class="term" src="FeedBack.png" alt="feedback">
    </div><br>


    <!--feedback form-->

    <?php

echo $status;

?>

<br>
    <a href="UserDashboard.php" style="text-decoration:none; background-color:Black; line-height:5px; margin-top:15px; margin-left:460px; 
    color:#fff;"><b>Click Here To Go To User Announcement Platform</b></a><br><br>
        

    <form class="loginform" style="margin-left: 428px; margin-top: 25px;" method="post" action="">
    <h2 class="log" style="text-align:center;">Give a comment...</h2><hr>
            

    <div class="sign">
        <input type="text" maxlength="" id="emailaddress" name="emailaddress" required>
        <span></span>
        <label for="email">Email Address <font color="red"><b>*</b></font>:</label>
        </div>

    <div class="sign">
        <input type="text" maxlength="" name="subject" id="subject" required>
        <span></span>
        <label for="email">Subject <font color="red"><b>*</b></font>:</label>
        </div><br>


    <div class="sign1">
        <label class ="text" for="message">Give a comment...</label>
        <br><br>
        <textarea maxlength="" id="message" name="message" required>
        </textarea>
    </div>

        <br>

    <input type="reset" value="Clear" name ="clear">
    <input type="submit" value="Send" name="submit"><br>

    
    <br><br>



</form>











<!--footer-->
<hr style="margin-top: 560px;">
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