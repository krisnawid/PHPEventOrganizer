<?php
    include '../helper/connection.php';

    $id = $_POST["idBarang"];
    $namaBarang = $_POST["namaBarang"];
    $hargaBarang = $_POST["hargaBarang"];
    $jumlah = $_POST["jumlah"];

    $query = "UPDATE tb_barang SET nama_barang = '$namaBarang', harga_barang = '$hargaBarang', jml_barang = '$jumlah' where id_barang = '$id' ";

    if (mysqli_query($con, $query)) {
        header ("Location:../index.php");
    }else{
        $error = urldecode("Data Tidak Berhasil Ditambahkan");
        header("Location:../index.php?error = $error");
    }
?>