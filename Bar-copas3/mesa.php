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

  
       public function getSillas()
    {
        return $this->silla;
    }

   
    public function estaReservado()
    {
        return $this->reservado;
    }

  
    public function getId()
    {
        return $this->id;
    }


    public function infoMesa():string{
        if($this->reservado){
          if($this->nombreReserva){
            return "Mesa{$this->id} ({$this->silla} sillas)-Reservada por{$this->nombreReserva}";
         
          }else{
             return "Mesa {$this->id} ({$this->silla}-sillas)-No se puede reservar";
          }  
        }else{
             return "Mesa {$this->id} ({$this->silla}-sillas)-Disponible";
        }
    }
}