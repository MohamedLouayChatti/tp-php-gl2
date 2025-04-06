<?php
include "fragments/header.php";
include('autoloader.php');
$etudiantRepository= new RepositoryEtudiant("etudiants");
$etudiants = $setudiantRepository->findAll();
?>

<div class="container my-4">
    <div class="row">
        <div class="col">
            <table id="datatable" class="table table-striped table-bordered table-dark">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>image</th>
                        <th>name</th>
                        <th>birthday</th>
                        <th>section</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etudiants as $etudiant ): ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include "fragments/footer.php";
?>