<?php   

class Persona extends Modelo{
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $telefono;
    protected $correo;
    protected $documento;
    protected $direccion;


    public function __construct(
        $id,
        $table,
        $conection){
            parent::__construct($id,$table,$conection);
    }

    public function GetNombre(){
        return $this->nombre;
    }

    public function GetApellido(){
        return $this->apellido;
    }

    public function GetEdad(){
        return $this->edad;
    }

    public function GetTelefono(){
        return $this->telefono;
    }

    public function GetCorreo(){
        return $this->correo;
    }

    public function GetDocumento(){
        return $this->documento;
    }

    public function GetDireccion(){
        return $this->direccion;
    }
    
    public function SetNombre($nombre){
        $this->nombre = $nombre;
    }


    public function SetApellidop($Apellido){
        $this->apellido = $Apellido;
    }


    public function SetEdad($Edad){
        $this->edad = $Edad;
    }

    public function SetTelefono($telefono){
        $this->edad = $telefono;
    }

    public function SetCorreo($correo){
        $this->edad = $correo;
    }

    public function SetDocumento($documento){
        $this->edad = $documento;
    }

    public function SetDireccion($direccion){
        $this->edad = $direccion;
    }

    public function getFullName(){
        return "el Nombre Completo Es : ".$this->nombre." ".$this->apellido;
    }
} 

?>


