<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Geo Hard L1</title>
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
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle">Q1: How many planets in the solar system?</p>
                <p class="optionlist">
                    <input type="radio" name="q1" >09 planets<br><br>
                    <input type="radio" name="q1" id="correct1" required>08 planets<br><br>
                    <input type="radio" name="q1" >07 planets<br><br>
                    <input type="radio" name="q1" >06 planets<br><br>

                    
                    <button class="next" onclick="next(1)">Next</button><br>


                </p><br>
            </div>
            
            <!--q2-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle">Q2: Which is the largest planet in the solar system?</p>
                <p class="optionlist">
                    <input type="radio" name="q2" id="correct2" required>Jupiter<br><br>
                    <input type="radio" name="q2" >Saturn<br><br>
                    <input type="radio" name="q2" >Neptune<br><br>
                    <input type="radio" name="q2" >Uranus<br><br>

                    <button class="pre" onclick="pre(1)">Previous</button><br>
                    <button class="next" onclick="next(2)">Next</button><br>


                </p><br>
            </div>

             <!--q3-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle">Q3: Which is the smallest planet in the solar system?</p>
                <p class="optionlist">
                    <input type="radio" name="q3" >Earth<br><br>
                    <input type="radio" name="q3" >Venus<br><br>
                    <input type="radio" name="q3" >Mars<br><br>
                    <input type="radio" name="q3" id="correct3" required>Mercury<br><br>

                    <button class="pre" onclick="pre(2)">Previous</button><br>
                    <button class="next" onclick="next(3)">Next</button><br>

                </p><br>
            </div>


            <!--q4-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle" >Q4: Which planet is closest the Sun?</p>
                <p class="optionlist">
                    <input type="radio" name="q4">Venus<br><br>
                    <input type="radio" name="q4" id="correct4" required>Mercury<br><br>
                    <input type="radio" name="q4" >Saturn<br><br>
                    <input type="radio" name="q4" >Mars<br><br>

                    <button class="pre" onclick="pre(3)">Previous</button><br>
                    <button class="next" onclick="next(4)">Next</button><br><br><br>

                   
                </p><br>
            </div>

            <!--q5-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle">Q5: Who among the following discovered the concept of expanding universe?</p>
                <p class="optionlist">
                    <input type="radio" name="q5" >Charles Messier<br><br>
                    <input type="radio" name="q5" >Carl Edward Sagan<br><br>
                    <input type="radio" name="q5" >Tycho Brahe<br><br>
                    <input type="radio" name="q5" id="correct5" required>Edwin Hubble<br><br>

                    <button class="pre" onclick="pre(4)">Previous</button><br>
                    <button class="next" onclick="next(5)">Next</button><br>


                </p><br>
            </div>

            <!--q6-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle" >Q6: Which planet is called morning star?</p>
                <p class="optionlist">
                    <input type="radio" name="q6" >Uranus<br><br>
                    <input type="radio" name="q6" id="correct6" required>Venus<br><br>
                    <input type="radio" name="q6" >Mercury<br><br>
                    <input type="radio" name="q6" >Earth<br><br>

                    <button class="pre" onclick="pre(5)">Previous</button><br>
                    <button class="next" onclick="next(6)">Next</button><br>


                </p><br>
            </div>

            <!--q7-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle">Q7: Which is the farthest planet from the Sun?</p>
                <p class="optionlist">
                    <input type="radio" name="q7" >Mercury<br><br>
                    <input type="radio" name="q7" >Jupiter<br><br>
                    <input type="radio" name="q7" id="correct7" required>Neptune<br><br>
                    <input type="radio" name="q7" >Saturn<br><br>

                    <button class="pre" onclick="pre(6)">Previous</button><br>
                    <button class="next" onclick="next(7)">Next</button><br>


                </p><br>
            </div>

            <!--q8-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle" >Q8: Which planet is known as the Earth's twin?</p>
                <p class="optionlist">
                    <input type="radio" name="q8" id="correct8" required>Venus<br><br>
                    <input type="radio" name="q8" >Mars<br><br>
                    <input type="radio" name="q8" >Mercury<br><br>
                    <input type="radio" name="q8" >Saturn<br><br>

                    <button class="pre" onclick="pre(7)">Previous</button><br>
                    <button class="next" onclick="next(8)">Next</button><br>


                </p><br>
            </div>

            <!--q9-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle">Q9: The Planet with maximum number of moons?</p>
                <p class="optionlist">
                    <input type="radio" name="q9" >Mercury<br><br>
                    <input type="radio" name="q9" >Mars<br><br>
                    <input type="radio" name="q9" >Jupiter<br><br>
                    <input type="radio" name="q9" id="correct9" required>Saturn<br><br>

                    <button class="pre" onclick="pre(8)">Previous</button><br>
                    <button class="next" onclick="next(9)">Next</button><br>


                </p><br>
            </div>

            <!--q10-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Geographical QuizzA - Hard Level 1<br></h3><hr><br>
                <p class="qtitle">Q10: The status of Pluto is demoted to :</p>
                <p class="optionlist">
                    <input type="radio" name="q10" >Asteroid<br><br>
                    <input type="radio" name="q10" id="correct10" required>Dwarf Planet<br><br>
                    <input type="radio" name="q10" >Comet<br><br>
                    <input type="radio" name="q10" >Meteor<br><br>

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

    <a href="g_h101_ans.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: left;">Click Here To Correct Answers</a>

    <a href="geo_interface4.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: right;">Click Here To Go To Hard Levels</a>

    
    
            </form>
   
</header>
        
    </body>
    </html>