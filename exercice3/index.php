<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 7, Exercice 3 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- création d'un formulaire avec les attributs method et action. Dan le premier, on spécifie la méthode get
        qui, comme on l'a vu précèdement, nous permet de récupérer les valeurs directement dans l'adresse url.
        L'action spécifie dans quel page on affiche le résultat-->
        <form id="centered" method="get" action="user.php">
               <h1>Exercice 3</h1>
               <label for="name">Votre nom : </label>
               <input type="text" name="name" placeholder="Votre nom"/>
               <br/>
               <br/>
               <label for="lastName">Votre prénom : </label>
               <input type="text" name="lastName" placeholder="Votre prénom"/>
               <br/>
               <br/>
               <!-- Pour récupérer les informations du formulaire, on utilise un input de type submit-->
               <input id="validate" type="submit" value="Valider"/>
        </form>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>