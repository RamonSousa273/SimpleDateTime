<?php

function currentHour(){
    return date('H:i:s');
}

function currentDate(){
    return date('Y-m-d');
}

function hourDiff($initialHour, $finalHour){
    $time = array($finalHour, $initialHour);
    $total = array();
    $i = 0;
    foreach ($time as $hour){
        list($h , $m, $s) = explode(':', $hour);
        $total[$i] = $h * 3600;
        $total[$i] += $m * 60;
        $total[$i] += $s;

        $i++;
    }
    $totalSegundos = $total[0] - $total[1];
    $horas = floor($totalSegundos / 3600);
    $totalSegundos -= $horas * 3600;
    $minutos = str_pad((floor($totalSegundos / 60)), 2, '0', STR_PAD_LEFT);
    $totalSegundos -= $minutos * 60;
    $totalSegundos = str_pad($totalSegundos, 2, '0', STR_PAD_LEFT);

    if ($horas < 0){
        $horas = $horas * -1;
    }

    return "$horas:$minutos:$totalSegundos";
}
