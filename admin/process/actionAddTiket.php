<?php
    include 'conSQL.php';

    $id = $_POST["id"];

    if(isset($_POST["tambah"])){
        $iduser = $_POST["iduser"];
        $idtiket = $_POST["idtiket"];
        $idev = $_POST["idev"];

        $jumlahtk = $_POST["jumlah"];
        $kurang = $_POST["qty"];
        $qty = $jumlahtk - $kurang;

        $query1 = "UPDATE tb_tiket SET jumlah_tk = '$qty' ";

        $query = "INSERT INTO tiket_user (idtiket, iduser, idev)
        VALUE ('$idtiket', '$iduser', '$idev')";  

        // die($query);
        if (mysqli_query($con, $query)) {
            mysqli_query($con, $query1);
            header ("Location:../../organize.php");
        }else{
            $error = urldecode("Data Tidak Berhasil Ditambahkan");
            header("Location:../../getTiket.php?error = $error&id=$iduser");
        }
    }
?>
