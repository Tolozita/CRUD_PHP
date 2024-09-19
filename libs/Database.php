<?php 
class Database{

    private $conection;

    public function __construct(){

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $this->conection = new PDO("mysql:host=127.0.0.1;dbname=sebastian_2696521","aprendiz_2696521","Aprendiz_2696521",$options);

        $this->conection->exec("SET CHARACTER SET UTF8");
    }
    public function getConection()
    {
        return $this->conection;
    }

    public function CloseConection()
    {
        $this->conection = null;
    }
}
?>