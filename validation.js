function validate(){
    var nombre,telefono,calles, numero_puerta,ciudad,expresion
    nombre= document.getElementById ("nombre").value;
    telefono= document.getElementById ("telefono").value;
    calles= document.getElementById ("calles").value;
    numero_puerta= document.getElementById ("numero_puerta").value;
    ciudad= document.getElementById ("ciudad").value;
    /*expresion= / \w+@\w\.+[a-z]/; (expresion regular para evaluear correo electronico)*/
    if(nombre==="" || telefono==="" ||calles===""||numero_puerta===""||calles===""){
        alert("debe completar todos los campos")  

    }/* puede agregarse el correo electronico hay que usar la expresion regulara comentada mas arriba*/
    else if(nombre.length>20 || telefono.length>20 ||calles.length>20||numero_puerta.length>10){
       
        alert ("los valores son demasiado largos")
       
        return false;
    }
    else if(isNaN(telefono)){
        alert("telefono debe ser un numero")
        return false
    }
    
   
    /*else if(!expresion.test(correo)){
        alert("ingrese una direccion de correo valida")

    } evaluacion de expresion regular de correp electronico*/
    /* agregar longitud maxima de los valores*/
 
}/*if(nombre===""){
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
