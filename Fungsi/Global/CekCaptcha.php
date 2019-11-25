<?php

if(isset($_POST['capt'])){
    if($_SESSION['Captcha'] == $_POST['capt']){
        echo 1;
        exit();
    }
}
echo 0;