<?php
include("./config.php");

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $genero = $_POST['genero'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $clasificacion = $_POST['clasificacion'];
    $desarrolladores = $_POST['desarrolladores'];

    $sql = "INSERT INTO juegos(nombre, descripcion, genero, fecha, precio, clasificacion, desarrolladores)
    VALUES('$nombre', '$descripcion', '$genero', '$fecha', '$precio', '$clasificacion','$desarrolladores')";
    $query = mysqli_query($db, $sql);

    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
