<?php
include('autoloader.php');

$sectionRepository= new RepositorySection("sections");
$sections = $sectionRepository->findAll();


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
            <th scope="col">Designation</th>
            <th scope="col">Description</th>
            <th scope="col"> </th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($sections as $section ): ?>
            <tr>
                <th scope="row"><?= $section->id ?></th>
                <th scope="row"><?= $section->designation ?></th>
                <th scope="row"><?= $section->description?></th>
                <th scope="row">
                    <a href="sectionStudentList.php?sectionDes=<?= $section->designation ?>" ><i class="bi bi-list-ol"></i></a>
                </th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>