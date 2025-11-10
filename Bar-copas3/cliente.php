<?php
require_once 'mesa.php';
class Cliente {

    private string $nombre;
    private int $personas;

    private ?Mesa $mesaAsignada =null;

    public function __construct(string $nombre,int $personas)
    {
        $this->nombre=$nombre;
        $this->personas=$personas;

    }

    public function AsignarMesa(Mesa $mesa)
    {
        $this->mesaAsignada=$mesa;

    }





    public function getNombre()
    {
        return $this->nombre;
    }


    public function getPersonas()
    {
    return $this->personas;
    }

    public function infoCliente(): string{
        if($this->mesaAsignada){
            return"{$this->nombre} ({$this->personas} -personas)Mesa asignada: {$this->mesaAsignada->getId()}";

        }else {
            return"{this->nombre} ({$this->personas} personas)-Sin mesa asignada";
        }
    }


}