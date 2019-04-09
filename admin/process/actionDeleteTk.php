<?php
    include 'conSQL.php';

    $idUt = $_GET["idut"];

    $query = "DELETE FROM tiket_user WHERE idut = $idUt";

    if (mysqli_query($con, $query)) {
        header("Location:../../organize.php");
    } else {
        $error = urldecode("Data tidak berhasil di delete");
        header("Location:../../organize.php?error=$error");
    }

    mysqli_close($con);
?>