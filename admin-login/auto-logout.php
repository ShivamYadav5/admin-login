<?php
session_start();
if (isset($_SESSION['LAST_ACTIVE_TIME'])){
    if (time() - $_SESSION['LAST_ACTIVE_TIME'] > 5) { //subtract new timestamp from the old one
        unset($_SESSION['username'], $_SESSION['password'], $_SESSION['LAST_ACTIVE_TIME']);
        $_SESSION['loggedin'] = false;
        header("Location: logout.php"); //redirect to login-page.
        die();
    } 
}
$_SESSION['LAST_ACTIVE_TIME'] = time();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:logout.php");
    die();
}
?>