<?php
include('autoloader.php');
$db = ConnexionDB::getInstance();
$rep= new RepositoryEtudiant("etudiants");
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
}
$etudiant=$rep->findById($id);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail etudiant</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>


<body  >
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Date de Naissance</th>


            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row"><?= $etudiant->id ?></th>
                <th scope="row"><?= $etudiant->name ?></th>
                <th scope="row"><?= $etudiant->dateDeNaissance ?></th>

            </tr>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>