<?php
$frutas = [
    'Manzana',
    'Pera',
    'Mandarina',
    'Guayaba',
    'Mango',
    'Melocoton',
    'Naranja',
    'Fresa',
    'Uva',
    'Tamarindo',
    'Sapote',
    'Guanabana'];

// echo $frutas[6]." ". $frutas[3]." ".$frutas[4];


        
// while ($i < $b) {
//       echo $frutas[$i]. "\n";
//         $i = $i + 1 ;
//     }

//     function frutas ($frutas){
//         $i=0;
//         $b = count($frutas);
//         var_dump($b);
//         while ($i < $b) {
//         echo $frutas[$i]. "\n";
//           $i = $i + 1 ;
//       }
//     }

// $frutas = frutas($frutas);
// echo $frutas;
class frutas
{
    public function frutasContar($frutas)
    { 
        $i=0;
        $b = count($frutas);
        var_dump($b);
        
        while ($i < $b) {
        echo $frutas[$i]. "\n";
          $i = $i + 1 ;
      }
}
}

$frutass = new frutas;
$frutas = $frutass->frutasContar($frutas);
echo $frutas;
