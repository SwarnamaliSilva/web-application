<?php

session_start();
  


  $connect = new mysqli('localhost','root','','quizza');
    if($connect->connect_error){
        die("Failed to connect : ".$connect->connect_error);
    }



    else{
        
        if (isset($_GET['delete']))
        {
           $delete = $_GET['delete'];
           $sql = "DELETE FROM signup_details WHERE email='$delete' limit 1";
           mysqli_query($connect,$sql);
           header('Location:AdminDashboard.php');
        }
        
        
        
        
        //$stmt = "DELETE FROM signup_details WHERE(user_name, first_name, last_name, email, password, account_type, reg_date)";
       // $stmtt_run = mysqli_query($connect, $stmt)."DELETE FROM signup_details WHERE(user_name, first_name, last_name, email, password, account_type, reg_date)";
       
        
       
        }

?>       