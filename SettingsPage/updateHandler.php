<?php

session_start();


if(isset($_POST['update'])) {


    $studentNumber = $_SESSION['student-no'];

    $myRoomiDB = new mysqli("localhost", "root", "", "myroomi_db");

    $newName = $_POST['name'];
    $newSurname = $_POST['surname'];
    $newEmail = $_POST['email'];

    $sqlUpdateQuery = "UPDATE `user`
                        SET `Name` = '$newName',
                            `Surname` = '$newSurname',
                            `Email` = '$newEmail'
                        WHERE `student-no` = '$studentNumber' ";

    $executeUpdateQuery = $myRoomiDB -> query($sqlUpdateQuery);

    if(!$executeUpdateQuery) {

        echo "Data Not Updated: " . $myRoomiDB -> connect_error;

    } else {

        mysqli_close($myRoomiDB);

        header("Location: ../AccountPage/account.php");
        exit();

    }


}

?>