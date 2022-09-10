<?php
 include("cone.php");
 $nom=$_POST["iname"];
 $apel=$_POST["iapellido"];
 $emai=$_POST["iEmail"];
 $pass=$_POST["iContraseña"];
 $insert="INSERT INTO usuarios_web (Nombre, Apellido, Correo, Contraseña) Values ('{$nom}', '{$apel}', '{$emai}', '{$pass}')";
 if ($conexion->query($insert)===TRUE) {
    header('location: index.html');
 }else {
    echo "Fallo la conexion";
 }
?>