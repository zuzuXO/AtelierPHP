<?php 
    session_start(); 
    $email =$_POST["email"];
    $password=$_POST["pwd"];
    if (isset($email) && isset($password)) {
        if ($email=='hamza@gmail.com' && $password=='123456'){
                $_SESSION['user']="hamza";
                header('location:home.php');
        }else {
                $_SESSION['errorMessage']="Veuiller verifier vos données d'authentification!";
                header('location:login.php');
            }
    }
?>