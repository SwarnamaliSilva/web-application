<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Geo Basic L3</title>
        <link rel="stylesheet" href="g_b101.css">
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
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle">Q1: Which ocean has the largest surface area?</p>
                <p class="optionlist">
                    <input type="radio" name="q1" >Arctic Ocean<br><br>
                    <input type="radio" name="q1" id="correct1" required>Pacific Ocean<br><br>
                    <input type="radio" name="q1" >Indian Ocean<br><br>
                    <input type="radio" name="q1" >Atlantic Ocean<br><br>

                    
                    <button class="next" onclick="next(1)">Next</button><br>


                </p><br>
            </div>
            
            <!--q2-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle">Q2: Which country's national languages are: English, Malay, Mandarin and Tamil?</p>
                <p class="optionlist">
                    <input type="radio" name="q2" id="correct2" required>Singapore<br><br>
                    <input type="radio" name="q2" >Indonesia<br><br>
                    <input type="radio" name="q2" >India<br><br>
                    <input type="radio" name="q2" >Thailand<br><br>

                    <button class="pre" onclick="pre(1)">Previous</button><br>
                    <button class="next" onclick="next(2)">Next</button><br>


                </p><br>
            </div>

             <!--q3-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle">Q3: Which of these cities is closest to the equator?</p>
                <p class="optionlist">
                    <input type="radio" name="q3" >Jakarta<br><br>
                    <input type="radio" name="q3" >Cairo<br><br>
                    <input type="radio" name="q3" >Rio De Janeiro<br><br>
                    <input type="radio" name="q3" id="correct3" required>Nairobi<br><br>

                    <button class="pre" onclick="pre(2)">Previous</button><br>
                    <button class="next" onclick="next(3)">Next</button><br>

                </p><br>
            </div>


            <!--q4-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle" >Q4: Which country has the smallest population in the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q4">San Marino<br><br>
                    <input type="radio" name="q4" id="correct4" required>Vatican city<br><br>
                    <input type="radio" name="q4" >Monaco<br><br>
                    <input type="radio" name="q4" >Tuvalu<br><br>

                    <button class="pre" onclick="pre(3)">Previous</button><br>
                    <button class="next" onclick="next(4)">Next</button><br><br><br>

                   
                </p><br>
            </div>

            <!--q5-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle">Q5: Which South American Desert is one of the driest places on the Earth, never having recorded 
                    a single drop of rain?
                </p>
                <p class="optionlist">
                    <input type="radio" name="q5" >Sechura<br><br>
                    <input type="radio" name="q5" >Medanos De Coro<br><br>
                    <input type="radio" name="q5" >La Guajir<br><br>
                    <input type="radio" name="q5" id="correct5" required>Atacama Desert<br><br>

                    <button class="pre" onclick="pre(4)">Previous</button><br>
                    <button class="next" onclick="next(5)">Next</button><br>


                </p><br>
            </div>

            <!--q6-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle" >Q6: Which country is known as the "Land of the Rising Sun"?</p>
                <p class="optionlist">
                    <input type="radio" name="q6" >Malayasia<br><br>
                    <input type="radio" name="q6" id="correct6" required>Japan<br><br>
                    <input type="radio" name="q6" >India<br><br>
                    <input type="radio" name="q6" >Norway<br><br>

                    <button class="pre" onclick="pre(5)">Previous</button><br>
                    <button class="next" onclick="next(6)">Next</button><br>


                </p><br>
            </div>

            <!--q7-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle">Q7: Capital of Canada is ..... ?</p>
                <p class="optionlist">
                    <input type="radio" name="q7" >Toronto<br><br>
                    <input type="radio" name="q7" >Washington<br><br>
                    <input type="radio" name="q7" id="correct7" required>Ottawa<br><br>
                    <input type="radio" name="q7" >Vancouver<br><br>

                    <button class="pre" onclick="pre(6)">Previous</button><br>
                    <button class="next" onclick="next(7)">Next</button><br>


                </p><br>
            </div>

            <!--q8-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle" >Q8: Ankara is the capital of .....?</p>
                <p class="optionlist">
                    <input type="radio" name="q8" id="correct8" required>Turkey<br><br>
                    <input type="radio" name="q8" >India<br><br>
                    <input type="radio" name="q8" >Peru<br><br>
                    <input type="radio" name="q8" >Saudi Arabia<br><br>

                    <button class="pre" onclick="pre(7)">Previous</button><br>
                    <button class="next" onclick="next(8)">Next</button><br>


                </p><br>
            </div>

            <!--q9-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle">Q9: The smallest country in the world is ..... ?</p>
                <p class="optionlist">
                    <input type="radio" name="q9" >Switzerland<br><br>
                    <input type="radio" name="q9" >Jamaica<br><br>
                    <input type="radio" name="q9" >Luxemburg<br><br>
                    <input type="radio" name="q9" id="correct9" required>Vatican<br><br>

                    <button class="pre" onclick="pre(8)">Previous</button><br>
                    <button class="next" onclick="next(9)">Next</button><br>


                </p><br>
            </div>

            <!--q10-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 3<br></h3><hr><br>
                <p class="qtitle">Q10: Greenland belong to ...... ?</p>
                <p class="optionlist">
                    <input type="radio" name="q10" >Iceland<br><br>
                    <input type="radio" name="q10" id="correct10" required>Denmark<br><br>
                    <input type="radio" name="q10" >UK<br><br>
                    <input type="radio" name="q10" >Canada<br><br>

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

    <a href="g_b103_ans.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: left;">Click Here To Correct Answers</a>

    <a href="geo_interface2.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: right;">Click Here To Go To Basic Levels</a>

    
            </form>

   
</header>
        
    </body>
    </html>