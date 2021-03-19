<?php
include('../../connexion.php');

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateNaissance = $_POST['date_naissance'];
    $cne = $_POST['cne'];
    $cin = $_POST['cin'];
    $genre = $_POST['genre'];
    $groupe = $_POST['groupe'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$erreurnom = "";
$erreurprenom = "";
$erreurdateNaissance = "";
$erreurcne = "";
$erreurcin = "";
$erreurgenre = "";
$erreurgroupe = "";
$erreurusername = "";
$erreurpassword = "";

if (isset($_POST['Ajouter'])) {
    if (empty($nom)) {
        $erreurnom = "champ obligatoire";
    }
    if (empty($prenom)) {
        $erreurprenom = "champ obligatoire";
    }
    if (empty($dateNaissance)) {
        $erreurdateNaissance = "champ obligatoire";
    }
    if (empty($cne)) {
        $erreurcne = "champ obligatoire";
    }
    if (empty($cin)) {
        $erreurcin = "champ obligatoire";
    }
    if (empty($genre)) {
        $erreurcne = "champ obligatoire";
    }
    if (empty($groupe)) {
        $erreurgroupe = "champ obligatoire";
    }
    if (empty($email)) {
        $erreuremail = "champ obligatoire";
    }
    if (empty($password)) {
        $erreurpassword = "champ obligatoire";
    }
    if ($nom != "" && $prenom != "" && $dateNaissance != "" && $cne != "" && $cin != "" && $genre != "" && $groupe != "" && $email != "" && $password != "") {
        $query1 = "INSERT INTO `compte`(`role`, `email`, `passwd`,`Status`) VALUES ('2','$email','$password','ETUDIANT')";
        $query2 = "SELECT ID FROM compte ORDER BY ID DESC LIMIT 1";
        $result_compte1 = mysqli_query($connect, $query1);
        $result_compte2 = mysqli_query($connect, $query2);
        $row = $result_compte2->fetch_assoc();
        $id_compte = $row['ID'];
        // echo 'Nom : ' . $nom . ' prenom :  ' . $prenom . ' date :  ' . $dateNaissance . ' cne :  ' . $cne . ' cin : ' . $cin . ' genre :  ' . $genre . ' groupe :  ' . $groupe . ' email :  ' . $email . ' password :  ' . $password;
        // echo 'Nom : ' . $id_compte;
        // $query3 = "INSERT INTO `etudiant`(`nom`, `prenom`, `date_naissance`, `CNE`,`CIN`,`genre`,`ID_grp`,`ID_compte`) VALUES ('$nom','$prenom','$dateNaissance','$cne','$cin', '$genre','$groupe','$id_compte')";
        mysqli_query($connect, $query3);
         header("location:../administrateur-etudiant.php");

    }
}
