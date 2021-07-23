function validate(){
    var nombre,apellido,telefono,calle,entre_calle,ciudad_localidad,//expresion
    nombre= document.getElementById ("nombre").value;
    apellido= document.getElementById ("apellido").value;
    telefono= document.getElementById ("telefono").value;
    calle= document.getElementById ("calle").value;
    entre_calle= document.getElementById ("entre_calle").value;
    ciudad_localidad= document.getElementById ("ciudad_localidad").value;
      
    /*expresion= / \w+@\w\.+[a-z]/; (expresion regular para evaluear correo electronico)*/
    
    
    if(nombre==="" || apellido==="" ||telefono==="" ||calle===""|| ciudad_localidad===""||entre_calle===""){
        
        alert("debe completar todos los campos")  

    }/* puede agregarse el correo electronico hay que usar la expresion regulara comentada mas arriba*/
    else if(nombre.length>30 || telefono.length>30 ||calle.length>30||ciudad_localidad.length>30){
       
        alert ("los valores son demasiado largos")
       
        return false;
    }
    else if(isNaN(telefono)){
        alert("telefono debe ser un numero")
        return false
    }
    
   
    
    

}


/*if(nombre===""){
    alert("debe completar este campo")
    return false;
}
else if(telefono===""){
    alert("debe completar este campo")
    return false;
}

else if(calles===""){
    alert("debe completar este campo")
    return false;

}
else if(numero_puerta===""){
    alert("debe completar este campo")
    return false;
}
else if(calles===""){
    alert("debe completar este campo")
    return false;
}*/
