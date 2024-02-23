<?php
    
   class Personnage{
    //Attribus
   public $life;
   public $attak;
   public $def;
  
   //Getters
   public function getLife(){
    return $this->life;
   }
   public function getAttak(){
    return $this->attak;
   }
   public function getDef(){
    return $this->def;
   }
   //Setters
   public function setLife($life){
     $this->life = $life;
   }
   public function setAttak($attak){
     $this->attak = $attak;
   }
   public function setDef($def){
     $this->def = $def;
   }
   //Method
   public function attaque($player){
    return "le joueur $player est attaquée";
   }
   



}


?>
