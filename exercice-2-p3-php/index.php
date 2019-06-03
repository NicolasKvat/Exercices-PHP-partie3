<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 2 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 2</h1>
          <h4 class="text-white m-4 text-center">Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas supérieure à 20 :</h4>
        </div>
      </header>
      <p class="text-center">
        <?php
          $nbre1 = 0;
          $nbre2 = 2;
          while ($nbre1 <= 20) {
            $nbre1 = $nbre1 * $nbre2;
            echo $nbre1 . ' ';
            $nbre1++;
          }
        ?>
      </p>
    </div>
  </body>
</html>
