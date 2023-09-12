<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
/*Variabe contrasena para encriptar la contraseña con el algoricto de encriptamiento (sha512) */
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

/*Verificar que el correo no se repita en la base de datos*/


$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
  echo '
    <script>
    alert("Este correo ya esta registrado intenta con uno diferente");
    window.location = "../index1.php";
    </script>  
    ';
  exit();
}

/*Verificar que el nombre de usuario no se repita en la base de datos*/

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
  echo '
    <script>
    alert("Este Usuario ya esta registrado intenta con uno diferente");
    window.location = "../index1.php";
    </script>  
    ';
  exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
  echo '
    <script>
      alert("Usuario registrado exitosamente");
      window.location = "../index1.php";
    </script>  
    ';
} else {
  echo '
    <script>
      alert("Intentalo nuevamente Usuario no registrado");
      window.location = "../index1.php";
    </script>  
    ';
}

mysqli_close($conexion);
?>