<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie7_Exo6</title>
</head>
<body>
  <?php
  /*Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en POST, le formulaire ne doit pas être affiché.
  Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.*/
  ?>
  <?php
  if (empty($_POST['nom']) || empty($_POST['prenom'])){
    ?>
    <form  action="index.php" method="get">
      <!--action = "index.php" nous permet de rediriger la page vers index.php. La methode POST nous permet de l'afficher sur la barre de recherche.  -->
      <p><label for="civilite">Civilité :</label>
        <select class="" name="civilite">
          <option value="monsieur">Monsieur</option>
          <option value="madame">Madame</option>
        </select>  </p>
        <p><label for="nom">Nom :</label>
          <input type="text" name="nom" value=""></p>
          <p><label for="prenom">Prénom :</label>
            <input type="text" name="prenom" value=""></p>
            <button type="submit" name="button">Submit</button>
          </form>
          <?php
        }else{
          echo $_POST['civilite'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'];
        }
        ?>
      </body>
      </html>
