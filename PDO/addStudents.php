<?php
include('autoloader.php');

$etudiantsRepository= new RepositoryEtudiant();
$sectionRepository= new RepositorySection();
$sections = $sectionRepository->findAll();

$errorMessage = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {
        $name = $_POST['name'];
        $section = $_POST['section'];
        $birthday = $_POST['birthday'];

        $validSection = false;
        foreach($sections as $iterSection){
            if($section === $iterSection->designation){
                $validSection = true;
                break;
            }
        }
        if(!$validSection){
            $errorMessage = "Please enter a valid section abbreviation";
            $etudiant = (object)['name' => $name,'section' => $section, 'dateDeNaissance' => $birthday];
        }else{
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $imageTmpPath = $_FILES['image']['tmp_name'];
                $imageName = basename($_FILES['image']['name']);
                $targetDirectory = "img/";
                $targetFilePath = $targetDirectory . $imageName;
                move_uploaded_file($imageTmpPath, $targetFilePath);
                $newImagePath = $targetFilePath;
            } else {
                $newImagePath = "img/default.png";
            }

            $etudiantsRepository->create(['name' => $name,'section' => $section,'dateDeNaissance' => $birthday,'imageURL' => $newImagePath]);
            header("Location: Etudiants.php");
            exit();
        }
    } elseif (isset($_POST['cancel'])) {
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
    <title>Add student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Styling/register.css">
</head>

<body>
    <div class="bg-white p-4 rounded-3 shadow-lg w-100" style="max-width: 400px;">
        <h2 class="register-title">Add a new student</h2>
        <form action="addStudents.php" method="POST" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" required value="<?= isset($etudiant) ? htmlspecialchars($etudiant->name) : '' ?>">
            </div>

            <?php if ($errorMessage !== ""): ?>
                <div class="alert alert-danger"><?= $errorMessage ?></div>
            <?php endif; ?>
            <div class="form-group mb-3">
                <label for="section">Section</label>
                <input type="text" class="form-control" name="section" required>
            </div>

            <div class="form-group mb-3">
                <label for="birthday">Date de naissance</label>
                <input type="date" class="form-control" name="birthday" required value="<?= isset($etudiant) ? htmlspecialchars($etudiant->dateDeNaissance) : '' ?>">
            </div>

            <div class="form-group mb-4">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="form-group d-flex">
                <button type="submit" name="confirm" class="form-control btn btn-danger me-2">Add student</button>
                <a href="Etudiants.php" class="form-control btn btn-secondary">Cancel</a>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>