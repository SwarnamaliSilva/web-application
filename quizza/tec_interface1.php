<?php
session_start();
//echo "Welcome " . $_SESSION['email'];

unset($_SESSION['email']);

error_reporting(0);
$user_profile = $_SESSION['email'];

if($user_profile  == true){
    header('Location:index4.php');
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
        <title>Technology QuizzA</title>
        <link rel="stylesheet" href="tec_interface1.css">
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
        

        <div class="container">
    
            <img class ="image" src="1a.png" >
                    


        <!--sign in form-->
        <div class="one">
            
        <form class="teclevelform" name="form1">
        
          <br>
            <h2 class="log">Technological QuizzA - Levels</h2>
            

        <div class="sign">
            <label>Basic Level</label>
            <button><a class="color" href="tec_interface2.php" required>Click me</a></button>
            </div><br>

        

        <div class="sign">
            <label>Middle Level</label>
            <button><a class="color" href="tec_interface3.php" required>Click me</a></button>
            </div><br>

        <div class="sign">  
                <label>Hard Level</label>
                <button><a class="color" href="tec_interface4.php" required>Click me</a></button>
                </div><br>
        

    

        <div class="create">
        <p><b>Click a level what you want to follow</b></p>
        </div>

        </form>

    </div>          
    </div>






   
</header>
        
    </body>
    </html>