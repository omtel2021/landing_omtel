<?php 
// recibe datos de formulario
//include 'conect.php'; // incluye php de conexion a bd
//("localhost","root","contraseña","nombre de base","puerto")
include 'conect.php';

$conexion = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname","$dbport") or die("error conectando con el servidor");
if(!$conexion){
echo "Error al conectar a la base de datos";
}

// verificamos que los datos existan




if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]) ) {
    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["telefono"])){

        $nombre = $_POST["nombre"];
        $apellido= $_POST["apellido"];
        $telefono = $_POST["telefono"];
        $calle = $_POST["calle"];
        $entre_calle = $_POST["entre_calle"];
        $ciudad_localidad = $_POST["ciudad_localidad"];
        $provincia = $_POST["provincia"];
        $servicio = $_POST["servicio"];

        //ver filter_var

    }
    else{

        echo '<script> alert (" Debe complentar los campos ") </script>'; 

    }
    
   
    }
    
    

 

//revisar si telefono coincide para dejar mensaje de telefono registrado
    $check=mysqli_query($conexion,"SELECT * from landing WHERE nombre='$nombre' and apellido='$apellido' and telefono='$telefono' and servicio='$servicio' ");
$checkrows=mysqli_num_rows($check);

if($checkrows >0){


echo '<script> alert (" El usuario ya se encuentra registrado ") </script>';

}


else{

// envia datos a la base de datos
//agregar los valore en INSERT y en VALUES
$insert= "INSERT INTO landing(nombre,apellido,telefono,calle,entre_calle,ciudad_localidad,provincia,servicio) 
VALUES ('$nombre','$apellido','$telefono','$calle','$entre_calle','$ciudad_localidad','$provincia','$servicio') " ;

//ejecutar consulta

$resultado= mysqli_query($conexion,$insert);

if(!$resultado){
    echo '<script> alert (" error en el registro ") </script>';
    mysqli_close($conexion);
}
else{
    
   // echo '<script> alert (" El registro se relizó con éxito ") </script>';
    //echo '<script> confirm (" El registro se relizó con éxito ") </script>';
    
    mysqli_close($conexion);
    echo '<script> var r = confirm("Successful Message!");
    if (r == true){
        header("Location:http://localhost/landing_omtelX");
    }</script>';
    
   
}


}

    





//cerrar conexion

//header("Location:https://https://www.google.com.ar");

