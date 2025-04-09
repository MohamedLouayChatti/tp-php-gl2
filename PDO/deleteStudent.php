<?php
include('autoloader.php');

$etudiantsRepository= new RepositoryEtudiant();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm']) && isset($_POST['studentId'])) {
        $etudiantsRepository->delete($_POST['studentId']);
        header("Location: Etudiants.php");
        exit();
    } elseif (isset($_POST['cancel'])) {
        header("Location: Etudiants.php");
        exit();
    } elseif (isset($_POST['studentId'])) {
        $etudiant = $etudiantsRepository->findById($_POST['studentId']);
    } else {
        header("Location: Etudiants.php");
        exit();
    }
} else {
    header("Location: Etudiants.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Confirmation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Styling/register.css">
</head>

<body>
    <div class="bg-white p-4 rounded-3 shadow-lg w-100" style="max-width: 400px;">
        <h2 class="register-title">Are you sure you want to delete <?=$etudiant->name?>?</h2>
        <form action="deleteStudent.php"method="POST">
            <input type="hidden" name="studentId" value="<?= $etudiant->id ?>">
            <div class="form-group d-flex">
                <button type="submit" name="confirm" class="form-control btn btn-danger me-2">Yes, Delete</button>
                <button type="submit" name="cancel" class="form-control btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>