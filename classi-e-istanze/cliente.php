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
}

?>