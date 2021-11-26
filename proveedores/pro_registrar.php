<?php
include '../cn.php';
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$RFC = $_POST["RFC"];

$insertar = "INSERT INTO tblproveedores(nombre, direccion, correo, telefono, RFC) VALUES ('$nombre',
 '$direccion','$correo', '$telefono', '$RFC', )";



$verificar_correo = mysqli_query($conexion, "SELECT * FROM  tblproveedores WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '<script>
        alert("El correo ya esta registrado");
        window.history.go(-1);
    </script>';
    exit;
}

$verificar_RFC = mysqli_query($conexion, "SELECT * FROM  tblproveedores WHERE RFC = '$RFC'");
if(mysqli_num_rows($verificar_RFC) > 0){
    echo '<script>
        alert("El RFC ya esta registrado");
        window.history.go(-1);
    </script>';
    exit;
}


$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo 'Error al registrarse';
} else{
    echo '<script>
        alert("El proveedor ha sido registrado exitosamente");
        window.history.go(-1);
    </script>';
}


mysqli_close($conexion);
