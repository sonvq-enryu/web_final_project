<?php
    require_once('db.php');

    function is_serial_exist($serial_number) {
        $sql = "select serial from cards where serial = ?";
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s', $serial_number);

        if (!$stm->execute()) {
            return true;
        }

        $result = $stm->get_result();
        if ($result->num_rows > 0) {
            return true;
        }

        return false;
    }

    function generate_serial_number() {
        
    }


?>