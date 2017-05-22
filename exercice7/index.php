<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 7, Exercice 7 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            if(isset($_POST['name']) && isset($_POST['lastName']) && isset($_FILES['download'])) {
        ?>
            <div id="centered">
                <h2>Vos informations</h2>
                <p> Vous êtes <?php echo $_POST['choice']; ?> </p>
                <p> Votre nom : <?php echo strip_tags(trim($_POST['name'])); ?> </p>
                <p> Votre prénom : <?php echo strip_tags(trim($_POST['lastName'])); ?> </p>
                <?php
                //la fonction pathindo renvoie un tableau qui comprend aussi l'extension du fichier dans $infosfichier['extension']
                $filesInformations = pathinfo($_FILES['download']);
                //je stocke cette extension dans une nouvelle variable $filesExtensions
                $filesExtensions = $filesInformations['extension'];
                ?>
                <!-- la variable $_FILES permet de vérifier un champ d'envoi de fichier sous la forme d'un tabeau.
                Si on rajoute certains. Si on ajoute certaines informations, on peut en ressortir le nom, le type, la taille, etc. -->
                <!-- le paramètre filename permet de renvoyer seulement le nom du fichier-->
                <p> Le nom de votre fichier : <?php echo $filesInformations['filename']; ?> </p>
                <!-- le paramètre filename permet de renvoyer seulement l'extension du fichier-->
                <p> Le format de votre fichier : .<?php echo $filesExtensions; ?> </p>
            </div>
        <?php
            }else{
        ?>
            <!-- création d'un formulaire avec les attributs method et action. Dan le premier, on spécifie la méthode get
            qui, comme on l'a vu précèdement, nous permet de récupérer les valeurs directement dans l'adresse url.
            L'action spécifie dans quel page on affiche le résultat-->
            <form id="centered" method="POST" action="index.php" enctype="multipart/form-data">
                <h1>Exercice 7</h1>
                <select name="choice" size="1">
                     <option value="un homme">un homme
                     <option value="une femme">une femme
                </select>
                <br/>
                <br/>
                <label for="name">Votre nom : </label><input type="text" name="name" value="" placeholder="Votre nom"/>
                <br/>
                <br/>
                <label for="lastName">Votre prénom : </label><input type="text" name="lastName" value="" placeholder="Votre prénom"/>
                <br/>
                <br/>
                <label for="lastName">Votre fichier : </label><input type="file" name="download">
                <br/>
                <br/>
                <!-- Pour récupérer les informations du formulaire, on utilise un input de type submit-->
                <input id="validate" name="validate" type="submit" value="Valider"/>
            </form>
        <?php
            }
        ?>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>