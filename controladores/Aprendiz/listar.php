<?php 

require_once(__DIR__."/../../libs/Database.php");
require_once(__DIR__."/../../libs/Modelo.php");
include_once("./../../clases/Aprendiz.php");


$database = new Database();
$conection = $database->getConection($database);
$aprendiz = new Aprendiz($conection);

$listar = $aprendiz->getAll();

?>

<table border="1">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Fecha de Nacimiento</th>
        <th>Telefono</th>
        <th>DNI</th>
        <th>Sueldo</th>
        <th>Cuenta</th>
        <th>Promedio</th>
    </thead>
    <tbody>
<?php
for($i=0 ; $i < count($listar);$i++){  
?>

        <tr>
            <td><?=$listar[$i]['id']?></td>
            <td><?=$listar[$i]['first_name']?></td>
            <td><?=$listar[$i]['last_name']?></td>
            <td><?=$listar[$i]['email']?></td>
            <td><?=$listar[$i]['birthdate']?></td>
            <td><?=$listar[$i]['phone']?></td>
            <td><?=$listar[$i]['dni']?></td>
            <td><?=$listar[$i]['salary']?></td>
            <td><?=$listar[$i]['user_account']?></td>
            <td><?=$listar[$i]['average']?></td>
            <td>
                <div>
                    <a href="editar.php?id=<?= $listar[$i]['id'] ?>">Editar</a>
                    <form action="eliminar.php" method="post">
                        <input type="hidden"  name="id" value="<?=$listar[$i]['id']?>" >
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </td>
        </tr>
<?php } ?>  

    </tbody>
</table>
