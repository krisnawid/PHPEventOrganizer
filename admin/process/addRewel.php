<?php
    include 'conSQL.php';

        $code = $_FILES["file"]["error"];
            $error = "";
            $nameEvent = $_POST["nameev"];
            $idUser = $_POST["iduser"];
            $idkategori = $_POST["idkategori"];
            $idtype = $_POST["idtype"];
            $venue = $_POST["venue"];
            $locdetail = $_POST["locdetail"];
            $evDetails = $_POST["evdetails"];

            $nama_folder = "upload/";
            $tmp = $_FILES["file"]["tmp_name"];
            $nama_file = $_FILES["file"]["name"];
            $path = "$nama_folder/$nama_file";
            $target_file = $nama_folder . basename($_FILES["file"]["name"]);
            $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");

            if(!@$upload_check AND move_uploaded_file($tmp, $path)){
                $error = "Form Berhasil Di Proses";
            } else {
                header ("Location:../../createEvent.php");
            }

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $nama_folder)) {
                echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }

            $query = "INSERT INTO tb_events (nameev, iduser, evdetails, image, id_kategori, id_type, venue, locdetail)
            VALUE ('$nameEvent', '$idUser', '$evDetails', '$nama_file', '$idkategori', '$idtype', '$venue', '$locdetail')";

                if(mysqli_query($con, $query)){
                    header ("Location:../../organize.php");
                }else{
                    $error = urldecode("Data Tidak Berhasil Ditambahkan");
                    header ("Location:../../createEvent.php?error = $error");
                }
                $error = "Form Berhasil Di Proses";

    mysqli_close($con);
?>