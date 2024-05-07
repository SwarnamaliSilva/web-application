<?php

session_start();
    $user_name = $_POST['user_name'];
    $first_name= $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $account_type = $_POST['account_type'];


  $connect = new mysqli('localhost','root','','quizza');
    if($connect->connect_error){
        die("Failed to connect : ".$connect->connect_error);
    }

    else{
        $stmt = $connect->prepare("Insert into signup_details(user_name, first_name, last_name, email, password, account_type, reg_date)
        values(?, ?, ?, ?, ?, ?, NOW())");

        //check same password is equal with confirm password and greater than 8 characters is there
        if (($password == $confirm_password) && (strlen($password)>=8)){

            //&& ($password != $_POST['password'])
       
        if(isset($_POST['submit'])){

            //check same password is there
            $pass = "SELECT * from signup_details where password ='$password'";
            $p = mysqli_query($connect, $pass);

            if (mysqli_num_rows($p) >0)
            {echo "<br><br><h2><center><font color='#ffffff'>Password Already Exists</font> <font color='ff0000'>!!!</font><br> 
                <font color='black'>Please enter a valid password<br>
                ⬅  Go Back To The Signup Page</font></h2></center>     <font color='sky blue'>",
                 '<center><img src="output-onlinegiftools (2).gif" width="480px" height="380px"></center>','<body bgcolor="sky blue">';}
                 
            //check same username is there 
            $user = "SELECT * from signup_details where user_name ='$user_name'";
            $u = mysqli_query($connect, $user);

            if (mysqli_num_rows($u) >0)
            {echo "<br><br><h2><center><font color='#ffffff'>Username Exists</font> <font color='ff0000'>!!!</font><br> <font color='black'>Please enter a valid username<br>
                ⬅  Go Back To The Signup Page</font></h2></center>     <font color='sky blue'>",
                 '<center><img src="output-onlinegiftools (2).gif" width="480px" height="380px"></center>','<body bgcolor="sky blue">';}
                 
            //check same email is there
            $sql="SELECT * FROM signup_details WHERE email='$email' limit 1";
            $result = mysqli_query( $connect,$sql);

            if(mysqli_num_rows($result)>0)
                {echo "<br><br><h2><center><font color='#ffffff'>Email Address Already Exists</font> <font color='ff0000'>!!!</font><br>
                     <font color='black'>Please enter a valid email address<br>
                    ⬅  Go Back To The Signup Page</font></h2></center>     <font color='sky blue'>",
                     '<center><img src="output-onlinegiftools (2).gif" width="480px" height="380px"></center>','<body bgcolor="sky blue">';}
                     
                    
                //'<script>alert("Username Exist!")</script>'
                
                else{$stmt->bind_param("ssssss",$user_name, $first_name, $last_name, $email, $password, $account_type);
                    $stmt->execute();
                    
                    header('Location:AdminDashboard.php');
                    $stmt->close();
                    $connect->close();}

                
            }
            
                
        }
                else{
                    echo "<br><br><h2><center><font color='#ffffff'>Password is not matching with confirm password <font color='ff0000'>!!!</font>
                    <br> or <br> Password should at least 8 characters </font> <font color='ff0000'>!!!</font><br>
                    <font color='black'>Please enter a valid Password<br>
                   ⬅  Go Back To The Signup Page</font></h2></center>     <font color='sky blue'>",
                    '<center><img src="output-onlinegiftools (2).gif" width="480px" height="380px"></center>','<body bgcolor="sky blue">';}
                   
               /* if(strlen($password)<8){
                    echo "<h2><font color='red'>Password should at least 8 characters</font></h2>";
                }
                else{
                    $stmt->bind_param("ssssss",$user_name, $first_name, $last_name, $email, $password, $account_type);
                    $stmt->execute();
                    
                    header('Location:index2.php');
                    $stmt->close();
                    $connect->close();
                     }*/
        
                
        
       
        }
    

?>       

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Check Your Entered Details !</title>
        <link rel="icon" type="image/x-icon" href="logo1ico.ico">
    </head>
    
   
</html>
        
        
        