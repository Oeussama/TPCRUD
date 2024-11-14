<?php 
    session_start();
    include('connection/connection.php');

    if(isset($_POST['envoyer'])){

            if(!empty($_POST['cin']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['ville']) && !empty($_POST['situation']) && !empty($_POST['telephone']) ){
               
                $cin = $_POST['cin'];
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $telephone = $_POST['telephone'];
                $email = $_POST['email'];
                $ville = $_POST['ville'];
                $situation = $_POST['situation'];

                $insertStudent = $connnection->prepare('INSERT INTO etudiant (cin,nom,prenom,Telephone,email,ville,situation)
                VALUES(:cin,:nom,:prenom,:telephone,:email,:ville,:situation)');
                $data = [
                    ':cin' => $cin,
                    ':nom' => $nom,
                    ':prenom' => $prenom,
                    ':telephone' => $telephone,
                    ':email' => $email,
                    ':ville' => $ville,
                    ':situation' => $situation
                ];
               $isok = $insertStudent->execute($data);

                if($isok){
                    $_SESSION['success'] = "l'enregistrement à été ajouter avec succès";
                    header('Location:index.php');
                }else{
                    $_SESSION['error'] = "l'enregistrement n'a pas été ajouter";
                    header('Location:index.php');
                }

            }else{
                $_SESSION['error'] = "tous les champs sont obligatoire";
                header('location:index.php');
            }
    }