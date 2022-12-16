<?php
class Cliente{
    public $name;
    public $lastname;
    public $age;

    //Construttore
    function __construct( $_name, $_lastname, $_age ){
        $this -> name = $_name;
        $this -> lastname = $_lastname;
        $this -> age = $_age;
    }
    public function isAdult(){
        if( $this->age > 18){
            return "l'utente $this->name  $this->lastname è maggiorenne";
        } 
        else{
            return "l'utente $this->name  $this->lastname è minorenne";
        }
    }
}


?>