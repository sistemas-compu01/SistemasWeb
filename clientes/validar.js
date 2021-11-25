function validar() {
    var nombre, direccion, correo, telefono, RFC, dia, mes, anio;
    nombre = document.getElementById("nombre").value;
    direccion = document.getElementById("direccion").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    RFC = document.getElementById("RFC").value;
    dia = document.getElementById("dia").value;
    mes = document.getElementById("mes").value;
    anio = document.getElementById("anio").value;
    expresion = /\w+@\w+\.+[a-z]/;
    fechadenacimiento = new Date(dia,mes,anio);
    if(!NaN(fechadenacimiento)) {
        alert("El campo FechadeNacimiento esta vacio")
        return false;
    }
    if(nombre === "" ||  direccion === "" || correo === "" || telefono === "" || RFC === "" || 
    fechadenacimiento === "") {
        alert("Todos los campos estan vacios, favor de llenarlos");
        return false;
    }
    else if(nombre.length>100) {
        alert("El campo Nombre solo acepta 100 caracteres como maximo");
        return false;
    }
    else if(direccion.length>150) {
        alert("El campo Direccion solo acepta 150 caracteres como maximo");
        return false;
    }
    else if(correo.length>100) {
        alert("El campo Correo solo acepta 100 caracteres como maximo");
        return false;
    }
    else if(!expresion.test(correo)) {
        alert("El Correo no es valido")
        return false;
    }
    else if(telefono.length>15) {
        alert("El campo Telefono solo acepta 15 caracteres como maximo");
        return false;
    }
    else if(isNaN(telefono)) {
        alert("El campo Telefono solo acepta numeros");
        return false;
    }
    else if(RFC.length>15) {
        alert("El campo RFC solo acepta 15 caracteres como maximo");
        return false;
    }
}