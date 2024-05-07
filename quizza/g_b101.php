<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Geo Basic L1</title>
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
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle">Q1: How many continents are on the Earth?</p>
                <p class="optionlist">
                    <input type="radio" name="q1" >06<br><br>
                    <input type="radio" name="q1" id="correct1" required>07<br><br>
                    <input type="radio" name="q1" >05<br><br>
                    <input type="radio" name="q1" >08<br><br>

                    
                    <button class="next" onclick="next(1)">Next</button><br>


                </p><br>
            </div>
            
            <!--q2-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle" required>Q2: What country is the largest in the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q2" id="correct2" required>Russia<br><br>
                    <input type="radio" name="q2" >Canada<br><br>
                    <input type="radio" name="q2" >China<br><br>
                    <input type="radio" name="q2" >USA<br><br>

                    <button class="pre" onclick="pre(1)">Previous</button><br>
                    <button class="next" onclick="next(2)">Next</button><br>


                </p><br>
            </div>

             <!--q3-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle">Q3: Which is the largest lake in the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q3" >Victoria<br><br>
                    <input type="radio" name="q3" >Huron<br><br>
                    <input type="radio" name="q3" >Superior<br><br>
                    <input type="radio" name="q3" id="correct3" required>Caspian Sea<br><br>

                    <button class="pre" onclick="pre(2)">Previous</button><br>
                    <button class="next" onclick="next(3)">Next</button><br>

                </p><br>
            </div>


            <!--q4-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle" >Q4: Which is the longest river in the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q4">Amazon<br><br>
                    <input type="radio" name="q4" id="correct4" required>Nile<br><br>
                    <input type="radio" name="q4" >Brahmaputra<br><br>
                    <input type="radio" name="q4" >Yangtze<br><br>

                    <button class="pre" onclick="pre(3)">Previous</button><br>
                    <button class="next" onclick="next(4)">Next</button><br><br><br>

                   
                </p><br>
            </div>

            <!--q5-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle">Q5: What is the tallest building in the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q5" >Merdeka 118<br><br>
                    <input type="radio" name="q5" >Lakhta Center<br><br>
                    <input type="radio" name="q5" >Shanghai Tower<br><br>
                    <input type="radio" name="q5" id="correct5" required>Burj Khalifa<br><br>

                    <button class="pre" onclick="pre(4)">Previous</button><br>
                    <button class="next" onclick="next(5)">Next</button><br>


                </p><br>
            </div>

            <!--q6-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle" >Q6: What is the tallest mountain in the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q6" >Kilimajaro<br><br>
                    <input type="radio" name="q6" id="correct6" required>Mount Everest<br><br>
                    <input type="radio" name="q6" >Carpathian<br><br>
                    <input type="radio" name="q6" >Manaslu<br><br>

                    <button class="pre" onclick="pre(5)">Previous</button><br>
                    <button class="next" onclick="next(6)">Next</button><br>


                </p><br>
            </div>

            <!--q7-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle">Q7: Which country has the largest population in the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q7" >India<br><br>
                    <input type="radio" name="q7" >USA<br><br>
                    <input type="radio" name="q7" id="correct7" required>China<br><br>
                    <input type="radio" name="q7" >Indonesia<br><br>

                    <button class="pre" onclick="pre(6)">Previous</button><br>
                    <button class="next" onclick="next(7)">Next</button><br>


                </p><br>
            </div>

            <!--q8-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle" >Q8: What is deepest place on the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q8" id="correct8" required>The Mariana Trench<br><br>
                    <input type="radio" name="q8" >Dead Sea<br><br>
                    <input type="radio" name="q8" >Gulf of Mexico<br><br>
                    <input type="radio" name="q8" >Bermuda Triangle<br><br>

                    <button class="pre" onclick="pre(7)">Previous</button><br>
                    <button class="next" onclick="next(8)">Next</button><br>


                </p><br>
            </div>

            <!--q9-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle">Q9: How many countries are in the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q9" >192 countries<br><br>
                    <input type="radio" name="q9" >172 countries<br><br>
                    <input type="radio" name="q9" >96 countries<br><br>
                    <input type="radio" name="q9" id="correct9" required>195 countries<br><br>

                    <button class="pre" onclick="pre(8)">Previous</button><br>
                    <button class="next" onclick="next(9)">Next</button><br>


                </p><br>
            </div>

            <!--q10-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Basic Level 1<br></h3><hr><br>
                <p class="qtitle">Q10: Tallest waterfall on the world?</p>
                <p class="optionlist">
                    <input type="radio" name="q10" >Victoria Falls<br><br>
                    <input type="radio" name="q10" id="correct10" required>Angel Falls<br><br>
                    <input type="radio" name="q10" >Niagara Falls<br><br>
                    <input type="radio" name="q10" >Iguazu Falls<br><br>

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

    <a href="g_b101_ans.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: left;">Click Here To Correct Answers</a>

    <a href="geo_interface2.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: right;">Click Here To Go To Basic Levels</a>

    
    
            </form>
   
</header>
        
    </body>
    </html>