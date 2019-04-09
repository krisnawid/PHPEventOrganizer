<?php
    include 'conSQL.php';

    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];

    $query = "INSERT INTO tb_user (firstname, lastname, username, password)
            VALUE ('$firstname', '$lastname','$username', '$password')";


    if(mysqli_query($con, $query)){
        header ("Location:../signin.php");
    }else{
        $error = urldecode("Data Tidak Berhasil Ditambahkan");
        header ("Location:../signin.php?error = $error");
    }

    mysqli_close($con);
?>