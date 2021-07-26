<?php 
// recibe datos de formulario
//include 'conect.php'; // incluye php de conexion a bd
//("localhost","root","contraseña","nombre de base","puerto")


$conexion = mysqli_connect("localhost","root","","landing_omtel","3306") or die("error conectando con el servidor");
if(!$conexion){
echo "Error al conectar a la base de datos";
}


if(isset($_POST["nombre"],$_POST["apellido"],$_POST["telefono"],$_POST["calle"],$_POST["entre_calle"],$_POST["ciudad_localidad"],$_POST["provincia"])){

    $nombre = $_POST["nombre"];
$apellido= $_POST["apellido"];
$telefono = $_POST["telefono"];
$calle = $_POST["calle"];
$entre_calle = $_POST["entre_calle"];
$ciudad_localidad = $_POST["ciudad_localidad"];
$provincia = $_POST["provincia"];

}

$check=mysqli_query($conexion,"SELECT * from landing WHERE nombre='$nombre' and apellido='$apellido' and telefono='$telefono' ");
$checkrows=mysqli_num_rows($check);

if($checkrows >0){


echo "el usuario ya se encuentra registrado";

}
else{

// envia datos a la base de datos
//agregar los valore esn INSERT y en VALUES
$insert= "INSERT INTO landing(nombre,apellido,telefono,calle,entre_calle,ciudad_localidad,provincia) 
VALUES ('$nombre','$apellido','$telefono','$calle','$entre_calle','$ciudad_localidad','$provincia') " ;

//ejecutar consulta

$resultado= mysqli_query($conexion,$insert);

if(!$resultado){
    echo "error en el registro";
}
else{
    echo " lísto tu registro esta completo ";
}


}





//cerrar conexion
mysqli_close($conexion);

