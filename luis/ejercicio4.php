<?php
// vamos a validar si un estudianete aplica o no para entrar a la universidad, 
// debe sacar un promedio de calificacion en ciencias politica minimo de 4.5 o un promedio de matematica minimo de 3.9

//ESTRUCTURADA
$cp1= 3.5;
$cp2= 4.8;
$fcp;
$mat1= 3.9;
$mat2= 4.0;
$fmat;
$fcp = ($cp1 + $cp2) / 2;
$fmat= ($mat1 + $mat2) / 2;

if ($fcp >= 4.5 || $fmat >= 3.9) {
    echo $fcp, " ", $fmat, " Pasa. ";
} else {
    echo $fcp, " ", $fmat, " No pasa. ";
}

//FUNCION
$cp1= 2.5;
$cp2= 3.8;
$fcp;
$mat1= 3.9;
$mat2= 3.8;
$fmat;
$fcp = ($cp1 + $cp2) / 2;
$fmat= ($mat1 + $mat2) / 2;

function prom($fcp, $fmat){
    $promedio = ($fcp. $fmat);
    return $promedio;
}

$promedio = prom($fcp, $fmat);

if ($fcp >=4.5 || $fmat >=3.9) {
    echo $fcp, " ", $fmat, " Pasa. ";
} else {
    echo $fcp, " ", $fmat, " No pasa. ";
}

//CLASE
$cp1= 4.5;
$cp2= 4.8;
$fcp;
$mat1= 3.9;
$mat2= 3.8;
$fmat;
$fcp = ($cp1 + $cp2) / 2;
$fmat= ($mat1 + $mat2) / 2;
class promedio  
{
    Public function promeUni($fcp, $fmat){
        $promedio = ($fcp. $fmat);
        return $promedio;
    }
}

$promedio = new promedio;
$promedio = $promedio->promeUni($fcp, $fmat);

if ($fcp >=4.5 || $fmat >=3.9) {
    echo $fcp, " ", $fmat, " Pasa. ";
} else {
    echo $fcp, " ", $fmat, " No pasa. ";
}

