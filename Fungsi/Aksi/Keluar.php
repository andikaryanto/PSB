<?php
    unset($_SESSION['pengguna']);
    header("Location: {$url}Pages/admin/index.php");