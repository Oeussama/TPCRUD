<?php 
session_start();
    include('connection/connection.php');

if(isset($_GET['idEtudiant'])){
    $idEtudiant = $_GET['idEtudiant'];

    $queryDelete = $connnection->prepare('DELETE FROM etudiant WHERE id_etudiant =:id');
    $queryDelete->bindValue(':id',$idEtudiant);
    $ok = $queryDelete->execute();

    if($ok){
        $_SESSION['success']="l'etudiant à éte supprimer avec succès";
        header('location:listOfStudent.php');
    }else{
        $_SESSION['error']="l'etudiant n'a pas éte supprimer";
        header('location:listOfStudent.php');
    }
}   