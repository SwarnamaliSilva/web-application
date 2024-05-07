<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tech Hard L1</title>
        <link rel="stylesheet" href="t_b101.css">
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
        <form>
        
            <!--q1-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr><br>
                <p class="qtitle">Q1: A manager of a certain company would like to protect his computer from unauthorised access by others through Internet.
                    Which one of the following is the most suitable solution for his requirments?
                </p>
                <p class="optionlist">
                    <input type="radio" name="q1" >Installing an antivirus software<br><br>
                    <input type="radio" name="q1" id="correct1" required>Installing a firewall<br><br>
                    <input type="radio" name="q1" >Upgrading the version of the operating system<br><br>
                    <input type="radio" name="q1" >Avoiding the use of pirated software<br><br>

                    
                    <button class="next" onclick="next(1)">Next</button><br>


                </p><br>
            </div>
            
            <!--q2-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr><br>
                <p class="qtitle">Q2: What is the most likely name of the folder that stores deleted messages in an email software?</p>
                <p class="optionlist">
                    <input type="radio" name="q2" id="correct2" required>Trash<br><br>
                    <input type="radio" name="q2" >Drafts<br><br>
                    <input type="radio" name="q2" >Inbox<br><br>
                    <input type="radio" name="q2" >Sent<br><br>

                    <button class="pre" onclick="pre(1)">Previous</button><br>
                    <button class="next" onclick="next(2)">Next</button><br>


                </p><br>
            </div>

             <!--q3-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr>
                <p class="qtitle" style="font-size: 14px;">Q3: <b>Which of the following is/are appropriate to be used as a password in an email software that you use?</b><br>
                A- Your full name without spaces<br> B- A term which is more than eight characters long and has at least one capital letter, one simple letter,
                one digit and one special character such as % <br> C- Your date of birth</p>
                <p class="optionlist" style="font-size: 11px;">
                    <input type="radio" name="q3" >A only<br><br>
                    <input type="radio" name="q3" >A and B only<br><br>
                    <input type="radio" name="q3" >A, B, and C<br><br>
                    <input type="radio" name="q3" id="correct3" required>B only<br><br>

                    <button class="pre" onclick="pre(2)">Previous</button><br>
                    <button class="next" onclick="next(3)">Next</button><br>

                </p><br>
            </div>


            <!--q4-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr><br>
                <p class="qtitle" >Q4: Which of the following media uses light waves for communication?</p>
                <p class="optionlist">
                    <input type="radio" name="q4">Co-axial cable<br><br>
                    <input type="radio" name="q4" id="correct4" required>Optical fiber<br><br>
                    <input type="radio" name="q4" >Twisted pair<br><br>
                    <input type="radio" name="q4" >USB cable<br><br>

                    <button class="pre" onclick="pre(3)">Previous</button><br>
                    <button class="next" onclick="next(4)">Next</button><br><br><br>

                   
                </p><br>
            </div>

            <!--q5-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr>
                <p class="qtitle" style="font-size: 13px;">Q5: A Twisted pair cable<br> B - USB cable<br> C -Optical fiber<br><b>
                    Which of the above media are suitable to be used to connect a laptop computer directly to a standalone printer?</b></p>
                <p class="optionlist">
                    <input type="radio" name="q5" >A and B only<br><br>
                    <input type="radio" name="q5" >A and C only<br><br>
                    <input type="radio" name="q5" >B and C only<br><br>
                    <input type="radio" name="q5" id="correct5" required>All A, B, and C<br><br>

                    <button class="pre" onclick="pre(4)">Previous</button><br>
                    <button class="next" onclick="next(5)">Next</button><br>


                </p><br>
            </div>

            <!--q6-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr>
                <p class="qtitle" style="font-size: 12px;">Q6: <b>Which of the following are advantages of a computer network compared to a standalone desktop?</b><br>
                A - Sharing of data among machines on the network<br> B - Reduced risk of malware attacks on the machines connected to the network
                <br> C - Sharing of software applications on the central server</p>
                <p class="optionlist">
                    <input type="radio" name="q6" >A only<br><br>
                    <input type="radio" name="q6" id="correct6" required>A and C only<br><br>
                    <input type="radio" name="q6" >B only<br><br>
                    <input type="radio" name="q6" >A and B only<br><br>

                    <button class="pre" onclick="pre(5)">Previous</button><br>
                    <button class="next" onclick="next(6)">Next</button><br>


                </p><br>
            </div>

            <!--q7-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr><br>
                <p class="qtitle">Q7: <b>Consider the following statement with a blank space.</b><br> The job of a ........ could involve maintaining routers,
                switches, firewalls etc.</p>
                <p class="optionlist">
                    <input type="radio" name="q7" >Desktop publisher<br><br>
                    <input type="radio" name="q7" >Software engineer<br><br>
                    <input type="radio" name="q7" id="correct7" required>Network administrator<br><br>
                    <input type="radio" name="q7" >System anlyst<br><br>

                    <button class="pre" onclick="pre(6)">Previous</button><br>
                    <button class="next" onclick="next(7)">Next</button><br>


                </p><br>
            </div>

            <!--q8-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr>
                <p class="qtitle" >Q8: Consider the following. <br> A - Hardware specification of the computer<br>B - Reputation of the seller
                <br>C - Warranty period and quality of after sales service</p>
                <p class="optionlist">
                    <input type="radio" name="q8" id="correct8" required>All A, B, and C<br><br>
                    <input type="radio" name="q8" >A and B only<br><br>
                    <input type="radio" name="q8" >A and C only<br><br>
                    <input type="radio" name="q8" >B and C only<br><br>

                    <button class="pre" onclick="pre(7)">Previous</button><br>
                    <button class="next" onclick="next(8)">Next</button><br>


                </p><br>
            </div>

            <!--q9-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr><br>
                <p class="qtitle">Q9: Which of the following combinations show the services of the Internet only?</p>
                <p class="optionlist">
                    <input type="radio" name="q9" >Email and HTTP<br><br>
                    <input type="radio" name="q9" >Email and Web browsers<br><br>
                    <input type="radio" name="q9" >HTTP and File transfer<br><br>
                    <input type="radio" name="q9" id="correct9" required>Email and File transfer<br><br>

                    <button class="pre" onclick="pre(8)">Previous</button><br>
                    <button class="next" onclick="next(9)">Next</button><br>


                </p><br>
            </div>

            <!--q10-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Hard Level 1 <br></h3><hr><br>
                <p class="qtitle">Q10: Which of the following are examples for database management systems (DBMS) only?</p>
                <p class="optionlist">
                    <input type="radio" name="q10" >MS Access, Excel, MySQL<br><br>
                    <input type="radio" name="q10" id="correct10" required>MS Access, MySQL, OpenOffice.org Base<br><br>
                    <input type="radio" name="q10" >DB2, Excel, MySQL<br><br>
                    <input type="radio" name="q10" >MS Access, MySQL, Excel<br><br>

                    <button class="pre" onclick="pre(9)">Previous</button><br>
            
                    <button class="submit" onclick="result()">Submit</button><br>


                </p><br>
            </div>









            
            
               <script>
                //display the first block of question
                document.getElementsByClassName('container box')[0].style.display="block";
               
               //define next function
               function next(id){
                document.getElementsByClassName('container box')[id-1].style.display="none";
                document.getElementsByClassName('container box')[id].style.display="block";
               }

               //define pre function
               function pre(id){
                document.getElementsByClassName('container box')[id-1].style.display="block";
                document.getElementsByClassName('container box')[id].style.display="none";
               }

               //getting final result
               function result(){
                    var score = 0;
                    if(document.getElementById('correct1').checked){
                        score++;
                    }

                    if(document.getElementById('correct2').checked){
                        score++;
                    }

                    if(document.getElementById('correct3').checked){
                        score++;
                    }

                    if(document.getElementById('correct4').checked){
                        score++;
                    }

                    if(document.getElementById('correct5').checked){
                        score++;
                    }

                    if(document.getElementById('correct6').checked){
                        score++;
                    }

                    if(document.getElementById('correct7').checked){
                        score++;
                    }

                    if(document.getElementById('correct8').checked){
                        score++;
                    }

                    if(document.getElementById('correct9').checked){
                        score++;
                    }

                    if(document.getElementById('correct10').checked){
                        score++;
                    }

                    document.getElementsByClassName(alert("Your score is : "+ score));
                    (alert("Click Bottom Link To Go To Hard Levels Or To See Correct Answers! 👇"));
               }
               </script>
                
            
    </div>      

    <a href="t_h101_ans.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: left;">Click Here To Correct Answers</a>

    <a href="tec_interface4.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: right;">Click Here To Go To Hard Levels</a>

    
    
            </form>
   
</header>
        
    </body>
    </html>