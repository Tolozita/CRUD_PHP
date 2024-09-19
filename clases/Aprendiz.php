
<?php   

include_once("Persona.php");

class Aprendiz extends Persona{
    protected $cuenta;
    protected $promedio;

    public function __construct(PDO $conection)
    {
        echo("Contrsuctor de Aprendiz <br>");
        parent::__construct("id","users",$conection);
    }

    public function Getcuenta(){
        return $this->cuenta;
    }

    public function Getpromedio(){
        return $this->promedio;
    }

    public function SetCuenta($cuenta){
        $this->cuenta = $cuenta;
    }

    public function SetPromedio($promedio){
        $this->promedio = $promedio; 
    }
}

?>
