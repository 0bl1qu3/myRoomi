<?php

require('formHandler.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Profile</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <nav id="navigation">

        <input type="text" id="search-bar" placeholder="Search">

    </nav>

    <div id="center-div">

        <h1>Create Your Account</h1>
        <h3>Already have one? Just <~Login~></h3>

        <form action="" method="POST" id="center-form">

            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="sign-in-inputs">

            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="sign-in-inputs">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="sign-in-inputs">

            <label for="dob">Date of Birth</label>
            <select name="dob" id="dob" class="sign-in-inputs">
                <option value="opt1">Select</option>
                <option value="opt2">Your</option>
                <option value="opt3">Date</option>
                <option value="opt4">Of</option>
                <option value="opt5">Birth</option>
            </select>

            <button type="submit" name="complete-your-profile-button">Complete Your Profile</button>

    </form>

    </div>
    
</body>
</html>