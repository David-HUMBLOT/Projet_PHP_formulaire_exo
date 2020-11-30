<!DOCTYPE html>
<!--remlise de session start pour recuperer les valeurs tableaux session-->
<?php

  session_start();

?>

<html>

  <head>
    <meta charset="UTF-8" />
    <title>Transission de données par un formulaire</title>
  </head>

  <body>

 

    <form name="MonFormulaire" method="post" action="traitement.php">
      <table>
          <tr>
              <td><label>Prénom</label></td>
              <td><input type="text" name="prenom" required id="prenom"></td>
          </tr>

          <tr>
              <td><label>Nom</label></td>
              <td><input type="text" name="nom" required id = "nom" ></td>
          </tr>

          <tr>
              <td><input type="submit" name="Nom" value="Envoyer" ></td>
              <td></td>
          </tr>
      </table>
    </form>

    <?php 


echo "<li><br>Ton prénom c'est ".$_SESSION["prenom"]."</li><br>";
echo "<li>Et ton nom c'est ".$_SESSION["nom"]."</li>";
?>
<p><strong>Voici les donnée en format json (quand la fonction json_encode() fonctionne) :</strong></p>  
<?php
echo json_encode ($_SESSION["nom"].$_SESSION["prenom"]);
    ?>

<p><strong>Test avec d'autre valeur dans un autre tableaux </strong></p>

<?php 

        $post_data = array(
          'item' => array(
            'item_type_id' => 1,
            'string_key' => 'AA',
            'string_value' => 'Hello',
            'string_extra' => 'App',
            'is_public' => 1,
          'is_public_for_contacts' => 0
          )
        );
        echo json_encode($post_data)."\n";
?>
  </body>
</html>