<?php
session_start();
include "autoloader.php";
$rep=new RepositoryUsers("users");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    var_dump($email);
   
    if ( empty($email)) {
        $_SESSION['error'] = "Veuillez remplir tous les champs";
        header("Location: register.php");
        exit();
    }

    

    
    $stmt=$rep->findByEmail($_POST['email']);
    echo($_POST['email']);
    var_dump($stmt);
    if ($stmt===false) {
        $_SESSION['error'] = "Cet email n'existe pas";
        header("Location: register.php");
        exit();
    }

    
    
    
    $_SESSION['success'] = "connexion réussie ! Vous pouvez maintenant vous connecter.";
    header("Location: page.php");
    exit();
    
} 