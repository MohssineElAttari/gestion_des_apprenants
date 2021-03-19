<?php
include('../connexion.php');

session_start();
if (isset($_GET['deconnect'])) {
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
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <title>gestion etudiant</title>
        <link rel="stylesheet" href="../../css/index.css">
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

            <div class="sidebar">
                <a class="menu" href="administrateur-home.php">home</a>
                <a class="menu" href="#">Gestion des groupes</a>
                <a class="menu" href="administrateur-etudiant.php">Gestion des Etudiants</a>
            </div>
            <div class="right_centent">
                <div class="hori_sidebar">
                    <p>administrateur</p>
                    <a href="../../pages/Se_connecter.php">Deconextion</a>
                </div>
                <div class="centnet">
                    <div class="gestion">
                        <div class="add">
                            <a href="#"><img src="../../pics/icons/plus.png" alt=""></a>
                        </div>
                        <div class="table-etudiant">
                            <table>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</td>
                                    <th>Prenom</td>
                                    <th id="notShow">Date de naissance</th>
                                    <th id="notShow">CNE</th>
                                    <th id="notShow">CIN</th>
                                    <th id="notShow">genre</th>
                                    <th id="notShow">Groupe</th>
                                    <th id="notShow">Email</th>
                                    <th id="notShow">Status</th>
                                    <th class="operation">Mod</th>
                                    <th class="operation">Sup</th>
                                </tr>
                                <?php


                                // $query = "SELECT * FROM `etudiant`";
                                // $result = mysqli_query($connect, $query);
                                // while ($row = $result->fetch_assoc()) {
                                //      $id=$row['ID_etudiant'];
                                //      $nom=$row['nom'];
                                //      $prenom=$row['prenom'];
                                //      $dateDeNaissance=$row["nom"];
                                //      $cNE=$row["CNE"];
                                //      $cIN=$row["CIN"];
                                //      $genre=$row["genre"];
                                //      $Groupe=$row["ID_grp"];
                                //      $Username=$row["ID_compte"];


                                $query = "SELECT e.ID_etudiant , e.nom,e.prenom,e.date_naissance,e.CNE,e.CIN,e.genre,g.groupe_name,c.email,c.Status FROM `etudiant` as e INNER join `groupe` as g on (e.ID_grp=g.ID_groupe) INNER JOIN `compte` as c ON (e.ID_compte=c.ID)
                            ";

                                $result = mysqli_query($connect, $query);
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['ID_etudiant'];
                                    $nom = $row['nom'];
                                    $prenom = $row['prenom'];
                                    $dateDeNaissance = $row["date_naissance"];
                                    $cNE = $row["CNE"];
                                    $cIN = $row["CIN"];
                                    $genre = $row["genre"];
                                    $Groupe = $row["groupe_name"];
                                    $email = $row["email"];
                                    $status = $row["Status"];

                                    echo '<tr><td>' . $id . '</td><td>' . $nom . '</td><td>' . $prenom . '</td><td id="notShow">' .  $dateDeNaissance . '</td><td id="notShow">' . $cNE . '</td><td id="notShow">' . $cIN . '</td><td id="notShow">' . $genre . '</td><td id="notShow">' . $Groupe . '</td><td id="notShow">' .  $email . '</td><td id="notShow">' .  $status . '</td><td><a href="#"><img src="../../pics/icons/Icon awesome-edit.png" alt=""></a></td>
                                <td><a href="service/deleteetudiant.php?del_id=' . $id . '"><img src="../../pics/icons/Icon material-delete.png" alt=""></a></td></tr>';


                                    // echo '<tr><td>' . $row["ID_etudiant"] . '</td><td>' . $row["nom"] . '</td><td>' . $row["prenom"] . '</td><td>' . $row["date_naissance"] . '</td><td>' . $row["CNE"] . '</td><td>' . $row["CIN"] . '</td><td>' . $row["genre"] . '</td><td>' . $row["ID_grp"] . '</td><td>' . $row["ID_compte"] . '</td><td><img src="/Page Web/pics/icons/Icon awesome-edit.png" alt=""></td>
                                    // <td><img src="/Page Web/pics/icons/Icon material-delete.png" alt=""></td></tr>';
                                }
                                ?>
                            </table>
                        </div>
                        <div class="popup hidden">
                            <div class="addEtudiant">
                                <div class="addEtudiant-child">
                                    <span class="close">X</span>
                                    <form action="service/createetudiant.php" method="POST">
                                        <h2 class="title">
                                            Ajouter un etudiant
                                        </h2>
                                        <div class="inputs">
                                            <input type="text" class="input_style" id="nom" name="nom" placeholder="Entrer le nom">
                                            <label for="nom" class="controler">champ obligatoire</label>
                                        </div>
                                        <div class="inputs">
                                            <input type="text" class="input_style" id="prenom" name="prenom" placeholder="Entrer le prénom">
                                            <label for="prenom" class="controler">champ obligatoire</label>
                                        </div>
                                        <div class="inputs">
                                            <input type="date" class="input_style" id="date_naissance" name="date_naissance" placeholder="Entrer la date_naissance">
                                            <label for="date_naissance" class="controler">champ obligatoire</label>
                                        </div>
                                        <div class="inputs">
                                            <input type="text" class="input_style" id="cne" name="cne" placeholder="Entrer CNE">
                                            <label for="cne" class="controler">champ obligatoire</label>
                                        </div>
                                        <div class="inputs">
                                            <input type="text" class="input_style" id="cin" name="cin" placeholder="Entrer cin">
                                            <label for="cin" class="controler">champ obligatoire</label>
                                        </div>
                                        <div class="inputs">
                                            <select name="genre" class="select" id="genre">
                                                <option value="">choisier le genre</option>
                                                <option value="male">Male</option>
                                                <option value="female">famale</option>
                                            </select>
                                            <label for="genre" class="controler">champ obligatoire</label>
                                        </div>
                                        <div class="inputs">
                                            <select name="groupe" class="select" id="groupe">
                                                <option value="">choisier le groupe</option>
                                                <?php
                                                $query = "SELECT * FROM `groupe`";

                                                $result = mysqli_query($connect, $query);

                                                while ($row = mysqli_fetch_array($result)) { ?>
                                                    <option value="<?php echo $row['ID_groupe']; ?>"><?php echo $row['groupe_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="groupe" class="controler">champ obligatoire</label>
                                        </div>

                                        <div class="inputs">
                                            <input type="email" class="input_style" id="email" name="email" placeholder="Entrer email">
                                            <label for="email" class="controler">champ obligatoire</label>
                                        </div>
                                        <div class="inputs">
                                            <input type="password" class="input_style" id="password" name="password" placeholder="Entrer password">
                                            <label for="password" class="controler">champ obligatoire</label>
                                        </div>
                                        <input type="submit" class="btn" value="Ajouter" name="Ajouter">
                                    </form>
                                </div>
                            </div>
                        </div>
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
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="../../scripts/script.js"></script>
        <!-- end footer -->
    </body>

    </html>
<?php } else {
    header("Location: ../Se_connecter.php");
} ?>