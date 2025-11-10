<?php 
require_once 'mesa.php';

 function asignarMesa(array $mesas , string $nombre ,int $personas):?Mesa
{
    $disponibles = array_filter($mesas,fn($m) => !$m ->estaReservado() && $m->getSillas() >= $personas);
    usort($disponibles ,fn($a,$b)=>$a->getSillas());
    if(!empty($disponibles)){
        $mesa = $disponibles[0];
        $mesa->reservar($nombre,$personas);
        return $mesa;
    }
    return null;
}

function resumenBar(array $mesas): void {
    $total = count($mesas);
    $ocupadas = count(array_filter($mesas, fn($m) => $m->estaReservado()));
    $libres = $total - $ocupadas;

    echo "<br><strong> Estado del bar:</strong><br>";
    echo "Mesas totales: $total<br>";
    echo "Ocupadas: $ocupadas<br>";
    echo "Libres: $libres<br>";
    echo "Ocupación: " . round(($ocupadas / $total) * 100, 2) . "%<br>";
}
