<?php
//déclaration des 2 variables avec les valeur
$lastName = 'Douay';
$firstName = 'Murielle';
$age = 50;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 1 exo 2</title>
</head>

<body>

  <p>Nom :
    <?php
    //j'affiche avec echo la variable sur mon navigateur du Nom
    echo $lastName;
    ?>
  </p>


  <p>Prénom:
    <?php
      //j'affiche avec echo la variable du Prénom sur mon navigateur
    echo $firstName;
    ?>
  </p>

  <p>Age:
    <?php
      //j'affiche avec echo la variable de l'âge sur mon navigateur
    echo $age;
    ?>
  </p>

</body>
</html>
