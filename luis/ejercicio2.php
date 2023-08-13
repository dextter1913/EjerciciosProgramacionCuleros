<?php

//ESTRUCTURADA
$num = 12;
$result = ($num % 2);
 if ($result == 0) {
    Echo "El número ".$num." es par. ";
 } else {
    Echo "El número ".$num." es impar. ";
 }

 //FUNCION
 $num2=15;
 function resultado($num2){
    $result = ($num2 % 2);
    return $result;
 }

 $result = resultado ($num2);

 if ($result == 0) {
    Echo "El número ".$num2." es par.";
 } else {
   Echo "El número ".$num2." es impar. ";
 }
        

 //CLASE
 $num3=25;
 class resultado{
    
    public function resultadoNumero($num3)
    {
        $result = ($num3%2);
        return $result;
    }
 }

 $result = new resultado;
 $result = $result->resultadoNumero($num3);

 if ($result == 0) {
    Echo "El número ".$num3." es par. ";
 } else {
    Echo "El número ".$num3." es impar. ";
 }

 

