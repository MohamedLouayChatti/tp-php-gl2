<?php
include_once "class/Etudiant.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["firstName"];
    $nom = $_POST["lastName"];
    if (isset($_POST['Grades']) && is_array($_POST['Grades'])) {
        $grades = array_filter($_POST['Grades'], fn($note) => $note !== "");
    }

    $etudiant = new etudiant($prenom . " " . $nom, $grades);
    /* if (!empty($grades)) {
        echo "Notes reçues : " . implode(", ", $grades);
    } else {
        echo "Aucune note reçue.";
    }*/
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

        

    <div class="container mt-4">
        <div class="p-3 reset">
                                    <button  class="btn btn-primary ">Restart Session</button>
        </div>
        <?php
        if (isset($etudiant)) {
            $etudiant->afficherNotes();
        } else {
            echo "<div class='alert alert-warning'>Aucun étudiant n'a été ajouté.</div>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>