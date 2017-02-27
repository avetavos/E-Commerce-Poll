<?php
    require 'connector.php';

    $frequency = $_POST['choice_1'];
    $outcome = $_POST['choice_2'];

    if (isset($_POST['submit'])) {
        if (!empty($_POST['choice_3'])) {
            foreach ($_POST['choice_3'] as $choice_3) {
                $way_temp[] = $choice_3;
            }
            $way = implode(",",$way_temp);
        }
        if (!empty($_POST['choice_4'])) {
            foreach ($_POST['choice_4'] as $choice_4) {
                $effect_temp[] = $choice_4;
            }
            $effect = implode(",",$effect_temp);
        }
        if(!empty($_POST['choice_5'])) {
            foreach ($_POST['choice_5'] as $choice_5) {
                $type_temp[] = $choice_5;
            }
            $type = implode(",",$type_temp);
        }
    }

    $query = "INSERT INTO part_two_tbl (frequency,outcome,way,effect,type) VALUES ('$frequency','$outcome','$way','$effect','$type')";

    $result = mysqli_query($con, $query);

    header ("Location: endPage.php");
?>