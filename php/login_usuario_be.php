<?php

session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo' 
and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION ['usuario'] = $corre;
    header("location: ../inicio.php");
    exit;
}else{
    echo '
    <script>
    alert("EL ususario no existe por favor verifique los datos introdicidos");
    window.location = "../index1.php";
    </script>  
    ';
    exit;
}

?>