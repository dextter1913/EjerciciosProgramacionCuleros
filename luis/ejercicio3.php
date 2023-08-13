<?php
// vamos a validar si una persona aplica o no para el cargo de ejecutivo, se requiere, edad minima de 22 años, 
// experiencia 2 años, nombre, apellido, telefono, se debe mostrar si aplica o si no aplica

//Estructurado
$edad=28;
$exp=3;
$nom= "Carlos";
$apell ="Ramirez";
$tel="32142342343";

if ($edad>=22 && $exp >=2) {
    echo "Aplica. ";
} else {
    echo "No aplica. ";
}

//FUNCION
$edad=21;
$exp=3;
function ejecutivo ($edad, $exp){
    $ejecutivo = ($edad. $exp);
    return $ejecutivo;
}
$ejecutivo= ejecutivo($edad, $exp);

if ($edad >= 22 && $exp >= 2) {
    Echo "Aplica. ";
} else {
    echo "No aplica. ";
}

// CLASE
$edad=22;
$exp=2;
class ejecutivo{
    public function resEjecutivo ($edad, $exp){
    $ejecutivo = ($edad. $exp);
    return $ejecutivo;
}
}
 
$ejecutivo = new ejecutivo;
$ejecutivo = $ejecutivo->resEjecutivo($edad, $exp);

if ($edad>=22 && $exp>-22) {
    echo "Aplica. ";
} else {
    echo "No aplica";
}

