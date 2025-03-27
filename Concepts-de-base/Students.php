<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prenom=$_POST["firstName"];
        $nom=$_POST["lastName"];
        if (isset($_POST['Grades']) && is_array($_POST['Grades'])) {
            $grades = array_filter($_POST['Grades'], fn($note) => $note !== "");
    }
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
    <div class="card">
        <div class="card-header fw-bold"><?php echo ($nom); ?></div>
        <ul class="list-group" id="gradesList">
            <script src="student.js"></script>
            <script >
                let grades=<?php echo json_encode($grades); ?>;
                console.log(grades);
                displayGrades(grades);
            </script>
            
        </ul>
        <div class="alert alert-info m-0 text-center" id="averageDisplay">
            Votre moyenne est <span id="average">0</span>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html> 
