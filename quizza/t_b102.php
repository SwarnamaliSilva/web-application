<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tech Basic L2</title>
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
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q1: In how many generations computers are classified?</p>
                <p class="optionlist">
                    <input type="radio" name="q1" >2 generations<br><br>
                    <input type="radio" name="q1" id="correct1" required>5 generations<br><br>
                    <input type="radio" name="q1" >3 generations<br><br>
                    <input type="radio" name="q1" >4 generations<br><br>

                    
                    <button class="next" onclick="next(1)">Next</button><br>


                </p><br>
            </div>
            
            <!--q2-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q2: Which of the following was the main electronic component of the first generation computers?</p>
                <p class="optionlist">
                    <input type="radio" name="q2" id="correct2" required>Vacuum Tube<br><br>
                    <input type="radio" name="q2" >Transistor<br><br>
                    <input type="radio" name="q2" >Integrated Circuit<br><br>
                    <input type="radio" name="q2" >Optical Fibre<br><br>

                    <button class="pre" onclick="pre(1)">Previous</button><br>
                    <button class="next" onclick="next(2)">Next</button><br>


                </p><br>
            </div>

             <!--q3-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q3: The period of first generation computers was</p>
                <p class="optionlist">
                    <input type="radio" name="q3" >1930-1938<br><br>
                    <input type="radio" name="q3" >1940-1950<br><br>
                    <input type="radio" name="q3" >1935-1942<br><br>
                    <input type="radio" name="q3" id="correct3" required>1940-1956<br><br>

                    <button class="pre" onclick="pre(2)">Previous</button><br>
                    <button class="next" onclick="next(3)">Next</button><br>

                </p><br>
            </div>


            <!--q4-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q4: An example for first generation computers was</p>
                <p class="optionlist">
                    <input type="radio" name="q4">IBM 7094<br><br>
                    <input type="radio" name="q4" id="correct4" required>ENIAC<br><br>
                    <input type="radio" name="q4" >UNIVAC<br><br>
                    <input type="radio" name="q4" >PDP-11<br><br>

                    <button class="pre" onclick="pre(3)">Previous</button><br>
                    <button class="next" onclick="next(4)">Next</button><br><br><br>

                   
                </p><br>
            </div>

            <!--q5-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q5: Which of the following was the main electronic component of the second generation computers?</p>
                <p class="optionlist">
                    <input type="radio" name="q5" >Vacuum Tube<br><br>
                    <input type="radio" name="q5" >Integrated Circuit<br><br>
                    <input type="radio" name="q5" >Optical Fibre<br><br>
                    <input type="radio" name="q5" id="correct5" required>Transistor<br><br>

                    <button class="pre" onclick="pre(4)">Previous</button><br>
                    <button class="next" onclick="next(5)">Next</button><br>


                </p><br>
            </div>

            <!--q6-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q6: The period of second generation computers was</p>
                <p class="optionlist">
                    <input type="radio" name="q6" >1940-1952<br><br>
                    <input type="radio" name="q6" id="correct6" required>1956-1963<br><br>
                    <input type="radio" name="q6" >1930-1938<br><br>
                    <input type="radio" name="q6" >1946-1959<br><br>

                    <button class="pre" onclick="pre(5)">Previous</button><br>
                    <button class="next" onclick="next(6)">Next</button><br>


                </p><br>
            </div>

            <!--q7-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q7 :An example for second Generation Computers was</p>
                <p class="optionlist">
                    <input type="radio" name="q7" >EDVAC<br><br>
                    <input type="radio" name="q7" >IBM 370<br><br>
                    <input type="radio" name="q7" id="correct7" required>IBM 7094<br><br>
                    <input type="radio" name="q7" >ENIAC<br><br>

                    <button class="pre" onclick="pre(6)">Previous</button><br>
                    <button class="next" onclick="next(7)">Next</button><br>


                </p><br>
            </div>

            <!--q8-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q8: Which of the following was the main electronic component of the third generation computers?</p>
                <p class="optionlist">
                    <input type="radio" name="q8" id="correct8" required>Integrated Circuit<br><br>
                    <input type="radio" name="q8" >Transistor<br><br>
                    <input type="radio" name="q8" >Artificial Intelligence<br><br>
                    <input type="radio" name="q8" >Vacuum Tube<br><br>

                    <button class="pre" onclick="pre(7)">Previous</button><br>
                    <button class="next" onclick="next(8)">Next</button><br>


                </p><br>
            </div>

            <!--q9-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q9: Which of the following was the main electronic component of the fourth generation computers?</p>
                <p class="optionlist">
                    <input type="radio" name="q9" >Vacuum Tube<br><br>
                    <input type="radio" name="q9" >Artificial Intelligence<br><br>
                    <input type="radio" name="q9" >Transistor<br><br>
                    <input type="radio" name="q9" id="correct9" required>Microprocessor<br><br>

                    <button class="pre" onclick="pre(8)">Previous</button><br>
                    <button class="next" onclick="next(9)">Next</button><br>


                </p><br>
            </div>

            <!--q10-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Basic Level 2 <br></h3><hr><br>
                <p class="qtitle">Q10: Which of the following was the main electronic component of the fifth generation computers?</p>
                <p class="optionlist">
                    <input type="radio" name="q10" >Microprocessor<br><br>
                    <input type="radio" name="q10" id="correct10" required>Artificial Intelligence<br><br>
                    <input type="radio" name="q10" >Vacuum Tube<br><br>
                    <input type="radio" name="q10" >Transistor<br><br>

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
                
            
    </div>      <br>
    
    <a href="t_b102_ans.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: left;">Click Here To Correct Answers</a>

    <a href="tec_interface2.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: right;">Click Here To Go To Basic Levels</a>

    

            </form>
</header>
        
    </body>
    </html>