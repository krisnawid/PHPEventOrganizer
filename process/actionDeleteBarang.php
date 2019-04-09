<?php
    include '../helper/connection.php';

    $idBarang = $_GET["id"];

    $query = "UPDATE tb_barang SET flag = 0 WHERE id_barang = $idBarang";

    if (mysqli_query($con, $query)) {
        header("Location:../index.php");
    } else {
        $error = urldecode("Data tidak berhasil di delete");
        header("Location:../index.php?error=$error");
    }

    mysqli_close($con);
?>