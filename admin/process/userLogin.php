<?php
include ('conSQL.php');
session_start();
$error = '';

if(!empty($_POST["username"]) || !empty($_POST["password"])) {
    # Get username and password from user
    $username = $_POST["username"];
    $password = $_POST["password"];

    # Write MySql Query
    $query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
    # Get the query result
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $level = $row["level"];

        if($level == 1) {
            $_SESSION["username"] = $username;
            $_SESSION["level"] = $level;
            header("Location: ../index.php");
        } else {
            $_SESSION["username"] = $username;
            $_SESSION["level"] = $level;
            header("Location: ../allevents.php");
        }
    } else {
        $error = urlencode("Username atau password salah!");
        header("Location: ../signin.php?pesan=$error");
    }

    # Close connection to database
    mysqli_close($con);

} else {
    echo "masuk";
    die();
    $error = urlencode("Username atau password kosong!");
    header("Location: ../signin.php?pesan=$error");
}