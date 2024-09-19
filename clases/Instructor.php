<?php   

include_once("Persona.php");

class Instructor extends Persona{
    private $sueldo;
    private $horario;
    
    public function __construct(PDO $conection)
    {
        echo("Contrsuctor de Instructor <br>");
        parent::__construct("id","users",$conection);
    }

    public function GetSueldo(){
        return $this->sueldo;
    }

    public function GetHorario(){
        return $this->horario;
    }

    public function SetSueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    public function SetHorario($horario){
        $this->horario = $horario;
    }

}

?>