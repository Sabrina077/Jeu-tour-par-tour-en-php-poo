<?php

  class Sangoku extends Personnage{
    
    //Instancier et fixer les valeurs 
    public function __construct() {
        $this->life = 40;
        $this->attak = 8;
        $this->def = 2;
    }
    public function capaSpe(){
        $this->setDef($this->getDef() + 1);
        return $this->getDef();
    }
  }
?>