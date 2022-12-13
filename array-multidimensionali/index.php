<?php 
$studenti = [
    [
        'nome' => 'Carmine',
        'cognome' => 'Mele'
    ],
    [
        'nome' => 'Alessio',
        'cognome' => 'Padova' 
    ],
    [
        'nome' => 'Peppe',
        'cognome' => 'Acappell'
    ],
];

//vogliamo stampare esempio : carmine mele
for( $i = 0; $i < count($studenti); $i++){
    echo $studenti[$i]['nome'] . ' ' . $studenti[$i]['cognome'];
    echo ' <br> ';
}
?>