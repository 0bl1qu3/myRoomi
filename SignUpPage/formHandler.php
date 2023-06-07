<?php

session_start();

$myRoomiDB = new mysqli("localhost", "root", "", "myroomi_db");

if(isset($_POST['completeProfileButton'])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $studentNumber = $_POST['student-no'];
    $password = $_POST['password'];

    $_SESSION['student-no'] = $studentNumber;

    $sqlInsertQuery = "INSERT INTO `user`(`Name`, `Surname`, `Email`, `Student-No`, `Password`) VALUES ('$name', '$surname', '$email', '$studentNumber', '$password')";

    $executeInsertQuery = $myRoomiDB -> query($sqlInsertQuery);

    if(!$executeInsertQuery) {

        echo "Data Not Inserted: " . $myRoomiDB -> $connect_error;

    } else {

        mysqli_close($myRoomiDB);

        header('Location: ../CreateProfilePage/create-profile.php');
        exit();

    }


    /*
    header("Location: ");
    exit();
    */

}

?>