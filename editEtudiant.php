<?php 
    session_start();
    include('connection/connection.php');
    if(isset($_GET['idEtudiant'])){
        $_SESSION['idEtu'] = $_GET['idEtudiant'];
        $queryEtudiant = $connnection->prepare('SELECT * FROM etudiant WHERE id_etudiant =:id');
        $queryEtudiant->bindValue(':id',$_GET['idEtudiant']);
        $queryEtudiant->execute();
        $resultat = $queryEtudiant->fetch();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Edit Etudiant</title>
</head>
<body class="bg-light">
        <div class="container mt-5 border">
                <div class="row">
                    <h1 class="text-center mt-3">Modifier L'etudiant</h1>
                    <div class="col-md-12">
                        <form action="edit.php" method="post">
                        <div class="mb-3">
                                    <label for="cin" class="form-label ">CIN</label>
                                    <input type="text" class="form-control" name="cin"  value="<?= $resultat['cin'];?>"> 
                                </div>
                                <div class="mb-3">
                                    <label for="nom" class="form-label">nom</label>
                                    <input type="text" class="form-control" name="nom" value="<?= $resultat['nom'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="prenom" class="form-label">prenom</label>
                                    <input type="text" class="form-control" name="prenom" value="<?= $resultat['prenom'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="telephone" class="form-label">telephone</label>
                                    <input type="text" class="form-control" name="telephone" value="<?= $resultat['Telephone'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input type="email" class="form-control" name="email" value="<?= $resultat['email'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="ville" class="form-label">ville</label>
                                    <input type="text" class="form-control" name="ville" value="<?= $resultat['ville'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="Situation" class="form-label">Situation</label>
                                    <select name="situation" class="form-select">
                                        <option value="">--Select Situation--</option>
                                        <option value="Etudiant" <?= $resultat['situation'] == 'Etudiant' ? 'selected' : '' ?>>Etudiant</option>
                                        <option value="Prospet" <?= $resultat['situation'] == 'Prospet' ? 'selected' : '' ?>>Prospet</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mb-5" name="edit">Edit</button>
                        </form>
                    </div>
                </div>
        </div>
</body>
</html>