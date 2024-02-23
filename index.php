

<?php

session_start();

include_once 'class/Personnage.php';
include_once 'Class/Sangoku.php';
include_once 'Class/Vegeta.php';
include_once 'Class/Broly.php';
include_once 'Class/Bojack.php';

  include 'views/selection.php';

        if (isset($_SESSION) && !empty($_SESSION)){

          if ($_SESSION['player1']['class'] == "Sangoku"){
              $player1 = new Sangoku();
              $player1->setLife($_SESSION['player1']['life']);
              $player1->setAttak($_SESSION['player1']['life']);
              $player1->setdef($_SESSION['player1']['def']);
          }
          if ($_SESSION['player1']['class'] == "Vegeta"){
              $player1 = new Vegeta();
              $player1->setLife($_SESSION['player1']['life']);
              $player1->setAttak($_SESSION['player1']['life']);
              $player1->setdef($_SESSION['player1']['def']);
          }
          if ($_SESSION['player1']['class'] == "Broly"){
              $player1 = new Broly();
              $player1->setLife($_SESSION['player1']['life']);
              $player1->setAttak($_SESSION['player1']['life']);
              $player1->setdef($_SESSION['player1']['def']);
        }
          if ($_SESSION['player1']['class'] == "Bojack"){
            $player1 = new Bojack();
            $player1->setLife($_SESSION['player1']['life']);
            $player1->setAttak($_SESSION['player1']['life']);
            $player1->setdef($_SESSION['player1']['def']);
        }

        if ($_SESSION['player2']['class'] == "Sangoku"){
            $player2 = new Sangoku();
            $player2->setLife($_SESSION['player2']['life']);
            $player2->setAttak($_SESSION['player2']['life']);
            $player2->setdef($_SESSION['player2']['def']);
      }
      if ($_SESSION['player2']['class'] == "Vegeta"){
          $player2= new Vegeta();
          $player2->setLife($_SESSION['player2']['life']);
          $player2->setAttak($_SESSION['player2']['life']);
          $player2->setdef($_SESSION['player2']['def']);
      }
      if ($_SESSION['player2']['class'] == "Broly"){
        $player2 = new Broly();
        $player2->setLife($_SESSION['player2']['life']);
        $player2->setAttak($_SESSION['player2']['life']);
        $player2->setdef($_SESSION['player2']['def']);
      }
      if ($_SESSION['player2']['class'] == "Bojack"){
      $player2 = new Bojack();
      $player2->setLife($_SESSION['player2']['life']);
      $player2->setAttak($_SESSION['player2']['life']);
      $player2->setdef($_SESSION['player2']['def']);
      }

        include_once 'views/combat.php';
    }
    
      if(isset($_POST['destroySession'])){
        session_destroy();
        header("Location: index.php");
   }

  ?>
  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
  </head>
  <body>
    
  </body>
  </html>
  

