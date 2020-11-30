<?php

  session_start();

?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8" />

    <title>Traitement des données envoyées par formulaire</title>

  </head>

  <body>


  <!--le htmlspecialchars permet d'éviter les envoie de script -->
    <?php

      $prenom = htmlspecialchars($_POST["prenom"]);

      $nom = htmlspecialchars($_POST["nom"]);

      $_SESSION["prenom"] = $prenom;

      $_SESSION["nom"] = $nom;

      echo "Les données du formulaire ont été mémorisées.<br>";

      echo "<div><a href=\"lecture-session.php\">Cliquez sur ce lien pour vérifier.</a> </div>";

      echo "<div><a href=\"transmission_donnee_par_formulaire.php\">Cliquez sur ce lien pour vérifier.</a></div>";


    ?>

  </body>

</html>