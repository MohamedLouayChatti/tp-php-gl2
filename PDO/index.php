<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Styling/register.css">
    
</head>
<body>
    <div class="bg-white p-4 rounded-3 shadow-lg w-100" style="max-width: 400px;">
        <h2 class="login-title">Connexion</h2>
        <?php
        session_start();
        if(isset($_SESSION['error'])) {
            echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>
        <form action="process_login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mail" name="email" required>
            </div>
            
            <button type="submit" class="btn-login btn btn-primary w-100">Se connecter</button>
        </form>
        <div class="login-link">
            <p>Pas encore de compte ? <a href="register.php">S'inscrire</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 