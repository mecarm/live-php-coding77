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
$cliente2 = new Cliente('Fabio', 'Fognini', 32);
var_dump($cliente2);

echo $cliente2->isAdult();
echo ('<br>');

//cliente3
$cliente3 = new Cliente('Pepp', 'trocchia', 12);
echo $cliente3->isAdult();

?>
<!-- //Form per creare un cliente -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <h1>Compila il form</h1>
    <form method="GET">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="lastname" name="lastname">
        <input type="number" placeholder="age" name="age">
        <button type="submit">INVIA</button>
    </form>
    <?php

    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $age = $_GET['age'];

    $cliente4 = new Cliente($name, $lastname, $age);
    var_dump($cliente4);
    
    //array di istanze
    $arrayIstanze = [];
    for ( $i = 0; $i < 2; $i++) {
        $cliente = new Cliente('name', 'lastname', 'age');
        $arrayIstanze[] = $cliente;
    }
    var_dump($arrayIstanze);
    
    ?>
</body>
</html>



