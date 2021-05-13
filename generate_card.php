<?php
    require_once('db.php');

    if (isset($_POST['number']) && isset($_POST['value'])) {
        $number = $_POST['number'];
        $value = $_POST['value'];
        while ($number) {
            if (generate_card($value)) {
                --$number;
            }
        }

        print_r(json_encode(array("code" => 0, "create card successful")));
    }
?>