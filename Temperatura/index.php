<?php 

require_once 'temperatura.php';
$temp1 = new Temperatura(23,"Celsius");
    echo $temp1->convertir();
$temp2 = new Temperatura(321,"Kelvin");
    echo $temp2->convertir();
$temp3 = new Temperatura(73.4,"Farenheit");
    echo $temp3->convertir();



?>