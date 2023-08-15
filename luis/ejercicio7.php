<?php
$b;
$promedio=0;
$suma=0;
$i=0;
$numeros = [
    '32',
    '23',
    '22',
    '31',
    '12',
    '42',
    '45',
    '25',
    '32',
    '34',
    '21',
    '90',
    '85',
    '81',
    '24',
    '28',
    '09',
    '1',
    '2',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10',
    '12',
    '14',
    '16',
    '18',
];

$b = count($numeros);
while ($i < $b) {
    
    $suma = $suma + intval($numeros[$i]); 
    $i = $i +1;
}
$promedio = $suma / $b;
echo $promedio;