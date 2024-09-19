<?php 



require_once(__DIR__."/../../libs/Database.php");
require_once(__DIR__."/../../libs/Modelo.php");
include_once("./../../clases/Aprendiz.php");


$database = new Database();
$conection = $database->getConection($database);
$aprendiz = new Aprendiz($conection);

$id = $_REQUEST['id'];
$user= $aprendiz->getById($id);


?>

<form action="actualizar.php" method="post">

<input type="hidden"  name="id" value="<?=$user['id']?>" >

<div>
    <label>Nombre</label>
    <input type="text" name="first_name" value="<?=$user['first_name']?>">
</div>

<div>
    <label>Apellido</label>
    <input type="text"  id="last_name"  name="last_name" value="<?=$user['last_name']?>">
</div>

<div>
    <label>Correo</label>
    <input type="text"   id="email"  name="email" value="<?=$user['email']?>">
</div>

<div>
    <label>Celular</label>
    <input type="text"  id="phone"  name="phone" value="<?=$user['phone']?>">
</div>

<div>
    <label>Fecha de Nacimiento</label>
    <input type="text"  id="birthdate"  name="birthdate" value="<?=$user['birthdate']?>">
</div>

<div>
    <label>Numero Identificacion</label>
    <input type="text"  id="dni" readonly name="dni" value="<?=$user['dni']?>">
</div>

<div>
    <label>Ficha</label>
    <input type="text"   id="user_account"  name="user_account" value="<?=$user['user_account']?>">
</div>

<div>
    <label>Promedio</label>
    <input type="text"  id="average"  name="average" value="<?=$user['average']?>">
</div>

    <button type="submit" >Actualizar</button>


</form>