<?php
include 'cn.php';
$nombre = $_POST["mar_nombre"];
//$estatus = $_POST["estatus"];//
$insertar = "INSERT INTO tblmarcas(mar_nombre, mar_estatus) VALUES ('$nombre',
 1)";

$verificar = mysqli_query($conexion, "SELECT * FROM  tblmarcas WHERE mar_nombre = '$nombre'");
if(mysqli_num_rows($verificar) > 0){
    echo '<script>
        alert("La marca ya esta registrado");
        window.history.go(-1);
    </script>';
    exit;
}
/*
$verificar_correo = mysqli_query($conexion, "SELECT * FROM  usuarios WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '<script>
        alert("El correo ya esta registrado");
        window.history.go(-1);
    </script>';
    exit;
}
*/



//Ejecuta la consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo 'Error al registrarse';
} else{
    echo '<script>
        alert("La marca ha sido registrada exitosamente");
        window.history.go(-1);
    </script>';
}
//cerrar conexion
mysqli_close($conexion);
