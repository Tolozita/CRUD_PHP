
<?php 

echo __DIR__;
require_once(__DIR__."/libs/Database.php");
require_once(__DIR__."/libs/Modelo.php");
include_once("clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection($database);
$aprendiz = new Aprendiz($conection);

$nombre = $_POST["first_name"];
$apellido = $_POST["last_name"];
$birthdate = $_POST["birthdate"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$dni = $_POST["dni"];


if(!isset($_POST["first_name"]) &&     
    !isset($_POST["last_name"]) &&
    !isset($_POST["birthdate"]) &&
    !isset($_POST["email"]) &&
    !isset($_POST["phone"]) &&
    !isset($_POST["dni"])
){
$aprendiz->store([
'first_name' => $_POST["first_name"],
'last_name' => $_POST["last_name"],
'birthdate' => $_POST["birthdate"],
'email' => $_POST["email"],
'phone' => $_POST["phone"],
'dni' => $_POST["dni"],
'user_account' => isset($_POST['user_account']) ? $_POST['user_account'] : '',
'average' => isset($_POST['average']) ? $_POST['average'] : ''

]);

}else{
var_dump("Datos Vacios");
}






// $aprendiz->update(3, [
//     'first_name' => "John",
//     'address' => "Sena Giron",
//     'cuenta' => 2696521
// ]);

// $aprendiz->delete(3);



// die();
// include_once("clases/Aprendiz.php");
// include_once("clases/Instructor.php");

// $aprendiz = new Aprendiz();
// $instructor = new Instructor();


// $aprendiz->SetNombre("Juan Sebastian");
// $aprendiz-> SetApellidop("Toloza");


// $instructor->SetNombre("John");
// $instructor->SetApellidop("Becerra");

// $fullname = $aprendiz->getFullName();
// $fullname_ins = $instructor->getFullName();



// var_dump($fullname);
// var_dump($fullname_ins);
?>


