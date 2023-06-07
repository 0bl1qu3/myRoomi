<?php

session_start();

$studentNumber = $_SESSION['student-no'];

$myRoomi_DB = new mysqli("localhost", "root", "", "myroomi_db");

$sqlSelectQuery = "SELECT `Name`, `Surname`, `Email`, `Student-No` FROM `user` WHERE `Student-No` = $studentNumber";

$executeSelectQuery = $myRoomi_DB -> query($sqlSelectQuery);

if($executeSelectQuery -> num_rows > 0) {

  $row = $executeSelectQuery -> fetch_assoc();

  $name = $row['Name'];
  $surname = $row['Surname'];
  $email = $row['Email'];
  $studentNumber = $row['Student-No'];

  $_SESSION['name'] = $name;
  $_SESSION['surname'] = $surname;
  $_SESSION['email'] = $email;
  $_SESSION['student-no'] = $studentNumber;

}

mysqli_close($myRoomi_DB);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my account</title>
    <link rel="stylesheet" href="styleMyAccountPage.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>
    <header class="header">
        <img class="logo" src="logoMyRoomi.png"> 
        
        <nav class="navbar">
            <a href="../HomePage/home.php" style="--i:1;">Home</a>
            <a href="../MatchesPage/matches.html" style="--i:4;">Matches</a>
            <a href="../AccountPage/account.php" style="--i:5;" class="active">Account</a>
            <a href="../SettingsPage/settings.php" style="--i:6;">Settings</a>
        </nav>
    </header>
    <h1 style="text-align: center;">myPROFILE</h1>

    <section class="profile">
        <div class="profile-content">
            <h3 style="text-align: center; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">ABOUT ME</h3>
            <hr>

        </div>

        <div class="profile-img">
            <div class="glowing-circle">
                <span></span>
                <span></span>
                <div class="image">
                    <img src="avatar.jpg" alt="profilePic">  
                </div>
            </div>
            <label for="file" class="file btn">Change Photo</label>
            <input type="file" id="file" style="display:none">
        </div>
        <div class="presentation">
            <div class="presentation-content">
                <h3 style="text-align: center; font-family: Impact, Haettenschweiler, 'Arial', sans-serif;">ACCOUNT INFORMATION</h3>
            <?php  $displayName = $_SESSION['name'];  echo "<p><strong>Name:</strong><span id='name'> $displayName </span></p>"  ?>
            <hr>
            <?php  $displaySurname = $_SESSION['surname'];  echo "<p><strong>Surname:</strong><span id='surname'> $displaySurname </span></p>"  ?>
            <hr>
            <?php  $displayEmail = $_SESSION['email'];  echo "<p><strong>Email:</strong><span id='email'> $displayEmail </span></p>"  ?>
            <hr>
            <?php  $displayStudentNumber = $_SESSION['student-no'];  echo "<p><strong>Student Number:</strong><span id='student-no'> $displayStudentNumber </span></p>"  ?>
            <hr>
        </div>
    </section>

    <script>

const fileInput = document.getElementById('file');
        const profileImage = document.querySelector('.profile-img .image img');

        fileInput.addEventListener('change', function () {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener('load', function () {
                profileImage.src = reader.result;
            });

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        const changePhotoButton = document.querySelector('.profile-img .file');
        changePhotoButton.addEventListener('click', function () {
            fileInput.click();
        });
        document.addEventListener("DOMContentLoaded", function() {
          const registrationData = localStorage.getItem("registrationData");
          if (registrationData) {
            const data = JSON.parse(registrationData);
            displayRegistrationData(data);
            localStorage.removeItem("registrationData"); 
          }
        });

        function displayRegistrationData(data) {
          const profileContent = document.querySelector(".profile-content");

          const gender = document.createElement("p");
          gender.innerHTML = `<strong>Gender:</strong> ${data.gender}`;
          profileContent.appendChild(gender);

          const pets = document.createElement("p");
          pets.innerHTML = `<strong>Do you have pets:</strong> ${data.pets}`;
          profileContent.appendChild(pets);

          const tidy = document.createElement("p");
          tidy.innerHTML = `<strong>Are you tidy:</strong> ${data.tidy}`;
          profileContent.appendChild(tidy);

          const smoke = document.createElement("p");
          smoke.innerHTML = `<strong>Do you smoke:</strong> ${data.smoke}`;
          profileContent.appendChild(smoke);

          const guests = document.createElement("p");
          guests.innerHTML = `<strong>Allow guests:</strong> ${data.guests}`;
          profileContent.appendChild(guests);

          const alcohol = document.createElement("p");
          alcohol.innerHTML = `<strong>Alcohol consumption:</strong> ${data.alcohol}`;
          profileContent.appendChild(alcohol);
        }

    </script>
</body>
</html>
