<?php 
// recibe datos de formulario
//include 'conect.php'; // incluye php de conexion a bd
//("localhost","root","contraseña","nombre de base","puerto")
include 'conect.php';

$conexion = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname","$dbport") or die("error conectando con el servidor");
if(!$conexion){

echo '<script> alert (" Error al conectar a la base de datos ") </script>'; 


}


 // funcion evalua longitud de string

function validStrLen($str, $min, $max){
    $len = strlen($str);
    if($len < $min){
        echo '<script> alert (" valor demasiado corto ") </script>'; 
        //return "El valor es demasiado corto, el minimo es $min caracteres ($max max)";
        return FALSE;

       
    }
    elseif($len > $max){
        //return "El valor es demasiado largo, maximum is $max caracteres ($min min).";
        echo '<script> alert (" valor demasiado largo ") </script>'; 
        return FALSE;

       
    }
    return TRUE;
}

// verificamos que los datos existan y no esten vacios
if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]) ) {
    if(empty($_POST["nombre"]) && empty($_POST["apellido"]) && empty($_POST["telefono"]) && empty($_POST["calle"])){

        
    

        echo '<script> alert (" Debe llenar todos los campos ") </script>'; 
        return false;

    }
  
    else{

        $nombre = $_POST["nombre"];
        $apellido= $_POST["apellido"];
        $telefono = $_POST["telefono"];
        $calle = $_POST["calle"];
        $entre_calle = $_POST["entre_calle"];
        $ciudad_localidad = $_POST["ciudad_localidad"];
        $provincia = $_POST["provincia"];
        $servicio = $_POST["servicio"];
        validStrLen($nombre,4,20);
        validStrLen ($apellido,4,20);
        validStrLen($telefono,7,20);
        validStrLen($calle,4,30);
        validStrLen($entre_calle,4,30);
        validStrLen($ciudad_localidad,4,35);
    }
    
   
    }
    
   
    

 

//revisar si telefono coincide para dejar mensaje de telefono registrado

$check=mysqli_query($conexion,"SELECT * from landing WHERE nombre='$nombre' and apellido='$apellido' and telefono='$telefono'  ");
$checkrows=mysqli_num_rows($check);

if($checkrows >0){

   echo "<script language='javascript'>";
   echo '<script> alert (" El usuario ya se encuentra registrado ") </script>';
   echo 'window.history.go(-1);';
   echo  'window.location.reload';
   echo "</script>";
   return false;




}


else{

// envia datos a la base de datos
//agregar los valore en INSERT y en VALUES
$insert= "INSERT INTO landing(nombre,apellido,telefono,calle,entre_calle,ciudad_localidad,provincia,servicio) 
VALUES ('$nombre','$apellido','$telefono','$calle','$entre_calle','$ciudad_localidad','$provincia','$servicio') " ;

//ejecutar consulta

$resultado= mysqli_query($conexion,$insert);

if(!$resultado){
    

    mysqli_close($conexion);
    echo "<script language='javascript'>";
    echo '<script> alert (" Error al enviar formulario , intente mas tarde ") </script>';
    echo 'window.history.go(-1)';
    echo "</script>";
}
else{
    
   // echo '<script> alert (" El registro se relizó con éxito ") </script>';
    //echo '<script> confirm (" El registro se relizó con éxito ") </script>';
  
   mysqli_close($conexion);

  echo "<script language='javascript'>";
  echo 'alert("El registro se realizo con exito");';
  echo 'window.history.go(-1);';
  echo  'window.location.reload';
  echo "</script>";
 
    
   
}


}

    





//cerrar conexion

//header("Location:https://https://www.google.com.ar");

