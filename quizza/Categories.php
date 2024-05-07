<?php
session_start();

$connect = new mysqli('localhost','root','','quizza');
if($connect->connect_error){
    die("Failed to connect : ".$connect->connect_error);
}
?>







<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="IE=edge">
        <title>Categories</title>
        <link rel="stylesheet" href="Categories.css">
        <link rel="icon" type="image/x-icon" href="logo1ico.ico">
    </head>
    
    <body style="margin-left: -18px;">
        <header>
        <div class="nav">
            
            <img src="logo2.png" alt="QuizzA Logo">


            <a href="index.php">Home</a>
            <a name= "categories" href="Categories.php">Categories</a>
            <a href="About.php">About QuizzA</a>
            <a href="Contact.php">Contact Us</a>
            <a href="feedback.php">Feedback</a>
            <a href="commonlogin.php">Login</a>
        </div>
   
<!--body-->
<div>
<img class="cate" src="cate.png" alt="QuizzA Categories"> <!--style="margin-left: -32px;"-->
</div>

<br><h3 style="font-family:Arial, Helvetica, sans-serif; text-align: center;">Here are the QuizzA categories...</h3>
<hr><br><br>

<div class="container box" style="margin-left: 187px;"><br>
    <h2 style="text-align: center; color: #000;">Technological QuizzA</a><br></h2><hr><br>
    <p class="qtitle"><a href="tec_interface1.php"><img src="cate1.png" alt="intro" width="360px" height="240px;" style="margin-left: 8px;"></a></p><hr><br><br>
    <p class="qtitle" style=" margin-left:30px; margin-right:30px; text-align: justify;">You can follow Technological QuizzA for improve your knowledge about
    Information Technology side. In here, there are 3 levels named, Basic Level, Middle Level, and Hard Level. In each level, there are 
    divided into 3 levels again. You can follow all quizzes after createing a QuizzA User Account. <p class="qtitle" style="margin-left:30px; margin-right:30px; text-align:center;">Click below button to start quizzes.</p>
    
    <button name="submit" class="submit"><b><a href="index4.php" style="text-decoration: none; color: #000;">Submit</a></b></button><br>
</p>

    <br>



<div class="container box" style="margin-top: -668px; margin-left: 550px;"><br>
    <h2 style="text-align: center; color: #000;">Geographical QuizzA</a><br></h2><hr><br>
    <p class="qtitle"><a href="geo_interface1.php"><img src="cate2.png" alt="intro" width="360px" style="margin-left: 8px;"></a></p><hr><br><br>
    <p class="qtitle" style="margin-left:30px; margin-right:30px; text-align: justify;">You can follow Geographical QuizzA for improve your knowledge about
        World Geography and Sri Lanka Geography side. In here, there are 3 levels named, Basic Level, Middle Level, and Hard Level. In each level, there are 
        divided into 3 levels again. You can follow all quizzes after createing a QuizzA User Account.<p class="qtitle" style="margin-left:30px; margin-right:30px; text-align:center;">Click below button to start quizzes.</p>
    
        <button name="submit" class="submit"><b><a href="index5.php" style="text-decoration: none; color: #000;">Submit</a></b></button><br>
    </p> <br>
</div>
    </div>


    <br>
<br><br><br><br><br><br>




       





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


























       