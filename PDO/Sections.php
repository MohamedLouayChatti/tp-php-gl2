<?php
include "fragments/header.php";
include('autoloader.php');
$sectionRepository= new RepositorySection("sections");
$sections = $sectionRepository->findAll();

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
                            <td><a href="sectionStudentList.php?sectionDes=<?= $section->designation ?>" ><i class="bi bi-list-ol"></i></a></td>
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