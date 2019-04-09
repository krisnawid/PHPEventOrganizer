<?php
    include '../helper/connection.php';

    $namaBarang = $_POST["namaBarang"];
    $hargaBarang = $_POST["hargaBarang"];
    $jumlah = $_POST["jumlah"];

    if(isset($_POST["tambah"])){
        $code = $_FILES["file"]["error"];
        if($code === 0){
            $error = "";
            $nama_folder = "upload";
            $tmp = $_FILES["file"]["tmp_name"];
            $nama_file = $_FILES["file"]["name"];
            $path = "$nama_folder/$nama_file";
            $ukuran = $_FILES["file"]["size"];
            $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");

            if(file_exists($path)){
                $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
                header("Location: ../index.php?error=$error");
                die();
            }

            else if(!@$upload_check AND move_uploaded_file($tmp, $path)){
                $error = "Form Berhasil Di Proses";
            }

            else if(!in_array($_FILES["file"]["type"], $tipe_file)){
                $error = "Cek Kembali Ekstensi File Anda (*.jpeg, *.jpg, *.gif, *.png)";
                header("Location: ../index.php?error=$error");
                die();
            }

        }else{
            $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
            header("Location: ../index.php?error=$error");
            die();
        }
    }

    $query = "INSERT INTO tb_barang (nama_barang, gambar, harga_barang, jml_barang)
            VALUE ('$namaBarang', '$path','$hargaBarang', '$jumlah')";


    if(mysqli_query($con, $query)){
        header ("Location:../index.php");
    }else{
        $error = urldecode("Data Tidak Berhasil Ditambahkan");
        header ("Location:../index.php?error = $error");
    }

    mysqli_close($con);
?>