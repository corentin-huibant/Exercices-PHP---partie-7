<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 7, Exercice 5 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
            <h1>Exercice 5</h1>
            <?php
            //on vérifie simplement que le user a bien rempli le formulaire. Si c'est le cas...
                if(isset($_POST['name']) && isset($_POST['lastName'])) {
            ?>
            <!-- on récupérer les paramètres de l'url en utilisant la méthode $_POST.
            Contrairement à la méthode GET, les informations ne transitent pas par l'adresse url.
            La méthode POST est la plus utilisée.-->
                <p>Vous vous appelez <?php echo $_POST['name'] . ', ' . $_POST['lastName']; ?></p>
            <?php
            //sinon...
                }else {
            ?>
            <!-- on affiche un message d'erreur : -->
                <p>Nous n'avons pas pu récupérer vos informations</p>
            <?php
                }
            ?>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>