<?php
    $user_name = $_GET["name"];
    $id_number = (int) $_GET["ID"];
    $eats_meat = FALSE;
    if (isset($_GET["meat"])) {
        $eats_meat = TRUE;
    }
    echo $user_name;
    echo $id_number;
    echo $eats_meat;
?>