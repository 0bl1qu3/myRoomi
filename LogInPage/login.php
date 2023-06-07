<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'correct_username' && $password === 'correct_password') {
        $_SESSION['username'] = $username;
        header('Location: ../HomePage/home.php');
        exit();
    } else {
        $errorMessage = 'Invalid username or password';
        echo $errorMessage;
    }


    
     //Sign-In verification code
    $myRoomiDB = new mysqli("localhost", "root", "", "myroomi_db");

    $studentNumber = $_POST['student-no'];
    $password = $_POST['password'];

    $sqlSelectQuery = "SELECT `Student-No`, `Password` FROM `user` WHERE `Student-No` == `$studentNumber`";

    $selectQueryExecuted = $myRoomiDB -> query($sqlSelectQuery);

    if($selectQueryExecuted -> num_rows > 0) {

        $row = $result -> fetch_assoc();
        $databasePassword = $row['Password'];

        if(password_verify($password, $databasePassword)) {

            // What happens if password matches

        } else {

            // What happens if password doesn't match

        }

    } else {

        echo "No matching student number found";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Registration.css">
</head>
<body>
    <div class="background">
        <div class="container">
            <div id="scene">
                <div class="image" data-depth-x="0.15"><img src="mountains01.png"></div>
            </div>
        </div>

        <div class="header">
            <img id="logo" src="logo.png" alt="Logo"> 
        </div>

        <form class="registration" action="" method="POST">
            <h2>Log In</h2>
            <div class="input">
                <label for="username">Username:</label> <br>
                <input class="userInput" type="text" name="username" placeholder="*" required>
            </div>
           
            <div class="input">
                <label for="password">Password:</label> <br>
                <input class="userInput" type="password" name="password" placeholder="*" required>
            </div>
          
            <div class="input">
                <input type="submit" value="Submit" id="btn">
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" 
    integrity="sha512-/6TZODGjYL7M8qb7P6SflJB/nTGE79ed1RfJk3dfm/Ib6JwCT4+tOfrrseEHhxkIhwG8jCl+io6eaiWLS/UX1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script>
        let scene = document.getElementById('scene');
        let parallax = new Parallax(scene);
    </script>

</body>
</html>
