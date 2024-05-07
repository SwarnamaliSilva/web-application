<?php 



$dbserver = "localhost";
$dbuser = "root";
$dbpassword = "";
$database = "quizza";

//building mysqli connection using these parameters

$connect = mysqli_connect($dbserver, $dbuser, $dbpassword, $database);

if ($connect){
    //echo "Success";
}

else{
    //echo "Faild";
}





?>