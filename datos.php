<?php 
// recibe datos de formulario
//include 'conect.php'; // incluye php de conexion a bd
//("localhost","root","","","")
$conexion = mysqli_connect("localhost","root","","","") or die("error conectando con el servidor");
if(!$conexion){
echo "Error al conectar a la base de datos";
}


$nombre = $_POST["Nombre"];
$apellido= $_POST["Apellido"];
$telefono = $_POST["Telefono"];
$calles = $_POST["Calles"];
$Entre_calle = $_POST["Entre_calles"];
$ciudad_localidad = $_POST["ciudad"];
$provincia=$_POST["Provincia"];

// envia datos a la base de datos

$insert=  "INSERT INTO formulario(nombre,telefono,calles,numero_puerta,ciudad) 
VALUES ('$nombre','$telefono','$calles','$numero_puerta','$ciudad') " ;

//ejecutar consulta

$resultado= mysqli_query($conexion,$insert);

/*if(!$resultado){
    echo "error en el registro";
}
else{
    echo "lísto tu registro esta completo";
}*/
//cerrar conexion
mysqli_close($conexion);
