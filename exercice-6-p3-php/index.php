<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 6 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 6</h1>
          <h4 class="text-white m-4 text-center">En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</h4>
        </div>
      </header>
      <p class="text-center">
        <?php
          $nbre = 20;
          while ($nbre > 0) {
            echo $nbre . ' C\'est presque bon !' . '<br/>';
            $nbre--;
          }
          echo $nbre . ' Bravi Bravu !';
        ?>
      </p>
    </div>
  </body>
</html>
