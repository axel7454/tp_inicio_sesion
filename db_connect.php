<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empleadosv1";

try {

    $conn = new mysqli(
        $servername,
        $username,
        $password,
        $dbname
    );

    $conn->set_charset("utf8mb4");

} catch (Exception $e) {

    die("Error de conexión: " . $e->getMessage());

}

?>
