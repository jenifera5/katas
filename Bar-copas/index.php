<?php
require_once 'mesa.php';

$mesa1 = new Mesa(1, 4);

if ($mesa1->reservar("Jenifer", 3)) {
    echo "Se Reservar ";
    echo $mesa1->info();
} else {
    echo "No se puede reservar ";
}
