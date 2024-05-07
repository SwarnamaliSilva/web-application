<?php
session_start();
//echo "Welcome " . $_SESSION['email'];

include 'dbadmin.php';


?>



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="AdminDashboard.css">
        <link rel="icon" type="image/x-icon" href="logo1ico.ico">
    </head>
    
    <body style="margin-left:-15px;">
        <header>
        <div class="nav">
            
            <img src="logo2.png" alt="QuizzA Logo">


            <a href="index.php">Home</a>
            <a href="Categories.php">Categories</a>
            <a href="About.php">About QuizzA</a>
            <a href="Contact.php">Contact Us</a>

            <?php

            if(isset($_SESSION["email"])){
                echo "<a href='commonlogin.php'>Admin</a>";
            }

            else{
            echo "<a href='feedback.php'>Feedback</a>";
            } ?>

            <a href="commonlogin.php">Login</a>
        </div>
        
<!--body-->
<div>
    <img class="term" style="margin-top: 8px;" src="Admin dashboard.png" alt="terms">
    </div><br>


    <!--about us-->
    <form class="editprofile" name="form3" method="get" action="">

    <div class="container box" style="margin-left:108px; width:1160px; height:1050px;"><br>

        <h1 style="text-align:center; color:blue;"><u>!! Welcome To QuizzA, <font color="#000"> &nbsp; Admin !!</font></u></h1>
           
    <table align="center" border="1px" style="width:1000px; line-height: 20px; text-align:left; background:#ff99ff;">
    <caption style="text-align:center;"><h2><u>User Login Details</u></h2></caption>
        <tr style="background-color:#66ccff;">
            <th>User Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail Address</th>
            <th>Password</th>
            <th>Account Type</th>
            <th>Registered Date</th>
            <th>Remove User</th>
        </tr>
    

<?php


    //create a query
    $sql = "SELECT * FROM signup_details";

    //querying (query run in database)

    $result = mysqli_query($connect, $sql);

    //check results
    $resultcheck = mysqli_num_rows($result);

    //if number result>0
    if($resultcheck > 0){
        //print the results using while loop
        //while loop using for check and collect data row by row

        while($row = mysqli_fetch_assoc($result)){

?>
            <tr>
                <td><?php echo $row['user_name']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['account_type']; ?></td>
                <td><?php echo $row['reg_date']; ?></td>

                <td><button class="reset" name="delete" style="background-color:brown; float:right; margin-right:20px; 
                margin-left:20px; width:90px; margin-top: 8px;">
                <a href="removeuser php.php?delete=<?php echo $row['email'];?>" style="color:#fff; text-decoration:none" 
                onClick ="return confirm('Are you sure, Do you want to remove this user?')">
                Remove User</button>
                </td>
            </tr>


           
<?php
        } 
    }
?>

</table>

        <!--add user-->
        <br><h3 style = margin-left:80px;>Click "Add User" button to add users : 
        <button class="add" name="adduser" style="background-color:green; margin-left:80px; width:110px; margin-top: -18px;">
        <a href="Add user.php" style="color:#fff; text-decoration:none">Add User</a></button></h3><br><br><br>


       

        </div>
</form>
            
            <button class="submit" name="alogout" style="float:right; margin-right:130px; width:110px; margin-top: 8px;"><a href="logout.php" 
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