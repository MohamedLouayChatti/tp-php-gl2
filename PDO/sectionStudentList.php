<?php
include('autoloader.php');

$sectionRepository= new RepositorySection();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sectionId'])){
    $etudiants = $sectionRepository->findStudents($_POST['sectionId']);
}else {
    header("Location: Sections.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des etudiants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>



<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Section</th>
            <th scope="col">Date de Naissance</th>
            <th scope="col">Image</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <th scope="row"><?= $etudiant->id ?></th>
                <th scope="row"><?= $etudiant->name ?></th>
                <th scope="row"><?= $etudiant->section ?></th>
                <th scope="row"><?= $etudiant->dateDeNaissance ?></th>
                <th scope="row">
                    <img src=<?= $etudiant->imageURL ?> class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;"/>
                </th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>