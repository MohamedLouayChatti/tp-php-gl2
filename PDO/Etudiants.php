<?php
include "fragments/header.php";
include('autoloader.php');
$etudiantRepository= new RepositoryEtudiant();
$etudiants = $etudiantRepository->findAll();
$usersRepository = new RepositoryUsers();
$currentUser = $usersRepository->findByEmail($_SESSION['email']);
$role = $currentUser->role;
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
                            <td><?= $etudiant->id ?></td>
                            <td><img src=<?= $etudiant->imageURL ?> class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;"/></td>
                            <td><?= $etudiant->name ?></td>
                            <td><?= $etudiant->dateDeNaissance ?></td>
                            <td><?= $etudiant->section ?></td>
                            <td>
                                <form action="studentDetails.php" method="post" class="d-inline">
                                <input type="hidden" name="studentId" value="<?= $etudiant->id ?>">
                                    <button type="submit" class="btn btn-link p-0 text-light btn-lg">
                                        <i class="bi bi-info-circle fs-3"></i>
                                    </button>
                                </form>

                                <?php if ($role === 'admin'): ?>
                                    <form action="editStudent.php" method="post" class="d-inline">
                                        <input type="hidden" name="studentId" value="<?= $etudiant->id ?>">
                                        <button type="submit" class="btn btn-link p-0 text-light btn-lg">
                                            <i class="bi bi-pencil-square fs-3"></i>
                                        </button>
                                     </form>

                                     <form action="deleteStudent.php" method="post" class="d-inline">
                                        <input type="hidden" name="studentId" value="<?= $etudiant->id ?>">
                                        <button type="submit" class="btn btn-link p-0 text-light btn-lg">
                                            <i class="bi bi-eraser-fill fs-3"></i>
                                        </button>
                                     </form>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$showAddStudentButton = ($role === "admin");
include "fragments/footer.php";
?>