<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="app.js"></script>
</head>
<body>
    <div class="container">
        <div class="slider">
            <div class="slide">
                <section>
                    <img class="image" src="images/gender.jpg" alt="">
                    <div class="info">
                        <h2>1</h2>
                        <h1> What is your gender?</h1>

                        <form action="" method="POST">
                            <input type="radio" name="gender" value="male">
                            <label for="gender"> Male</label>

                            <input type="radio" name="gender" value="female">
                            <label for="gender">  Female</label>

                            <span class="other-text_area">
                                <input type="text" placeholder="Other" name="other">
                            </span>
                        </form>

                    </div>
                </section>

                <section>
                    <img class="image" src="images/pets.jpg" alt="">
                    <div class="info">
                        <h2>2</h2>
                        <h1> Do you like pets?</h1>

                        <form action="" method="POST">
                            <input type="radio" name="pets?" value="yes">
                            <label for="pets?"> Yes</label>

                            <input type="radio" name="pets?" value="no">
                            <label for="pets?"> No</label>

                        <h1>If yes, specify:</h1>
                            
                            <span class="other-text_area">
                                <input type="text" placeholder="Pet Type" name="other">
                            </span>
                        </form>
                    </div>
                </section>

                <section>
                    <img class="image" src="images/allergies.jpg" alt="">
                    <div class="info">
                        <h2>3</h2>
                        <h1> Do you have any allergies?</h1>
        
                        <form action="" method="get">
                            <input type="radio" name="allergies?" value="yes">
                            <label for="allergies?"> Yes</label>
        
                            <input type="radio" name="allergies?" value="no">
                            <label for="allergies?"> No</label>
        
                        <h1>If yes, specify:</h1>
                           
                            <span class="other-text_area">
                                <input type="text" placeholder="Allergy" name="other">
                            </span>
                        </form>
                    </div>
                </section>

                <section>
                    <img class="image" src="images/cigarette.png" alt="">
                    <div class="info">
                            <h2>4</h2>
                            <h1> Do you smoke?</h1>

                            <form action="" method="get">
                            <input type="radio" name="smoker?" value="yes">
                            <label for="smoker?"> Yes</label>

                            <input type="radio" name="smoker?" value="no">
                            <label for="smoker?"> No</label>
                        </form>
                    </div>
                </section>

                <section>
                    <img class="image" src="images/cleanliness.jpg" alt="">
                    <div class="info">
                        <h2>5</h2>
                        <h1> How tidy are you?</h1>

                            <form action="" method="get">
                            <input type="radio" name="tidiness level" value="messy">
                            <label for="tidiness level"> Messy</label>

                            <input type="radio" name="tidiness level" value="neat">
                            <label for="tidiness level"> Neat Freak</label>

                            <input type="radio" name="tidiness level" value="average">
                            <label for="tidiness level"> Average</label>
                        </form>
                    </div>
                </section>

                <section>
                    <img class="image" src="images/guests.jpg" alt="">
                    <div class="info">
                        <h2>6</h2>
                        <h1> How do you feel about having guests over?</h1>

                        <form action="" method="get">
                            <input type="radio" name="guests preferance" value="ok">
                            <label for="guests preferance"> OK with me</label>

                            <input type="radio" name="guests preferance" value="rarely">
                            <label for="guests preferance"> Prefer rarely</label>

                            <input type="radio" name="guests preferance" value="never">
                            <label for="guests preferance"> Prefer Never!</label>
                        </form>
                </div>
                </section>

                <section>
                    <img class="image" src="images/beer.jpg" alt="">
                    <div class="info">
                        <h2>7</h2>
                        <h1> Do you drink alchohol?</h1>

                        <form action="" method="get">
                            <input type="radio" name="alchohol?" value="yes">
                            <label for="alchohol?"> Yes</label>

                            <input type="radio" name="alchohol?" value="no">
                            <label for="alchohol?"> No</label>
                        </form>
                    </div>
                </section>

                <section>
                    <img class="image" src="images/hobbies.png" alt="">
                    <div  class="info">
                        <h2>8</h2>
                        <h1> Do You Have Any Hobbies?</h1>

                        <form action="" method="get">
                            <input type="radio" name="yes" value="yes"> 
                            <label for="hobby">Yes</label>

                            <input type="radio" name="no" value="no"> 
                            <label for="hobby">No</label>
                            
                            <h1>If yes, specify:</h1>
                           
                            <span class="other-text_area">
                                <input type="text" placeholder="Hobby" name="hobby">
                            </span>
                        </form>
                    </div>
                </section>

                <section>
                    <img class="image" src="images/sleep schedule.jpg" alt="">
                    <div class="info">
                        <h2>9</h2>
                        <h1> What is your typical sleep schedule?</h1>

                        <form action="" method="get">
                            <input type="radio" name="sleep schedule" value="early"> 
                            <label for="sleep schedule">Early to bed, early to rise!</label>

                            <input type="radio" name="sleep schedule" value="regular"> 
                            <label for="sleep schedule">Regular</label>

                            <input type="radio" name="sleep schedule" value="late">
                            <label for="sleep schedule"> Night Owl</label>

                            <span class="other-text_area">
                                <input type="text" placeholder="Other" name="sleepSchedule">
                            </span>

                        </form> 
                    </div>
                </section>

                <section class="section-10">
                    <img class="image" src="images/residence.jpg" alt="" class="slide">
                    <div class="info">
                        <h2>10</h2>
                        <h1> Where will you be staying?</h1>
                        
                        
                        <form action="" method="get">
                            <div class="stay">
                                <input type="radio" name="staying at" value="APK"> 
                                <label for="staying at">UJ APK</label>
                            </div> 

                            <div class="stay">
                               <input type="radio" name="staying at" value="APB"> 
                                <label for="staying at">UJ APB</label>
                            </div>

                            <div class="stay">
                                <input type="radio" name="staying at" value="SOWETO">
                                <label for="staying at">UJ SOWETO</label> 
                            </div>

                            <div class="stay">
                            <input type="radio" name="staying at" value="DFC">
                            <label for="staying at">UJ DFC</label>
                            </div>
                        </form> 
        
                        <form action="CreateProfileHandler.php" method="POST" >

                            <span class="submit">
                                <button class="submit-button" name="CreateProfileSubmit">Submit</button>
                            </span>

                        </form>
                    </div>
                </section>

            </div>
           <div class="navigation">
            <button id="prev-btn">Previous</button>
            <button id="next-btn">Next</button>
           </div>
        </div>
    </div>
</body>
</html>