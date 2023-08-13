<?php

//ESTRUCTURADO
$dia = 1;
$mes = 6;
switch ($dia) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    case 6:
        echo 'Sabado';
        break;
    case 7:
        echo 'Domingo';
        break;
}
switch ($mes) {
    case 1:
        echo 'Enero';
        break;
    case 2:
        echo 'Febrero';
        break;
    case 3:
        echo 'Marzo';
        break;
    case 4:
        echo 'Abril';
        break;
    case 5:
        echo 'Mayo';
        break;
    case 6:
        echo 'Junio';
        break;
    case 7:
        echo 'Julio';
        break;
}


//FUNCION
$dia = 5;
$mes = 4;
function semana($dia)
{
    switch ($dia) {
        case 1:
            return 'Lunes';
            break;
        case 2:
            return 'Martes';
            break;
        case 3:
            return 'Miercoles';
            break;
        case 4:
            return 'Jueves';
            break;
        case 5:
            return 'Viernes';
            break;
        case 6:
            return 'Sabado';
            break;
        case 7:
            return 'Domingo';
            break;
    }
}

function mes($mes)
{
    switch ($mes) {
        case 1:
            return 'Enero';
            break;
        case 2:
            return 'Febrero';
            break;
        case 3:
            return 'Marzo';
            break;
        case 4:
            return 'Abril';
            break;
        case 5:
            return 'Mayo';
            break;
        case 6:
            return 'Junio';
            break;
        case 7:
            return 'Julio';
            break;
    }
}

$dia = semana($dia);
echo $dia;

$mes = mes($mes);
echo $mes;

//CLASE
$dia = 6;
$mes = 7;
class dia
{
    public function diaSemana($dia)
    {
        switch ($dia) {
            case 1:
                return 'Lunes';
                break;
            case 2:
                return 'Martes';
                break;
            case 3:
                return 'Miercoles';
                break;
            case 4:
                return 'Jueves';
                break;
            case 5:
                return 'Viernes';
                break;
            case 6:
                return 'Sabado';
                break;
            case 7:
                return 'Domingo';
                break;
            }
        }
    }

    $dias = new dia;
    $dia = $dias->diaSemana($dia);
    Echo $dia;


    class mes
    {
        public function mesAño($mes)
    {
        switch ($mes) {
            case 1:
                return 'Enero';
                break;
            case 2:
                return 'Febrero';
                break;
            case 3:
                return 'Marzo';
                break;
            case 4:
                return 'Abril';
                break;
            case 5:
                return 'Mayo';
                break;
            case 6:
                return 'Junio';
                break;
            case 7:
                return 'Julio';
                break;
        }
    }
    }
    
    $meses = new mes;
    $mes = $meses->mesAño($mes);
    Echo $mes;