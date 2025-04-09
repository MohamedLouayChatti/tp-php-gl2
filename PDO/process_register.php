<?php
session_start();
include "autoloader.php";
$rep=new RepositoryUsers("users");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    $role=$_POST['role'];

    // Validation des données
    if (empty($name) || empty($email) || empty($role)) {
        $_SESSION['error'] = "Veuillez remplir tous les champs";
        header("Location: register.php");
        exit();
    }

    

    
    $stmt=$rep->findByEmail($_POST['email']);
    echo($_POST['email']);
    var_dump($stmt);
    if ($stmt!==false) {
        $_SESSION['error'] = "Cet email est déjà utilisé";
        header("Location: register.php");
        exit();
    }

    
    
    $newUser = $rep->create([
        'name' => $name,
        'email' => $email,
        'role' => $role
    ]);
    
    $_SESSION['success'] = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
    header("Location: index.php");
    exit();
    
} 