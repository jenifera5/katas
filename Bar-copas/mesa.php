<?php
class Mesa{

    private int $id;
    private int $silla;
    private bool $reservado;
    private ?string $nombreReserva=null;

    public function __construct(int $id,int $silla,bool $reservado=false){
        $this->id=$id;
        $this->silla=$silla;
        $this->reservado=$reservado;
    }

   public function reservar(string $nombre, int $personas) : bool {
    if (!$this->reservado && $personas <= $this->silla) {
        $this->nombreReserva = $nombre;
        $this->reservado = true;  
       
        return true;
    } 
    return false;
}

  
    public function info(): string {
        return "Mesa {$this->id} ({$this->silla} sillas) - " 
             . ($this->reservado ? "Reservada por {$this->nombreReserva}" : "Disponible");
    }




}










?>