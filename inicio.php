<<?php
include("db_connect.php");

$correo = "ignaciolovisa@gmail.com";
$correo = "juanelmisio@gmail.com";

$sql = "SELECT * FROM empleados WHERE correo = '$correo'";

$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>

<link rel="stylesheet" href="style.css">

<meta charset="UTF-8">
<title>Inicio</title>

</head>

<body>


<div class="card">

<div class="perfil">

<?php

if($resultado->num_rows > 0){

    $empleado = $resultado->fetch_assoc();

    echo "
        <h1>Perfil del empleado</h1>

        <p><b>ID:</b> ".$empleado["id"]."</p>

        <p><b>Nombre:</b> ".$empleado["nombre"]."</p>

        <p><b>Apellido:</b> ".$empleado["apellido"]."</p>

        <p><b>Correo:</b> ".$empleado["correo"]."</p>

        <p><b>Sueldo:</b> $".$empleado["sueldo"]."</p>
    ";

}else{

    echo "No existe un empleado con ese correo.";

}

?>

</div>


<div class="bienvenida">

<h1>Bienvenido</h1>

<p>Has iniciado sesión correctamente con Google.</p>

<button onclick="window.location.href='index.php'">
Cerrar Sesión
</button>

</div>


</div>


</body>
</html>