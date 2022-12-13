<?php 
$arrayNomi = [
    'dario',
    'marco',
    'carmine',
    'andrea'
];

//estrarre un valore da un array
echo $arrayNomi['2'];

//estrarre tutti i valori di un array
for( $i = 0; $i < count($arrayNomi); $i++){
    echo '<br>';
    echo $arrayNomi[$i];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hola</title>
</head>
<body>
    <!-- Stampiamo una lista ul e li dentro -->
    <ul>
        <?php for( $i = 0; $i < count($arrayNomi); $i++){ ?>
            <li>
                <?php echo $arrayNomi[$i]; ?>
            </li>
       <?php } ?>
    </ul>
</body>
</html>