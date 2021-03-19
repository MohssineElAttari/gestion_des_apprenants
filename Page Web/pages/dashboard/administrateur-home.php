<?php
    session_start();
  if (isset($_GET['deconnect'])){
        unset($_SESSION['idadmin']);
        header("Location: ../Se_connecter.php");
    } 
    if (!empty($_SESSION['idadmin'])) {


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrateur</title>
    <link rel="stylesheet" href="../../css/index.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="/Page Web/scripts/script.js"></script>

    <link rel="icon" href="../images/icons/baby-car.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- header -->
    <header>

        <nav>
            <ul>
                <li class="logo">Schol<span>ariz</span></li>
                <li class="nav_links"><a href="../../../index.html">Accueil</a></li>
                <li class="nav_links"><a href="../Notre_Ecole.html">Notre Ecole</a></li>
                <li class="nav_links"><a href="../Contactez_Nous.html">Contactez Nous</a></li>
                <li class="nav_links li_btn"><a href="../Se_connecter.php">Se connecter</a></li>
                <li class="btn"><a href="#"><i class="fa fa-bars"></i></a></li>
            </ul>
        </nav>
    </header>
    <!-- end header -->
    <!-- main -->
    <!-- end main -->

    <div class="container">
        <!-- <div class="sidbar-top">
            <p>Administrateur</p>
            <a href="#">Déconnexion</a>
        </div>
        <div class="sidbar-left">

        </div>
        <div class="main"></div> -->

        <div class="sidebar">
            <a class="menu" href="administrateur-home.php">home</a>
            <a class="menu" href="#">Gestion des groupes</a>
            <a class="menu" href="#">Gestion des comptes</a>
            <a class="menu" href="administrateur-etudiant.php">Gestion des Etudiants</a>
        </div>
        <div class="right_centent">
            <div class="hori_sidebar">
                <p>administrateur</p>
                <a href="../../pages/dashboard/administrateur-home.php?deconnect">Deconnexion</a>
            </div>
            <div class="centnet">
                <div class="circle">

                    <div class="circle-info">
                        <div class="count">
                            3
                        </div>
                        <div class="nom">
                            Groupe
                        </div>
                    </div>
                    <div class="circle-info">
                        <div class="count">
                            100
                        </div>
                        <div class="nom">
                            Etudiant
                        </div>
                    </div>
                    <div class="circle-info">
                        <div class="count">
                            2
                        </div>
                        <div class="nom">
                            compte
                        </div>
                    </div>
                    <div class="circle-info">
                        <div class="count">
                            6
                        </div>
                        <div class="nom">
                            Groupe
                        </div>
                    </div>
                </div>
                <div class="statistic">
                    <div class="chart-bar">
                        <img src="../../pics/statistic/1.png" alt="chart graphic">
                    </div>
                    <div class="line-bar">
                        <img src="../../pics/statistic/2.png" alt="line bar">
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- footer  -->
    <footer>
        <div class="footer ">
            <div class="row ">
                <ul>
                    <li><a href="# ">Contact us</a></li>
                    <li><a href="# ">Our Services</a></li>
                    <li><a href="# ">Privacy Policy</a></li>
                    <li><a href="# ">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="row ">
                Copyright © 2021 Scholariz - All rights reserved
            </div>
        </div>
    </footer>

    <!-- end footer -->
</body>

    
</html>
<?php }else {
        header("Location: ../Se_connecter.php");
    } ?>