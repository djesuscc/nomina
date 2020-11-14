<?php 
require_once('../db/conexion.php');
include('../functions/uses.php');

$correo = sanitizeInputs($_POST["email"]);
$pass = sanitizeInputs($_POST["password"]);

echo $correo;
echo $pass;

$sql = "SELECT id, password FROM usuarios WHERE email='$correo'";
$result = mysqli_query($con, $sql);
if($result) {
    if (mysqli_num_rows($result) > 0) {
        $result = $result->fetch_assoc();
        if ($pass != $result['password']) {
            header('Location: ' . $_SERVER['HTTP_REFERER'], true);
        } else {
            session_start();
            $_SESSION["id"] = $result["id"];
            redirect('/home.php');
        }
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER'], true);
    }
} else {
    echo("Error description: " . mysqli_error($con));
}

?>