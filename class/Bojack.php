<?php

  class Bojack extends Personnage{
    //Instancier et fixer les valeurs 
    public function __construct() {
        $this->life = 25;
        $this->attak = 5;
        $this->def = 4;
    }

    public function capaSpe(){
        return 8;
    }
  }
?>