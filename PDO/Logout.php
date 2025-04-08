
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Styling/register.css">
    
</head>

<body>
    <div class="bg-white p-4 rounded-3 shadow-lg w-100" style="max-width: 400px;">
        <h2 class="register-title">Are you sure you want to logout?</h2>
        <?php
        session_start();

        if (isset($_POST['confirm'])) {

            session_destroy();
            header("Location: Login.php");
            exit();
        } elseif (isset($_POST['cancel'])) {

            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
        ?>
        <form action="process_register.php" method="POST">
            <div class="form-group">
              <button type="submit" name="confirm" class="form-control btn btn-danger">Yes, Logout</button>
              <button type="submit" name="cancel" class="form-control btn btn-secondary">Cancel</button>
            </div>
        
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>