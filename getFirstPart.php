<?php
    require 'connector.php';

    $gender = $_POST['choice_1'];
    $age = $_POST['choice_2'];
    $major = $_POST['choice_3'];
    $income = $_POST['choice_4'];
    $buy = $_POST['choice_5'];

    $query = "INSERT INTO part_one_tbl (gender,age,major,income,buy) VALUES ('$gender','$age','$major','$income','$buy')";

    $result = mysqli_query($con, $query);
    
    if ($buy == "ever") {
        header ("Location: secondPart.php");
    }
    else {
        header ("Location: endPage.php");
    }
?>