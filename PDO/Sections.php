<?php
include "fragments/header.php";
include_once('autoloader.php');
$sectionRepository= new RepositorySection();
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
                            <td>
                                <form action="sectionStudentList.php" method="post">
                                <input type="hidden" name="sectionId" value="<?= $section->id ?>">
                                    <button type="submit" class="btn btn-link p-0 text-light btn-lg">
                                        <i class="bi bi-list-ol fs-2"></i>
                                    </button>
                                </form>
                            </td>
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