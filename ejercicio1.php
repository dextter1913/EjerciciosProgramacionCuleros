<?php
// $num1 = 10;
// $num2 = 20;
// $num3 = 30;
// $promedio = $num1 + $num2 + $num3 / 3;
// echo "El promedio es= " . $promedio;

// function promedio($num1, $num2, $num3)
// {
//     $promedio = $num1 + $num2 + $num3 / 3;
//     return $promedio;
// }
// $promedio = promedio(10, 20, 30);
// $promedio2 = promedio(5, 40, 80);
// echo "El promedio uno es= " . $promedio . " y el promedio dos es= " . $promedio2;

// class Promedio
// {
//     public function resultadoPromedio($num1, $num2, $num3)
//     {
//         $promedio = $num1 + $num2 + $num3 / 3;
//         return $this->mensaje(). $promedio;
//     }
//     private function mensaje(){
//         return "El resultado es= ";
//     }
// }

// $promedioClass = new Promedio();
// $promedio = $promedioClass->resultadoPromedio(10, 20, 30);
// echo $promedio;

//Estructurada 
$num1 = 3.5;
$num2 = 4.0;
$num3 = 2.5;
$num4 = 3.0;
$num5 = 5.0;
$promedio = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;

if ($promedio >= 2.9) {
    echo "Su calificación final es= " . $promedio . " ... Gano el año. ";
} else {
    echo " Su calificación final es= " . $promedio . "... Perdió el año. ";
}


// FUNCION
function promedio($num1, $num2, $num3, $num4, $num5)
{
    $promedio = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
    return $promedio;
}

$promedio = promedio(3.2, 2.5, 2.4, 2.4, 2.5);

if ($promedio >= 2.9) {
    echo " Su calificación final es= " . $promedio . "... Gano el año.";
} else {
    echo " Su calificación final es= " . $promedio . "... Perdió el año. ";
}

//CLASE
class promedio
{
    public function resultadoPromedio($num1, $num2, $num3, $num4, $num5)
    {
        $promedio = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
        return $promedio;
    }
}

$classPromedio = new promedio();
$promedio = $classPromedio->resultadoPromedio(2.5, 3.5, 4.0, 3.8, 5.0);
if ($promedio >= 2.9) {
    echo "Su calificación final es= " . $promedio . "... Gano el año. ";
} else {
    echo "Su calificación final es= " . $promedio . "... Perdió el año. ";
}






//Si el promedio es mayor o igual a 2.9 gano el año si no perdio el año
