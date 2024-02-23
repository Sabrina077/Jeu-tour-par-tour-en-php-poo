    <form method="POST">
        <div class="joueur1">
            <h2>Joueur1</h2>
            <p>Perso : <?php echo $_SESSION['player1']['class'] ?></p>
            <p>Life : <?php echo $_SESSION['player1']['life'] ?> </p>
            <p>Attak : <?php echo $_SESSION['player1']['attak'] ?> </p>
            <p>Def : <?php echo $_SESSION['player1']['def'] ?> </p>
            <input type="submit" class="attakJoueur1" name="attakJoueur1" value="Attak">
            <input type="submit" class="capaSpeJoueur1" name="capaSpeJoueur1" value="Capacite Speciale">

        </div>
        <div class="joueur2">
            <h2>Joueur2</h2>
            <p>Perso : <?php echo $_SESSION['player2']['class'] ?></p>
            <p>Life : <?php echo $_SESSION['player2']['life'] ?> </p>
            <p>Attak : <?php echo $_SESSION['player2']['attak'] ?> </p>
            <p>Def : <?php echo $_SESSION['player2']['def'] ?> </p>
            <input type="submit" class="attakJoueur2" name="attakJoueur2" value="Attak">
            <input type="submit" class="capaSpeJoueur2" name="capaSpeJoueur2" value="Capacite Speciale">

        </div>
    </form> 

 <?php
    if (isset($_POST['attakJoueur1'])){
        $damage = max(0, $_SESSION['player1']['attak'] - $_SESSION['player2']['def']);
        $newLife = max(0, $_SESSION['player2']['life'] - $damage);
        $_SESSION['player2']['life'] = $newLife;
        // var_dump($newLife); 
    
        if ($newLife <= 0){
            ?> 
            <script src="js/j1disables.js"></script>
            <form method="POST">
              <input type="submit" name="destroySession" value="Restart game">
            </form>
            <div class="message-final">
        <p>Joueur2 you lose</p>
    </div>
    <?php
    }
            
 } 
        // header("Location: index.php");

    
    
    if (isset($_POST['attakJoueur2'])){
        $damage = max(0, $_SESSION['player2']['attak'] - $_SESSION['player1']['def']);
        $newLife = max(0, $_SESSION['player1']['life'] - $damage);
        $_SESSION['player1']['life'] = $newLife;
        var_dump($newLife); 
    
        if ($newLife <= 0){
            ?> 
            <script src="js/j2disables.js"></script>
            <form method="POST">
              <input type="submit" name="destroySession" value="Restart game">
            </form>
            <div class="message-final">
        <p>Joueur1 you lose</p>
    </div>
    <?php
}
        
        // header("Location: index.php");
    }

        if (isset($_POST['capaSpeJoueur1'])){

        if ($_SESSION['player1']['class'] == "Sangoku"){
            $_SESSION['player1']['def'] = $player1->capaSpe();
            header("Location: index.php");
        }
        if ($_SESSION['player1']['class'] == "Vegeta"){
            $newLife = $player2->getLife() - $player1->capaSpe();
            $_SESSION['player2']['life'] = $newLife;
            header("Location: index.php");
        }   
        if ($_SESSION['player1']['class'] == "Broly"){
            $newLife = $player1->getLife() + $player1->capaSpe();
            $_SESSION['player1']['life'] = $newLife;
        }   
        if ($_SESSION['player1']['class'] == "Bojack"){
            $newLife = $player2->getLife() - ($player1->capaSpe() - ($player2->getDef() -2));
            $_SESSION['player2']['life'] = $newLife;
            
        }  
    } 
        if (isset($_POST['capaSpeJoueur2'])){

            if ($_SESSION['player2']['class'] == "Sangoku"){
                $_SESSION['player2']['def'] = $player2->capaSpe();
            }
            if ($_SESSION['player2']['class'] == "Vegeta"){
                $newLife = $player1->getLife() - $player2->capaSpe();
                $_SESSION['player1']['life'] = $newLife;
            }   
            if ($_SESSION['player2']['class'] == "Broly"){
                $newLife = $player2->getLife() + $player2->capaSpe();
                $_SESSION['player2']['life'] = $newLife;
            }   
            if ($_SESSION['player2']['class'] == "Bojack"){
                $newLife = $player1->getLife() - ($player2->capaSpe() - ($player1->getDef() -2));
                $_SESSION['player1']['life'] = $newLife;
            }     
    }     


 ?>

