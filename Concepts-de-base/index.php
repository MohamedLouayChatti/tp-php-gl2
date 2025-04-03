<?php
require_once "class/Session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center mb-3">
                        <h2>
                            <?php
                                $visits = Session::getVisits();
                                if($visits == 1){
                                    echo "Bienvenu à notre plateforme!";
                                }else {
                                    echo " Merci pour votre fidélité, c’est votre {$visits}éme visite.";
                                }
                            ?>
                        </h2>
                    </div>

                    <div class="p-3">
                        <form method="post">
                            <button type="submit" name="reset" class="btn btn-primary">Restart Session</button>
                        </form>
                    </div>

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
                        Session::reset();
                    }
                    ?>

                    <div class="card shadow-sm" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Add A Student</h3>

                            <form action="Students.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" name="firstName" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" name="lastName" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row grades">
                                    <div class="mt-3 list-of-grades">
                                        <label for="Grade" class="form-label">Grades</label>
                                        <input type="number" name="Grades[]" class="form-control">
                                    </div>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-outline-secondary">Add A Grade</button>
                                    </div>

                                </div>




                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="grades.js"></script>
</body>

</html>