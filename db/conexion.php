<?php
$con = mysqli_connect("localhost", "root", "", "sor");

if (!$con) {
    die("Falló la conexión: " . mysqli_connect_error());
}

?>