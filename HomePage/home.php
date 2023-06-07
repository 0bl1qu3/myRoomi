<?php

session_start();

$studentNumber = $_SESSION['student-no'];

$myRoomi_DB = new mysqli("localhost", "root", "", "myroomi_db");

$sqlSelectQuery = "SELECT `Name`, `Surname` FROM `user` WHERE `student-no` = $studentNumber";

$executeSelectQuery = $myRoomi_DB -> query($sqlSelectQuery);

if($executeSelectQuery -> num_rows > 0) {

  $row = $executeSelectQuery -> fetch_assoc();

  $name = $row['Name'];
  $surname = $row['Surname'];

  $_SESSION['name'] = $name;
  $_SESSION['surname'] = $surname;

}

mysqli_close($myRoomi_DB);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="headsection.css">
    <link rel="stylesheet" href="match-me.css"> 
    <link rel="stylesheet" href="main-slider.css">
    <link rel="stylesheet" href="testemonial-slide.css">
    <link rel="stylesheet" href="style.css">  <!-- Styles for elements throughout the page -->
    <script defer src="testemonial-slide.js"></script>
    <script defer src="main-slider.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
  <!-- Start of the head section -->
  <div class="navbar-logo-container">
    <a href="myRoomi/myRoomi/Code/Welcome_page/index.html" class="logo"> <!-- link  to the welcome page -->
      <img src="images1/logo.jpg" alt="Logo">
    </a>

    <span class="heading">
      <h1>MyRoomi</h1>
    </span>

    <nav class="navbar">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="../MatchesPage/matches.html">Matches</a></li>
        <li><a href="../AccountPage/account.php">Account</a></li>
        <li><a href="../AboutUsPage/index.html">About Us</a></li>
        <li><a href="../HelpPage/hi.html">Help</a></li>
      </ul>
    </nav>

    <div class="welcome-user">
      <?php $displayName = $_SESSION['name']; $displaySurname = $_SESSION['surname'];  echo "<p class='welcome' style='box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);' > Welcome $displayName $displaySurname </p>";  ?>
    </div>
  </div>
  <!--End of the head section-->
  
  <!--Div for spacing-->
  <div class="spacing"></div>
  <!--Div for spacing-->

  <!-- Start of the main slider -->
  <div class="background-image">
    
    <div class="container">

    <div class="slider">
      <div class="slide active">
        <img src="images2/1.jpg" alt="">
        <div class="info">
          <h2>  Campus Updates:</h2>
          <p><ul>
            <li>14 May: 56 lost student bank cards recovered.</li>
            <li>18 May: Library event - Famous surprise guest speaker.</li>
            <li>26 May: Power Outages - Soweto campus.</li>
            <li>30 May: Water issues at APB student residences.</li>
        </ul></p>
        </div>
      </div>
      <div class="slide">
        <img src="images2/2.jpg" alt="">
        <div class="info">
          <h2 id="no-2">By students, For Students</h2>
        </div>
      </div>
      <div class="slide">
        <img src="images2/3.jpg" alt="">
        <div class="info">
          <h2 id="no-3">Harmony</h2>
        </div>
      </div>
      <div class="slide">
        <img src="images2/4.jpg" alt="">
        <div class="info">
          <h2 id="no-4">Inclusivity</h2>
        </div>
      </div>
      <div class="slide">
        <img src="images2/5.jpg" alt="">
        <div class="info">
          <h3>Let's get YOU matched!</h3>
        </div>
      </div>
      <div class="navigation">
        <i class="fas fa-chevron-left prev-btn"></i>
        <i class="fas fa-chevron-right next-btn"></i>
      </div>
      <div class="navigation-visibility">
        <div class="slide-icon active"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
      </div>

    </div>
  </div>

  </div>
  <!-- End of the main slider-->
  
  <!-- Start of the Match-me image(button) -->
  <div class="img-box">
    <a href="../MatchesPage/matches.html"> <!--Link to the profile page -->
        <h1>Match ME Now!!!</h1>
        <img src="images3/MatchMe.jpg" alt="">
    </a>
  </div>
  <!-- End of the Match-me image(button) -->

  <!-- Start of the testemonial slide -->
  <div class="testimonial-slider">
    <h1>Testemonials</h1>
    <h2>Check out what students are saying about myRoomi</h2>
    <div class="testimonial-slide">
      <div class="testimonial-content">
        <img src="images4/avatar1.png" alt="Testimonial Avatar">
        <p class="testimonial-text">"I found the perfect roommate through myRoomi. The process was seamless and the platform was easy to use."</p>
        <p class="testimonial-author">- Ntombi Ndlovhu</p>
      </div>
    </div>
    <div class="testimonial-slide">
      <div class="testimonial-content">
        <img src="images4/avatar2.png" alt="Testimonial Avatar">
        <p class="testimonial-text">"myRoomi is the Bomb dot Com! I now have an amazing roommate thanks to this website. Highly recommended!"</p>
        <p class="testimonial-author">- Jack Smith</p>
      </div>
    </div>
    <div class="testimonial-slide">
      <div class="testimonial-content">
        <img src="images4/avatar3.png" alt="Testimonial Avatar">
        <p class="testimonial-text">"I had a fantastic experience using myRoomi to find a roommate. The search filters made it easy to find a compatible match."</p>
        <p class="testimonial-author">- Shreya Naidoo</p>
      </div>
    </div>
    <div class="testimonial-slide">
      <div class="testimonial-content">
        <img src="images4/avatar4.png" alt="Testimonial Avatar">
        <p class="testimonial-text">"myRoomi made my roommate search stress-free. I found a great match within days!"</p>
        <p class="testimonial-author">- Lisa Meisner</p>
      </div>
    </div>
    <div class="testimonial-slide">
      <div class="testimonial-content">
        <img src="images4/avatar5.png" alt="Testimonial Avatar">
        <p class="testimonial-text">"Thanks to myRoomi, I found not just a roommate, but a friend. I couldn't be happier with my experience."</p>
        <p class="testimonial-author">- Sipho Nkosi</p>
      </div>
    </div>
  </div>
  <!-- End of the testemonial slide -->

  <!-- Start of contact-info-->
  <div class="b">
    <p id="p1">Thank you for considering MyRoomi as your go-to platform for finding the perfect roommate. We understand how important it is to find someone who you can trust and live with comfortably, and we're committed to making that process as easy as possible for you. With our user-friendly platform and comprehensive search options, you can find a roommate who shares your values, lifestyle preferences, and interests in no time. <br>
      <br><br><br>Sign up today and take the first step toward finding the perfect roommate and the home of your dreams!</p>

       <p id="p4">Quick Link</p>
       
       <a href="">Home</a>
       <a href="">Inbox</a>
       <a href="">Page</a>
       <a href="">friend</a>
       <a href="">account</a>
       <a href="">logout</a>

       <p id="p6">Contact Us</p>

       <div id="hey">
        <p id="p8">123_Anywhere_St,<br><br> City_Johannesburg, <br><br> ST_12345, <br><br> MyRoomi@gmail.com, <br><br> +123_456_7890 </p>
       </div>

</div>
  <!--End of contact-info-->

  <!-- Start of the Footer -->
  <footer>
    <br>
    <p id="p3">©in collaboration with the University of Johannesburg <span id="span">..............................</span>Terms of use | Privacy Environmental Policy</p>
  </footer>
  <!-- End of the footer -->

</body>
</html>