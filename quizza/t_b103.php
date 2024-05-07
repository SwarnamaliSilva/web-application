<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tech Basic L3</title>
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
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q1: Is keyboard an ………………… device?</p>
                <p class="optionlist">
                    <input type="radio" name="q1" >Output<br><br>
                    <input type="radio" name="q1" id="correct1" required>Input<br><br>
                    <input type="radio" name="q1" >Both <br><br>
                    <input type="radio" name="q1" >None of the above<br><br>

                    
                    <button class="next" onclick="next(1)">Next</button><br>


                </p><br>
            </div>
            
            <!--q2-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q2: What is Universal Serial Bus?</p>
                <p class="optionlist">
                    <input type="radio" name="q2" >HDMI Port<br><br>
                    <input type="radio" name="q2" >SATA port<br><br>
                    <input type="radio" name="q2" id="correct2" required>USB Port<br><br>
                    <input type="radio" name="q2" >None of the above<br><br>

                    <button class="pre" onclick="pre(1)">Previous</button><br>
                    <button class="next" onclick="next(2)">Next</button><br>


                </p><br>
            </div>

             <!--q3-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q3: Why would you use a USB flash drive? For,</p>
                <p class="optionlist">
                    <input type="radio" name="q3" >Listening music<br><br>
                    <input type="radio" name="q3" >Saving files<br><br>
                    <input type="radio" name="q3" >Creating music<br><br>
                    <input type="radio" name="q3" id="correct3" required>Backup files<br><br>

                    <button class="pre" onclick="pre(2)">Previous</button><br>
                    <button class="next" onclick="next(3)">Next</button><br>

                </p><br>
            </div>


            <!--q4-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q4: Which part of the computer system that one can physically touch?</p>
                <p class="optionlist">
                    <input type="radio" name="q4">Software<br><br>
                    <input type="radio" name="q4" id="correct4" required>Hardware<br><br>
                    <input type="radio" name="q4" >Operating System<br><br>
                    <input type="radio" name="q4" >Programs<br><br>

                    <button class="pre" onclick="pre(3)">Previous</button><br>
                    <button class="next" onclick="next(4)">Next</button><br><br><br>

                   
                </p><br>
            </div>

            <!--q5-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q5: 1 GB is equal to, </p>
                <p class="optionlist">
                    <input type="radio" name="q5" >1028 MB<br><br>
                    <input type="radio" name="q5" >256 MB<br><br>
                    <input type="radio" name="q5" >512 MB<br><br>
                    <input type="radio" name="q5" id="correct5" required>1024 MB<br><br>

                    <button class="pre" onclick="pre(4)">Previous</button><br>
                    <button class="next" onclick="next(5)">Next</button><br>


                </p><br>
            </div>

            <!--q6-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q6: 1 MB is equal to, </p>
                <p class="optionlist">
                    <input type="radio" name="q6" >2048 KB<br><br>
                    <input type="radio" name="q6" >1028 KB<br><br>
                    <input type="radio" name="q6" id="correct6" required>1024 KB<br><br>
                    <input type="radio" name="q6" >512 KB<br><br>

                    <button class="pre" onclick="pre(5)">Previous</button><br>
                    <button class="next" onclick="next(6)">Next</button><br>


                </p><br>
            </div>

            <!--q7-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q7: Example for peripheral devices,</p>
                <p class="optionlist">
                    <input type="radio" name="q7" >Keyboard<br><br>
                    <input type="radio" name="q7" >Monitor<br><br>
                    <input type="radio" name="q7" >Mouse<br><br>
                    <input type="radio" name="q7" id="correct7" required>All of the above<br><br>

                    <button class="pre" onclick="pre(6)">Previous</button><br>
                    <button class="next" onclick="next(7)">Next</button><br>


                </p><br>
            </div>

            <!--q8-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q8: Which of the item is an input device?</p>
                <p class="optionlist">
                    <input type="radio" name="q8" id="correct8" required>Light pen<br><br>
                    <input type="radio" name="q8" >Computer monitor<br><br>
                    <input type="radio" name="q8" >Speaker<br><br>
                    <input type="radio" name="q8" >Multimedia projector<br><br>

                    <button class="pre" onclick="pre(7)">Previous</button><br>
                    <button class="next" onclick="next(8)">Next</button><br>


                </p><br>
            </div>

            <!--q9-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q9: The first search engine on the Internet is,</p>
                <p class="optionlist">
                    <input type="radio" name="q9" >Yahoo<br><br>
                    <input type="radio" name="q9" >Bing<br><br>
                    <input type="radio" name="q9" >Google<br><br>
                    <input type="radio" name="q9" id="correct9" required>Aliweb<br><br>

                    <button class="pre" onclick="pre(8)">Previous</button><br>
                    <button class="next" onclick="next(9)">Next</button><br>


                </p><br>
            </div>

            <!--q10-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 3 <br></h3><hr><br>
                <p class="qtitle">Q10: The first web browser invented in 1990 is,</p>
                <p class="optionlist">
                    <input type="radio" name="q10" >Mosaic<br><br>
                    <input type="radio" name="q10" id="correct10" required>WorldWideWeb<br><br>
                    <input type="radio" name="q10" >Fire fox<br><br>
                    <input type="radio" name="q10" >Internet Explorer<br><br>

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
                    (alert("Click Bottom Link To Go To Basic Levels Or To See Correct Answers! 👇"));
               }
               </script>
                
            
    </div>      
    
    <a href="t_b103_ans.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: left;">Click Here To Correct Answers</a>

    <a href="tec_interface2.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: right;">Click Here To Go To Basic Levels</a>

    
    
            </form>
   
</header>
        
    </body>
    </html>