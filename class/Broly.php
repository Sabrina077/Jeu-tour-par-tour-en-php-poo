<?php

  class Broly extends Personnage{

    //Instancier et fixer les valeurs 
    public function __construct() {
        $this->life = 30;
        $this->attak = 6;
        $this->def = 4;
    }

    public function capaSpe(){
        return 8;
    }
  }
?>