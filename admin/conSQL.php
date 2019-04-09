<?php
    define("HOST", "localhost");
    define("UNAME", "root");
    define("PASS", "");
    define("DB", "db_osem");
 
    $con = mysqli_connect(HOST,UNAME,PASS,DB);

    if (!$con) {
        echo "Failed to connect to MySQL: " . mysqli_connection_errno();
        die();
    }

    echo "sukses";
?>