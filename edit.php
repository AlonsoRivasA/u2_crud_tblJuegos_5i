<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $nombre = $_POST['edit_nombre'];
    $descripcion = $_POST['edit_descripcion'];
    $genero = $_POST['edit_genero'];
    $fecha = $_POST['edit_fecha'];
    $precio = $_POST['edit_precio'];
    $clasificacion = $_POST['edit_clasificacion'];
    $desarrolladores = $_POST['edit_desarrolladores'];



    // query
    $sql = "UPDATE juegos SET nombre='$nombre', descripcion='$descripcion', genero='$genero', fecha='$fecha', precio='$precio', clasificacion='$clasificacion', desarrolladores='$desarrolladores' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
