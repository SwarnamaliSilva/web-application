<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tech Middle L2</title>
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
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle">Q1: What is called the “Brain of the computer”?</p>
                <p class="optionlist">
                    <input type="radio" name="q1" >Operating System<br><br>
                    <input type="radio" name="q1" id="correct1" required>Central Processing Unit<br><br>
                    <input type="radio" name="q1" >RAM<br><br>
                    <input type="radio" name="q1" >ROM<br><br>

                    
                    <button class="next" onclick="next(1)">Next</button><br>


                </p><br>
            </div>
            
            <!--q2-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle">Q2: Which of the following are components of the Central Processing Unit (CPU) of a computer?</p>
                <p class="optionlist">
                    <input type="radio" name="q2" id="correct2" required>Arithmetic and Logic Unit(ALU), Control Unit<br><br>
                    <input type="radio" name="q2" >Arithmetic and Logic Unit (ALU), Secondary Storage<br><br>
                    <input type="radio" name="q2" >Control Unit, Main Memory<br><br>
                    <input type="radio" name="q2" >Main Memory, Secondary Storage<br><br>

                    <button class="pre" onclick="pre(1)">Previous</button><br>
                    <button class="next" onclick="next(2)">Next</button><br>


                </p><br>
            </div>

             <!--q3-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle">Q3: Which of the following are examples of Secondary Storage?</p>
                <p class="optionlist">
                    <input type="radio" name="q3" >Flash Memory, Random Access Memory (RAM), Read Only Memory(ROM)<br><br>
                    <input type="radio" name="q3" >CD, Magnetic Tape, Read Only Memory(ROM)<br><br>
                    <input type="radio" name="q3" >DVD, Magnetic Tape, Random Access Memory (RAM)<br><br>
                    <input type="radio" name="q3" id="correct3" required>CD, Flash Memory, Magnetic Tape<br><br>

                    <button class="pre" onclick="pre(2)">Previous</button><br>
                    <button class="next" onclick="next(3)">Next</button><br>

                </p><br>
            </div>


            <!--q4-->
             <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle" style="font-size:15px;">Q4: Which of the following facilities is/are available in Word-processing software?<br>
                            <b>A- Find and Replace &nbsp; B- Mail Merge &nbsp;C- Spell check and thesaurus</b></p>
                <p class="optionlist">
                    <input type="radio" name="q4">A only<br><br>
                    <input type="radio" name="q4" id="correct4" required>All A, B, and C<br><br>
                    <input type="radio" name="q4" >A and B only<br><br>
                    <input type="radio" name="q4" >B and C only<br><br>

                    <button class="pre" onclick="pre(3)">Previous</button><br>
                    <button class="next" onclick="next(4)">Next</button><br><br><br>

                   
                </p><br>
            </div>

            <!--q5-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle">Q5: Which of the following media provides the highest speed of communication?</p>
                <p class="optionlist">
                    <input type="radio" name="q5" >Co-axial cable<br><br>
                    <input type="radio" name="q5" >Radio-wave<br><br>
                    <input type="radio" name="q5" >Twisted Pair cable<br><br>
                    <input type="radio" name="q5" id="correct5" required>Fiber Optic cable<br><br>

                    <button class="pre" onclick="pre(4)">Previous</button><br>
                    <button class="next" onclick="next(5)">Next</button><br>


                </p><br>
            </div>

            <!--q6-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle">Q6: Which of the following <b>cannot</b> be used to connect a few laptops together in a LAN?</p>
                <p class="optionlist">
                    <input type="radio" name="q6" >Hub<br><br>
                    <input type="radio" name="q6" id="correct6" required>External Disk Drive<br><br>
                    <input type="radio" name="q6" >Router<br><br>
                    <input type="radio" name="q6" >Switch<br><br>

                    <button class="pre" onclick="pre(5)">Previous</button><br>
                    <button class="next" onclick="next(6)">Next</button><br>


                </p><br>
            </div>

            <!--q7-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle">Q7: Which of the following is <b>not</b> useful for a desktop computer in connecting to the Internet?</p>
                <p class="optionlist">
                    <input type="radio" name="q7" >Internet Service Provider (ISP)<br><br>
                    <input type="radio" name="q7" >Router<br><br>
                    <input type="radio" name="q7" id="correct7" required>Email Software<br><br>
                    <input type="radio" name="q7" >Network Interface Card<br><br>

                    <button class="pre" onclick="pre(6)">Previous</button><br>
                    <button class="next" onclick="next(7)">Next</button><br>


                </p><br>
            </div>

            <!--q8-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle" style="font-size: 14px;">Q8: <b>Consider the following paragraph with blanks.</b><br> Mohammed has been asked to find 
                the harmful effects of pesticides. He sits at a computer and starts a .....(A)..... to access the internet and through it launches
                a .....(B)..... . Then in the .....(C)..... he types the text "harmful effects of pesticides".</p>
                <p class="optionlist">
                    <input type="radio" name="q8" id="correct8" required>A- Web browser, B- Search engine, C- Search box <br><br>
                    <input type="radio" name="q8" >A- Search box, B- Search engine, C- Web browser<br><br>
                    <input type="radio" name="q8" >A- Search engine, B- Search box, C- Web browser<br><br>
                    <input type="radio" name="q8" >A- Web browser, B- Search box, C- Search engine<br><br>

                    <button class="pre" onclick="pre(7)">Previous</button><br>
                    <button class="next" onclick="next(8)">Next</button><br>


                </p><br>
            </div>

            <!--q9-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle">Q9: Spam is,</p>
                <p class="optionlist">
                    <input type="radio" name="q9" >a trojan horse<br><br>
                    <input type="radio" name="q9" >a type of a virus<br><br>
                    <input type="radio" name="q9" >a type of encryption<br><br>
                    <input type="radio" name="q9" id="correct9" required>unsolicited e-mail sent to many recipients<br><br>

                    <button class="pre" onclick="pre(8)">Previous</button><br>
                    <button class="next" onclick="next(9)">Next</button><br>


                </p><br>
            </div>

            <!--q10-->
            <div class="container box"><br>
                <h3 style="text-align: center;">Technological QuizzA - Middle Level 2 <br></h3><hr><br>
                <p class="qtitle">Q10: Which of the following is <b>not</b> considered as an example of misuse of an ICT system?</p>
                <p class="optionlist">
                    <input type="radio" name="q10" >Sending spam<br><br>
                    <input type="radio" name="q10" id="correct10" required>Creating a blog site<br><br>
                    <input type="radio" name="q10" >Spreading malicious gossip on social media sites<br><br>
                    <input type="radio" name="q10" >Spreading viruses<br><br>

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
                    (alert("Click Bottom Link To Go To Middle Levels Or To See Correct Answers! 👇"));
               }
               </script>
                
            
    </div>      

    <a href="t_m102_ans.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: left;">Click Here To Correct Answers</a>

    <a href="tec_interface3.php" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: aliceblue; float: right;">Click Here To Go To Middle Levels</a>

    
            </form>

   
</header>
        
    </body>
    </html>