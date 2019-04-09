<?php
    include 'conSQL.php';

    $idEv = $_GET["id"];

    $query = "DELETE FROM tb_events WHERE idev = $idEv";
    $query1 = "DELETE FROM tb_tiket WHERE idev = $idEv";

    if (mysqli_query($con, $query)) {
        mysqli_query($con, $query1);
        header("Location:../formAdmin.php");
    } else {
        $error = urldecode("Data tidak berhasil di delete");
        header("Location:../formAdmin.php?error=$error");
    }

    mysqli_close($con);
?>