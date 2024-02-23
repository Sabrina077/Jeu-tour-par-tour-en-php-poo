<?php

  class Vegeta extends Personnage{
    //Instancier et fixer les valeurs 
    public function __construct() {
        $this->life = 35;
        $this->attak = 7;
        $this->def = 3;
    }

    public function capaSpe(){
        return 5;
    }
  }
?>