<?php
include('ConnexionDB.php');
$db = ConnexionDB::getInstance();

$query = "SELECT * FROM etudiants";
$reponse = $db->query($query);
$etudiants = $reponse->fetchAll(PDO::FETCH_OBJ);


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
            <th scope="col">Date de Naissance</th>
            <th scope="col"> </th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <th scope="row"><?= $etudiant->id ?></th>
                <th scope="row"><?= $etudiant->name ?></th>
                <th scope="row"><?= $etudiant->dateDeNaissance ?></th>
                <th scope="row">
                    <a href="détailEtudiant.php?id=<?= $etudiant->id ?>"><i class="bi bi-info-circle"></i></a>
                </th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>