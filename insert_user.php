<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$password = $_POST['password'];
$rut = $_POST['rut'];

$sql = "INSERT INTO usuarios VALUES('$nombre','$apellido','$correo','$rut','$celular','$password','$id')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php?registro=exitoso");
}else{

}

?>
