<?php
session_start();
include "fragments/header.php";
include_once('autoloader.php');
$sectionRepository= new RepositorySection();
$sections = $sectionRepository->findAll();
$usersRepository = new RepositoryUsers();
$currentUser = $usersRepository->findByEmail($_SESSION['email']);
?>

<div class="container my-4">
    <div class="row">
        <div class="col">
            <table id="datatable" class="table table-striped table-bordered table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Designation</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sections as $section ): ?>
                        <tr>
                            <td><?= $section->id ?></td>
                            <td><?= $section->designation ?></td>
                            <td><?= $section->description?></td>
                            <td><?php echo $currentUser ?></td>
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