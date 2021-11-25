/*id(int) nombre(100) direccion(150) correo(100) telefono(varchar 15) RFC(varchar 15) */

function validar(){
    var nombre, direccion, correo, telefono, RFC, expresion;
    nombre = document.getElementById("nombre").value;
    direccion = document.getElementById("direccion").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    RFC = document.getElementById("RFC").value;

    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre === "" || direccion === "" || correo === "" || telefono === "" || RFC === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(nombre.length>100){
        alert("El nombre es muy largo");
        return false;
    }
    else if(direccion.length>150){
        alert("La direccion es muy larga");
        return false;
    }
    else if(correo.length>100){
        alert("El correo es muy largo");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El correo no es valido");
        return false;
    }
    else if(RFC.length>15){
        alert("El RFC es muy largo");
        return false;
    }
    else if(telefono.length>15){
        alert("El telefono es muy largo");
        return false;
    }
    else if(isNaN(telefono)){
        alert("El telefono ingresado no es un numero");
        return false;
    }
}