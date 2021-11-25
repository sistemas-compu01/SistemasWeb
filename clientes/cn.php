<?php
include "..//cn.php";
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$RFC = $_POST["rfc"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];

$insertar = "INSERT INTO tblclientes(nombre, direccion, correo, telefono, rfc, fecha_nacimiento) VALUES ('$nombre',
 '$direccion', '$correo', '$telefono', '$RFC', '$fecha_nacimiento')";

$verificar_nombre = mysqli_query($conexion, "SELECT * FROM  tblclientes WHERE nombre = '$nombre'");
if(mysqli_num_rows($verificar_nombre) > 0){
    echo '<script>
        alert("El cliente ya esta registrado");
        window.history.go(-1);
    </script>';
    exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM  tblclientes WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '<script>
        alert("El correo ya esta registrado");
        window.history.go(-1);
    </script>';
    exit;
}


$verificar_RFC = mysqli_query($conexion, "SELECT * FROM  tblclientes WHERE RFC = '$RFC'");
if(mysqli_num_rows($verificar_RFC) > 0){
    echo '<script>
        alert("El RFC ya esta registrado");
        window.history.go(-1);
    </script>';
    exit;
}

//Ejecuta la consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo 'Error al registrarse';
} else{
    echo '<script>
        alert("El cliente  ha sido registrado exitosamente");
        window.history.go(-1);
    </script>';
}
//cerrar conexion
mysqli_close($conexion);



