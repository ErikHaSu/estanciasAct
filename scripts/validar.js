function escuela() {
    var nombre, clave, localidad, expresionC, expresionC2;
    nombre = document.getElementById("nombreE").value;
    clave = document.getElementById("clave").value;
    localidad = document.getElementById("localidad").value;
    expresionC = /^[a-zA-Z\s]*$/;
    expresionC2 = /^[a-zA-Z0-9]*$/;
    if(nombre ==="" || clave ==="" || localidad ==="") {
        alert("Es necesario completar los campos");
        return false;
    }
    else if(nombre.length>40) {
        alert("El nombre debe contener menos caracteres");
        return false;
    }
    else if(!expresionC.test(nombre)){
        alert("Nombre no valido");
        return false;
    }
    else if(clave.length>40){
        alert("La calve debe contener menos caracteres");
        return false;
    }
    else if(!expresionC2.test(clave)){
        alert("Clave no valida");
        return false;
    }
    else if(localidad.length>40){
        alert("La localidad debe contener menos caracteres");
        return false;
    }
    else if(!expresionC.test(localidad)){
        alert("Localidad no valida");
        return false;
    }
}

function participante (){
    var nombre, ap_paterno, ap_materno, edad, sexo, escuela, expresion,expresion2;
    nombre = document.getElementById("nombre").value;
    ap_paterno = document.getElementById("ap_paterno").value;
    ap_materno = document.getElementById("ap_materno").value;
    edad = document.getElementById("edad").value;
    sexo = document.getElementById("sexo").value;
    escuela = document.getElementById("escuela").value;
    expresion = /^[a-zA-Z\s]*$/;
    expresion2 = /[0-9]/;
    if(nombre ==="" || ap_paterno ==="" || ap_materno ==="") {
        alert("Es necesario completar los campos");
        return false;
    }
    else if(nombre.length>48){
        alert ("El nombre contiene muchos caracteres");
        return false;
    }
    else if(!expresion.test(nombre)){
        alert("Nombre no valido");
        return false;
    }
    else if(ap_materno.length>48){
        alert ("El apellido materno contiene demasidos caracteres");
        return false;
    }
    else if(!expresion.test(ap_materno)){
        alert("Apellido materno no valido");
        return false;
    }
    else if(ap_paterno.length>48){
        alert ("El apellido paterno contiene demasiados caracteres");
        return false;
    }
    else if(!expresion.test(ap_paterno)){
        alert("Apellido paterno no valido");
        return false;
    }
    else if(edad.length>3){
        alert ("El campo edad contiene demasiados caractares");
        return false;
    }
    else if(!expresion2.test(edad)){
        alert("Edad no valida");
        return false;
    }
    else if(sexo.length>2){
        alert ("El campo sexo contiene demasados catacteres");
        return false;
    }
    else if(!expresion.test(sexo)){
        alert("Sexo no valido");
        return false;
    }
    else if(escuela.length>48){
        alert ("El campo escuela contiene demasiados caracteres");
        return false;
    }
    else if(!expresion.test(escuela)){
        alert("escuela no valida");
        return false;
    }
}