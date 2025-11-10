<?php
require_once 'mesa.php';
require_once 'cliente.php';
require_once 'funciones.php';

//  Mesas del bar
$mesas = [
    new Mesa(1, 2, true), 
    new Mesa(2, 3),
    new Mesa(3, 4),
    new Mesa(4, 6),
];

//  Clientes que llegan
$clientes = [
    new Cliente("Jenifer", 3),
    new Cliente("Carlos", 2),
    new Cliente("Lucía", 5),
];

//  Asignar mesas automáticamente
foreach ($clientes as $cliente) {
    $mesa = asignarMesa($mesas, $cliente->getNombre(), $cliente->getPersonas());
    if ($mesa) {
        $cliente->asignarMesa($mesa);
        echo " {$cliente->getNombre()} ha reservado la mesa {$mesa->getId()}<br>";
    } else {
        echo " No hay mesa disponible para {$cliente->getNombre()}<br>";
    }
}

//  Mostrar estado del bar
echo "<br><strong> Estado de las mesas:</strong><br>";
foreach ($mesas as $mesa) {
    echo $mesa->infoMesa() . "<br>";
}

// 🔹 Mostrar clientes
echo "<br><strong> Lista de clientes:</strong><br>";
foreach ($clientes as $cliente) {
    echo $cliente->infoCliente() . "<br>";
}

// 🔹 Mostrar resumen general
resumenBar($mesas);
