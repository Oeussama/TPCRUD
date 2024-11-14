<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>TP CRUD</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true">Insert Student</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="listOfStudent.php">List of students</a>
                            </li>
                        </ul>
                    </div>
                    <?php include('errorOrSuccessMsg.php'); ?>
                        <div class="container">
                            <form action="insertEtudiant.php" method="post">
                                <div class="mb-3">
                                    <label for="cin" class="form-label ">CIN</label>
                                    <input type="text" class="form-control" name="cin">
                                </div>
                                <div class="mb-3">
                                    <label for="nom" class="form-label">nom</label>
                                    <input type="text" class="form-control" name="nom">
                                </div>
                                <div class="mb-3">
                                    <label for="prenom" class="form-label">prenom</label>
                                    <input type="text" class="form-control" name="prenom">
                                </div>
                                <div class="mb-3">
                                    <label for="telephone" class="form-label">telephone</label>
                                    <input type="text" class="form-control" name="telephone">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="ville" class="form-label">ville</label>
                                    <input type="text" class="form-control" name="ville">
                                </div>
                                <div class="mb-3">
                                    <label for="Situation" class="form-label">Situation</label>
                                    <select name="situation" class="form-select">
                                        <option value="">--Select Situation--</option>
                                        <option value="Etudiant">Etudiant</option>
                                        <option value="Prospet">Prospet</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mb-5" name="envoyer">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>