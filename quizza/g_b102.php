<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Geo Basic L2</title>
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
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle">Q1: The safest country on the Earth is?</p>
                <p class="optionlist">
                    <input type="radio" name="q1" >Denmark<br><br>
                    <input type="radio" name="q1" id="correct1" required>Iceland<br><br>
                    <input type="radio" name="q1" >Ireland<br><br>
                    <input type="radio" name="q1" >New Zealand<br><br>

                    
                    <button class="next" onclick="next(1)">Next</button><br>


                </p><br>
            </div>
            
            <!--q2-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle">Q2: The biggest colonial empire is?</p>
                <p class="optionlist">
                    <input type="radio" name="q2" id="correct2" required>British Empire<br><br>
                    <input type="radio" name="q2" >Roman Empire<br><br>
                    <input type="radio" name="q2" >Russian Empire<br><br>
                    <input type="radio" name="q2" >Mongol Empire<br><br>

                    <button class="pre" onclick="pre(1)">Previous</button><br>
                    <button class="next" onclick="next(2)">Next</button><br>


                </p><br>
            </div>

             <!--q3-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle">Q3: What country has the largest economy?</p>
                <p class="optionlist" >
                    <input type="radio" name="q3" >Japan<br><br>
                    <input type="radio" name="q3" >China<br><br>
                    <input type="radio" name="q3" >Germany<br><br>
                    <input type="radio" name="q3" id="correct3" required>United States<br><br>

                    <button class="pre" onclick="pre(2)">Previous</button><br>
                    <button class="next" onclick="next(3)">Next</button><br>

                </p><br>
            </div>


            <!--q4-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle" >Q4: Taiwan is located in ........?</p>
                <p class="optionlist">
                    <input type="radio" name="q4">Africa<br><br>
                    <input type="radio" name="q4" id="correct4" required>Asia<br><br>
                    <input type="radio" name="q4" >Europe<br><br>
                    <input type="radio" name="q4" >Australia<br><br>

                    <button class="pre" onclick="pre(3)">Previous</button><br>
                    <button class="next" onclick="next(4)">Next</button><br><br><br>

                   
                </p><br>
            </div>

            <!--q5-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle">Q5: Which river flows through Paris?</p>
                <p class="optionlist">
                    <input type="radio" name="q5" >Amazon River<br><br>
                    <input type="radio" name="q5" >Yellow River<br><br>
                    <input type="radio" name="q5" >Mississippi River<br><br>
                    <input type="radio" name="q5" id="correct5" required>Seine River<br><br>

                    <button class="pre" onclick="pre(4)">Previous</button><br>
                    <button class="next" onclick="next(5)">Next</button><br>


                </p><br>
            </div>

            <!--q6-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle" >Q6: Which mountain range in Russia seperates Europe and Asia?</p>
                <p class="optionlist">
                    <input type="radio" name="q6" >Pyranees<br><br>
                    <input type="radio" name="q6" id="correct6" required>Urals<br><br>
                    <input type="radio" name="q6" >Andes<br><br>
                    <input type="radio" name="q6" >Himalayas<br><br>

                    <button class="pre" onclick="pre(5)">Previous</button><br>
                    <button class="next" onclick="next(6)">Next</button><br>


                </p><br>
            </div>

            <!--q7-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle">Q7: Which country's national colour is Orange?</p>
                <p class="optionlist">
                    <input type="radio" name="q7" >Indonesia<br><br>
                    <input type="radio" name="q7" >India<br><br>
                    <input type="radio" name="q7" id="correct7" required>Netherlands<br><br>
                    <input type="radio" name="q7" >Singapore<br><br>

                    <button class="pre" onclick="pre(6)">Previous</button><br>
                    <button class="next" onclick="next(7)">Next</button><br>


                </p><br>
            </div>

            <!--q8-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle" >Q8: What is the largest US state by area?</p>
                <p class="optionlist">
                    <input type="radio" name="q8" id="correct8" required>Alaska<br><br>
                    <input type="radio" name="q8" >Alabama<br><br>
                    <input type="radio" name="q8" >Arizona<br><br>
                    <input type="radio" name="q8" >Califonia<br><br>

                    <button class="pre" onclick="pre(7)">Previous</button><br>
                    <button class="next" onclick="next(8)">Next</button><br>


                </p><br>
            </div>

            <!--q9-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle">Q9: Which city is the Taj Mahal located in ......?</p>
                <p class="optionlist">
                    <input type="radio" name="q9" >Jaipur<br><br>
                    <input type="radio" name="q9" >Mumbai<br><br>
                    <input type="radio" name="q9" >Patna<br><br>
                    <input type="radio" name="q9" id="correct9" required>Agra<br><br>

                    <button class="pre" onclick="pre(8)">Previous</button><br>
                    <button class="next" onclick="next(9)">Next</button><br>


                </p><br>
            </div>

            <!--q10-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 2<br></h3><hr><br>
                <p class="qtitle">Q10: What is the capital of Australia?</p>
                <p class="optionlist">
                    <input type="radio" name="q10" >Hobart<br><br>
                    <input type="radio" name="q10" id="correct10" required>Canberra<br><br>
                    <input type="radio" name="q10" >Wellington<br><br>
                    <input type="radio" name="q10" >Port Moresby<br><br>

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

    <a href="g_b102_ans.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: left;">Click Here To Correct Answers</a>

    <a href="geo_interface2.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: right;">Click Here To Go To Basic Levels</a>

    
    
            </form>
   
</header>
        
    </body>
    </html>