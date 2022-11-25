<?php
session_start();
unset($_SESSION['LAST_ACTIVE_TIME']);
unset($_SESSION['loggedin']);
header("location:admin-login.php");
die();
?>