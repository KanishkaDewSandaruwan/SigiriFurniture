<?php 
    if (session_id() == '') {
        session_start();
    }

    if(!isset($_SESSION['customer'])){
        header("Location: admin/production/login.php");
    }
?>