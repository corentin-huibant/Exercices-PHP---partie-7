<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 7, Exercice 3 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
            <h1>Exercice 3</h1>
            <?php
            //on vérifie simplement que l'utilisateur a bien rempli le formulaire. Si ce n'est pas le cas...
                if(empty($_GET['name']) && empty($_GET['lastName'])) {
            ?>
            <!-- on affiche un message d'erreur : -->
                <p>Nous n'avons pas pu récupérer vos informations</p>
            <?php
            //sinon, isset vérifie la présence du paramètre dans l'url...
                }else{
            ?>
            <!-- nous récupérons les paramètres de l'url en utilisant le tableau associatif spécifique $_GET qui stocke les valeurs demandées -->
                <p>Vous vous appelez <?php echo $_GET['name'] . ', ' . $_GET['lastName']; ?></p>
            <?php
                }
            ?>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>