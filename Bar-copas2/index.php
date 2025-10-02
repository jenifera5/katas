<?php
require_once 'mesa.php';

$mesas=[
    new Mesa("1","3",true),//no disponible
    new Mesa("2","2"),// reserva sin nombre
    new Mesa("3","4"),//reserva con nombre
];


$mesas[2]->reservar("Maria",4);

foreach ($mesas as $mesa) {
   echo $mesa->info() ."<br>";
}