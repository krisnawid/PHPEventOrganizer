<?php
    include 'conSQL.php';

    $idEv = $_GET["id"];

    $query = "DELETE FROM tb_events WHERE idev = $idEv";
    $query1 = "DELETE FROM tb_tiket WHERE idev = $idEv";
    $query2 = "DELETE FROM tiket_user WHERE idev = $idEv";

    if (mysqli_query($con, $query)) {
        mysqli_query($con, $query1);
        mysqli_query($con, $query2);
        header("Location:../../organize.php");
    } else {
        $error = urldecode("Data tidak berhasil di delete");
        header("Location:../../organize.php?error=$error");
    }

    mysqli_close($con);
?>