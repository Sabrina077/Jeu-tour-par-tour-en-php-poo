   
    <h1>Let's Go</h1>

    <form method="post" action="">
        <select name="selectPlayer1">
            <option value="Sangoku">Sangoku</option>
            <option value="Vegeta">Vegeta</option>
            <option value="Broly">Broly</option>
            <option value="Bojack">Bojack</option>
        </select>
        <select name="selectPlayer2">
            <option value="Sangoku">Sangoku</option>
            <option value="Vegeta">Vegeta</option>
            <option value="Broly">Broly</option>
            <option value="Bojack">Bojack</option>
        </select>
        <input type="submit" name="submitSelectPlayer" value="Start">
    </form>

    


  
  <?php

   if(isset($_POST['submitSelectPlayer'])){
    $_SESSION['player1'] ['class'] = $_POST['selectPlayer1'];
    $_SESSION['player2'] ['class'] = $_POST['selectPlayer2'];

    if ($_POST['selectPlayer1'] == "Sangoku"){
        $player1 = new Sangoku();
        $_SESSION['player1'] ['class'] = "Sangoku";
        $_SESSION['player1'] ['life'] = $player1->getLife();
        $_SESSION['player1'] ['attak'] = $player1->getAttak();
        $_SESSION['player1'] ['def'] = $player1->getDef();

    }
    if ($_POST['selectPlayer1'] == "Vegeta"){
        $player1 = new Vegeta();
        $_SESSION['player1'] ['class'] = "Vegeta";
        $_SESSION['player1'] ['life'] = $player1->getLife();
        $_SESSION['player1'] ['attak'] = $player1->getAttak();
        $_SESSION['player1'] ['def'] = $player1->getDef();
        
    }
    if ($_POST['selectPlayer1'] == "Broly"){
        $player1 = new Broly();
        $_SESSION['player1'] ['class'] = "Broly";
        $_SESSION['player1'] ['life'] = $player1->getLife();
        $_SESSION['player1'] ['attak'] = $player1->getAttak();
        $_SESSION['player1'] ['def'] = $player1->getDef();
        
    }
    if ($_POST['selectPlayer1'] == "Bojack"){
        $player1 = new Bojack();
        $_SESSION['player1'] ['class'] = "Bojack";
        $_SESSION['player1'] ['life'] = $player1->getLife();
        $_SESSION['player1'] ['attak'] = $player1->getAttak();
        $_SESSION['player1'] ['def'] = $player1->getDef();
    
    }
   
    if ($_POST['selectPlayer2'] == "Sangoku"){
        $player2 = new Sangoku();
        $_SESSION['player2'] ['class'] = "Sangoku";
        $_SESSION['player2'] ['life'] = $player2->getLife();
        $_SESSION['player2'] ['attak'] = $player2->getAttak();
        $_SESSION['player2'] ['def'] = $player2->getDef();

    }
    if ($_POST['selectPlayer2'] == "Vegeta"){
        $player2 = new Vegeta();
        $_SESSION['player2'] ['class'] = "Vegeta";
        $_SESSION['player2'] ['life'] = $player2->getLife();
        $_SESSION['player2'] ['attak'] = $player2->getAttak();
        $_SESSION['player2'] ['def'] = $player2->getDef();
    }
    if ($_POST['selectPlayer2'] == "Broly"){
        $player2 = new Broly();
        $_SESSION['player2'] ['class'] = "Broly";
        $_SESSION['player2'] ['life'] = $player2->getLife();
        $_SESSION['player2'] ['attak'] = $player2->getAttak();
        $_SESSION['player2'] ['def'] = $player2->getDef();         

    }
    if ($_POST['selectPlayer2'] == "Bojack"){
        $player2 = new Bojack();
        $_SESSION['player2'] ['class'] = "Bojack";
        $_SESSION['player2'] ['life'] = $player2->getLife();
        $_SESSION['player2'] ['attak'] = $player2->getAttak();
        $_SESSION['player2'] ['def'] = $player2->getDef();
    }
}

?>
