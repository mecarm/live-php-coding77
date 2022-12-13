<?php 
/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
$basketPartite = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Cantù',
        'punteggioCasa' => 55,
        'punteggioOspite' => 60
    ],
    [
        'casa' => 'Napoli',
        'ospite' => 'Bologna',
        'punteggioCasa' => 64,
        'punteggioOspite' => 50
    ],
    [
        'casa' => 'Genoa',
        'ospite' => 'Torino',
        'punteggioCasa' => 45,
        'punteggioOspite' => 56
    ],
];
for( $i = 0; $i < count($basketPartite); $i++){
    echo $basketPartite[$i]['casa'] . ' - ' . $basketPartite[$i]['ospite'] . ' | ' . $basketPartite[$i]['punteggioCasa'] . '-' . $basketPartite[$i]['punteggioOspite'];
    echo '<br>';
}
?>

