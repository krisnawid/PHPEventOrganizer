<?php
    // include 'conSQL.php';

    // $id = $_POST["id"];

    // $nameEvent = $_POST["nameev"];
    // $idkategori = $_POST["idkategori"];
    // $idtype = $_POST["idtype"];
    // $venue = $_POST["venue"];
    // $locdetail = $_POST["locdetail"];
    // $evDetails = $_POST["evdetails"];

    // $query = "UPDATE tb_events SET nameev = '$nameEvent', evdetails = '$evDetails', id_kategori = '$idkategori', id_type = '$idtype', venue = '$venue', locdetail = '$locdetail' where idev = '$id' ";
    // // die($query);
    // if (mysqli_query($con, $query)) {
    //     header ("Location:../../organize.php");
    // }else{
    //     $error = urldecode("Data Tidak Berhasil Ditambahkan");
    //     header("Location:../../updateEv.php?error = $error&id=$id");
    // }
?>
<?php
    include 'conSQL.php';
    
    $id = $_POST["id"];

    if(isset($_POST["tambah"])){
        $code = $_FILES["file"]["error"];
        if($code === 0){
            $error = "";
            $nameEvent = $_POST["nameev"];
            $idkategori = $_POST["idkategori"];
            $idtype = $_POST["idtype"];

            $pricetk = $_POST["pricetk"];
            $qty = $_POST["qty"];
            $dateev = $_POST["dateev"];

            $venue = $_POST["venue"];
            $locdetail = $_POST["locdetail"];
            $evDetails = $_POST["evdetails"];
            $nama_folder = "upload";
            $tmp = $_FILES["file"]["tmp_name"];
            $nama_file = ($_FILES["file"]["name"]);
            $path = "$nama_folder/$nama_file";
            $ukuran = $_FILES["file"]["size"];
            $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");

            if(!in_array($_FILES["file"]["type"], $tipe_file)){
                $error = "Cek Kembali Ekstensi File Anda (*.jpeg, *.jpg, *.gif, *.png)";
                header("Location: ../../organize.php?error=$error");
                die();
            }

            if(!@$upload_check AND move_uploaded_file($tmp, $path)){
                // $query = "INSERT INTO tb_events (nameev, iduser, evdetails, image, id_kategori, id_type, venue, locdetail)
                // VALUE ('$nameEvent', '$idUser', '$evDetails', '$path', '$idkategori', '$idtype', '$venue', '$locdetail')";

                $query = "UPDATE tb_events SET nameev = '$nameEvent', evdetails = '$evDetails', id_kategori = '$idkategori', id_type = '$idtype', venue = '$venue', locdetail = '$locdetail', image = '$path' where idev = '$id' ";

                if(mysqli_query($con, $query)){
                    $idevanget = mysqli_insert_id($con);
                    
                    //mysqli_query($con, $query1);

                    $query1 = "UPDATE tb_tiket SET dateev = '$dateev', price_tk = '$pricetk', jumlah_tk = '$qty' WHERE idev = '$id' ";

                    // $query1 = "INSERT INTO tb_tiket (idev, dateev, price_tk, jumlah_tk)
                    // VALUE ('$id', '$dateev', '$pricetk', '$qty')";
                    if(mysqli_query($con, $query1)){
                        header ("Location:../../organize.php");
                    }else{
                        $error = urldecode("Tiket tidak ditambahkan");
                        header ("Location:../../updateEv.php?error = $error");
                    }
                }else{
                    $error = urldecode("Data Tidak Berhasil Ditambahkan");
                    header ("Location:../../updateEv.php?error = $idevanget");
                }

                $error = "Form Berhasil Di Proses";
            } 

        }else{
            $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
            header("Location: ../../updateEv.php?error=$error");
            die();
        }
    }

    mysqli_close($con);
?>