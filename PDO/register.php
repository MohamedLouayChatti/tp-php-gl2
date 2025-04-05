<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.css">
    
</head>

<body>
    <div class="bg-white p-4 rounded-3 shadow-lg w-100" style="max-width: 400px;">
        <h2 class="register-title">Inscription</h2>
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>
        <form action="process_register.php" method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name= "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
           
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-select" name="role" aria-label="Default select example">

                    <option value="admin" >Administrateur</option>
                    <option value="user" >User</option>

                </select>
            </div>
            <button type="submit" class="btn-register btn btn-primary w-100">S'inscrire</button>
        </form>
        <div class="login-link">
            <p>Déjà un compte ? <a href="index.php">Se connecter</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>