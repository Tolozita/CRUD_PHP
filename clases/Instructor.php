<?php   

class Instructor extends Persona{
    private $sueldo;
    private $horario;
    

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