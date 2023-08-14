<?php

$calculo=[
65900,
54300,
21030,
19500
];

class nomina
{
    public function recuento($calculo) {
        $i=0;
        $suma = 0;
        $contador = count($calculo);
        while ($i < $contador) {
            $suma = $suma + $calculo[$i];
            $i++;
        }
        $promedio = $suma / $contador;
        return $promedio;
    }
}

$nominaclass = new nomina;
$promedio = $nominaclass->recuento($calculo);
echo $promedio;