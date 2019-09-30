<?php
    if(isset($_POST["Id"])){
        simpandaftarulang($_POST["Id"], $_POST["Selected"]);
        echo json_encode(["result" => true]);
    } else {
        echo json_encode(["result" => false]);
    }
?>