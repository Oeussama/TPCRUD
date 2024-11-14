<?php
session_start();
include('connection/connection.php');

if (isset($_POST['edit'])) {
    
    if (!empty($_POST['cin']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['ville']) && !empty($_POST['situation']) && !empty($_POST['telephone'])) {
        $idEtudiant = $_SESSION['idEtu'];
        $cin = $_POST['cin'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $ville = $_POST['ville'];
        $situation = $_POST['situation'];

        $updateQuery = $connnection->prepare('UPDATE etudiant SET cin=:cin,nom=:nom,prenom=:prenom,Telephone=:tele,email=:email
        ,ville=:ville,situation=:situation WHERE id_etudiant=:idEtudiant');
       $isok = $updateQuery->execute(array(
            ':cin' => $cin,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':tele' => $telephone,
            ':email' =>$email,
            ':ville' => $ville,
            ':situation' => $situation,
            ':idEtudiant' => $idEtudiant
        ));

        if ($isok) {
            $_SESSION['success']="l'etudiant à été modifier avec succès";
            header('Location:listOfStudent.php');
        }else{
            $_SESSION['error']="l'etudiant n'a pas été modifier";
            header('Location:listOfStudent.php');
        }
    } else {
        $_SESSION['error'] = "tous les champs sont obligatoire";
        header('location:index.php');
    }
}
