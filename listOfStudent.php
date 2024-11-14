<?php 
    session_start();
    include('connection/connection.php');
    $getEtudiant = $connnection->prepare('SELECT * FROM etudiant');
    $getEtudiant->execute();
    $resultEtudiant = $getEtudiant->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>List of students</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="true" href="index.php">Insert Student</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active">List of students</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <?php include('errorOrSuccessMsg.php'); ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CIN</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Ville</th>
                                    <th>Situation</th>
                                    <th>Date Enregistrement</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach($resultEtudiant as $data){
                            ?>
                                <tr>
                                    <td><?= $data['id_etudiant'] ?></td>
                                    <td><?= $data['cin'] ?></td>
                                    <td><?= $data['nom'] ?></td>
                                    <td><?= $data['prenom'] ?></td>
                                    <td><?= $data['Telephone'] ?></td>
                                    <td><?= $data['email'] ?></td>
                                    <td><?= $data['ville'] ?></td>
                                    <td><?= $data['situation'] ?></td>
                                    <td><?= $data['Date_enregistrement'] ?></td>
                                    <td>
                                        <a href="editEtudiant.php?idEtudiant=<?= $data['id_etudiant']?>" class="btn btn-warning">Edit</a>
                                        <a href="delete.php?idEtudiant=<?= $data['id_etudiant']?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php 
                             }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>