<?php
// EJEMPLO

//vamos a validar si una persona aplica o no para el cargo de ejecutivo, se requiere, edad minima de 22 años, 
//experiencia 2 años, nombre, apellido, telefono, se debe mostrar si aplica o si no aplica

// $numero1 = 1;
// $numero2 = 0;

// if ($numero1 >= 1 && $numero2 > 0) {
//     echo "aplica ";
// } else {
//     echo "no aplica ";
// }


// if ($numero1 == 1 || $numero2 == 5) {
//     echo "aplica ";
// } else {
//     echo "no aplica ";
// }


// $edad = 22;
// $exp = 2;
// $Nom = ("Frank");
// $apell = ("Ospina");
// $tel = 3187660588;

// if ($edad >= 22 && $exp >= 2) {
//     echo "el usuario " . $Nom . " " . $apell . " con numero de cel: " . $tel . " Aplica al cargo";
// } else {
//     echo "el usuario " . $Nom . " " . $apell . " con numero de cel: " . $tel . " No Aplica al cargo";
// }


// EJERCICO 2
// vamos a validar si un estudianete aplica o no para entrar a la universidad, 
// debe sacar un promedio de calificacion en ciencias politica minimo de 4.5 o un promedio de matematica minimo de 3.9

// $Nom = ("Frank");
// $Apell = ("Ospina");
// $notaMat = 3;
// $notaCipol = 4.5;

// if ($notaMat >= 3.9 || $notaCipol >= 4.5) {
//     echo "El estudiante " . $Nom . " " . $Apell . " Aplica al Ingreso";
// } else {
//     echo "El estudiante " . $Nom . " " . $Apell . " No Aplica al Ingreso";
// }


// class promedio
// {
//     public function Promedio($mat1, $mat2)
//     {
//         $promedio = ($mat1 + $mat2) / 2;
//         return $promedio;
//     }
//     public function Promedio2($social1, $social2)
//     {
//         $promedio2 = ($social1 + $social2) / 2;
//         return $promedio2;
//     }
// }

// $Nom = ("Frank");
// $Apell = ("Ospina");
// $mat1 = 4;
// $mat2 = 4;
// $social1 = 1;
// $social2 = 5;
// $cantidad = 2;

// $promedioclass = new promedio;
// $promedio = $promedioclass->Promedio($mat1, $mat2);

// $promedio2class = new Promedio;
// $promedio2 = $promedioclass->Promedio2($social1, $social2);

// if ($promedio >= 3.9 || $promedio2 >= 4.5) {
//     echo "El estudiante " . $Nom . " " . $Apell . " Aplica al Ingreso";
// } else {
//     echo "El estudiante " . $Nom . " " . $Apell . " No Aplica al Ingreso";
// }


// function promedio($nota1, $nota2, $cantidad)
// {
//     $promedio = ($nota1 + $nota2) / $cantidad;
//     return $promedio;
// }

// function aplicaono($promedio, $promedio2, $Nom, $Apell)
// {
//     if ($promedio >= 3.9 || $promedio2 >= 4.5) {
//         return "El estudiante " . $Nom . " " . $Apell . " Aplica al Ingreso";
//     }else {
//         return "El estudiante " . $Nom . " " . $Apell . " No Aplica al Ingreso";
//     }
// }

// $Nom = ("Frank");
// $Apell = ("Ospina");
// $mat1 = 4;
// $mat2 = 1;
// $social1 = 1;
// $social2 = 5;
// $cantidad = 2;

// $promedio = promedio($mat1, $mat2, $cantidad);
// $promedio2 = promedio($social1, $social2, $cantidad);
// $aplicaono = aplicaono($promedio, $promedio2, $Nom, $Apell);
// echo $aplicaono;