<?php
    include 'conSQL.php';

    if(isset($_POST["tambah"])){
        $code = $_FILES["file"]["error"];
        if($code === 0){
            $error = "";

            $pricetk = $_POST["pricetk"];
            $qty = $_POST["qty"];
            $dateev = $_POST["dateev"];

            $nameEvent = $_POST["nameev"];
            $idUser = $_POST["iduser"];
            $idkategori = $_POST["idkategori"];
            $idtype = $_POST["idtype"];
            $venue = $_POST["venue"];
            $locdetail = $_POST["locdetail"];
            $evDetails = $_POST["evdetails"];
            $nama_folder = "upload";
            $tmp = $_FILES["file"]["tmp_name"];
            $nama_file = ($_FILES["file"]["name"]);
            $path = "$nama_folder/$nama_file";
            $ukuran = $_FILES["file"]["size"];
            $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");

            if(file_exists($path)){
                $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
                header("Location: ../formAdmin.php?error=$error");
                die();
            }

            if(!in_array($_FILES["file"]["type"], $tipe_file)){
                $error = "Cek Kembali Ekstensi File Anda (*.jpeg, *.jpg, *.gif, *.png)";
                header("Location: ../formAdmin.php?error=$error");
                die();
            }

            if(!@$upload_check AND move_uploaded_file($tmp, $path)){
                $query = "INSERT INTO tb_events (nameev, iduser, evdetails, image, id_kategori, id_type, venue, locdetail)
                VALUE ('$nameEvent', '$idUser', '$evDetails', '$path', '$idkategori', '$idtype', '$venue', '$locdetail')";
                // $query .= "INSERT INTO tb_tiket (idev, dateev, price_tk, jumlah_tk) VALUE ('$')"

                if(mysqli_query($con, $query)){
                    $idevanget = mysqli_insert_id($con);
                    
                    //mysqli_query($con, $query1);
                    $query1 = "INSERT INTO tb_tiket (idev, dateev, price_tk, jumlah_tk)
                    VALUE ('$idevanget', '$dateev', '$pricetk', '$qty')";

                    if (mysqli_query($con, $query1)) {
                        header ("Location:../formAdmin.php");
                    }else{
                        $error = urldecode("Tiket tidak ditambahkan");
                        header ("Location:../../createEvent.php?error = $error");
                    }
                }else{
                    $error = urldecode("Data Tidak Berhasil Ditambahkan");
                    header ("Location:../addEvents.php?error = $error");
                }
                $error = "Form Berhasil Di Proses";
            } 

        }else{
            $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
            header("Location: ../addEvents.php?error=$error");
            die();
        }
    }

    mysqli_close($con);
?>