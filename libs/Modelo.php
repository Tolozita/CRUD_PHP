<?php 

class Modelo
{
protected $id;
protected $table;
protected $db;


public function __construct(
    $id,
    $table,
    PDO $conection
)
{
    $this->id = $id;
    $this->table = $table;
    $this->db = $conection;
}


public function getAll(){
    $stm = $this->db->prepare("select * from {$this->table}");
    $stm->execute();
    return $stm->fetchAll();
}

public function getById($id){
    $stm = $this->db->prepare("select * from {$this->table} where id = :id");
    $stm->bindValue(":id",$id);
    $stm->execute();
    return $stm->fetch();
}

public function store($data)
{

    $sql = " INSERT INTO users (";
    foreach($data as $key => $value){
        if($value == '')continue;
        $sql .= "{$key},";
    }

    $sql = trim($sql,', ');
    $sql .=") values (";

    foreach($data as $key => $value){
        if($value == '')continue;
        $sql .= ":{$key},";
    }

    $sql = trim($sql,', ');
    $sql .=")";

    $stm = $this->db->prepare($sql);

    foreach($data as $key => $value){
        if($value == '')continue;
        $stm->bindValue(":{$key}",$value);
    }

var_dump($sql);
    $stm->execute();
}

public function update($id,$data)
{
    $sql = "UPDATE users SET ";
    foreach($data as $key => $value){
        $sql .= "{$key} = :{$key}, ";
    }
    $sql = trim($sql, ', ');
    $sql .=" WHERE id = :id";
    $stm = $this->db->prepare($sql);
    foreach($data as $key => $value){
        $stm->bindValue(":{$key}", $value);
    }
    $stm->bindValue(":id", $id);

    $stm->execute();

    // echo $sql;
}


public function delete($id)
{
    $sql = "delete from users where id = :id";
    $stm = $this->db->prepare($sql);
    $stm->bindValue(":id", $id);
    $stm->execute();
}

}

?>