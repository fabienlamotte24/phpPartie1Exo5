<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
      <?php
        $nothing = NULL;/*déclaration de la variable avec NULL*/
        settype($nothing, 'int');/*Définition de la variable en nombre entier*/
        echo $nothing;/*Affichage de la variable*/
        ?>
      <br />
      <?php
        $nothing = 561511;
        echo $nothing;
       ?>
    </p>
  </body>
</html>
