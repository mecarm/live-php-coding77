<?php
//----------HOMEPAGE----------

//includo le info della classe cliente
include_once __DIR__  . '/cliente.php';

$cliente1 = new Cliente('Carmine', 'Mele', 23);

//otengo un nuovo cliente
// var_dump($cliente1);

//settare dei valori per l'istanza chiamata: cliente1
// $cliente1 -> name = 'Carmine';
// $cliente1 -> lastname = 'Mele';

var_dump($cliente1);

//Creo il cliente2 con il costruttore
$cliente2 = new Cliente('Fabiio', 'Fognini', 32);
var_dump($cliente2);

?>