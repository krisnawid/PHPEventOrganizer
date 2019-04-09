<html>
    <?php
    include 'headerAdmin.php';
    $idEv = $_GET["id"];

    $query = "SELECT * FROM tb_events WHERE idev = $idEv";

    $result = mysqli_query($con, $query);

    $item = '';
    if(mysqli_num_rows($result) == 1) {
        $item = mysqli_fetch_assoc($result);
        $idkat = $item["id_kategori"];
        $idtip = $item["id_type"];

        $query1 = "SELECT * FROM tb_tiket WHERE idev = $idEv";
        $result1 = mysqli_query($con, $query1);
        $row = mysqli_fetch_assoc($result1);

    } else {
        echo "Barang tidak ditemukan";
    }
    ?>
    <body>
    <div class="container">
        <h2 class="mt-3 text-center">Form Tambah Events</h2>
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="./process/actionEditEvAdmin.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="idev" id="idev" value="<?php echo $idEv ?>">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Events</label>
                        <div class="col-md-9">
                            <input type="text" name="nameev" id="nameev" class="form-control" placeholder="Nama Events" value="<?php echo $item["nameev"] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">id user</label>
                        <div class="col-md-9">
                            <input type="number" name="iduser" id="iduser" class="form-control" placeholder="id user" value="<?php echo $item["iduser"] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">id kategori</label>
                        <div class="col-md-9">
                            <input type="number" name="idkategori" id="idkategori" class="form-control" placeholder="id kategori" value="<?php echo $item["id_kategori"] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">id tipe</label>
                        <div class="col-md-9">
                            <input type="number" name="idtype" id="idtype" class="form-control" placeholder="id tipe" value="<?php echo $item["id_type"] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">qty</label>
                        <div class="col-md-9">
                            <input type="number" name="qty" id="qty" class="form-control" placeholder="qty" value="<?php echo $row["jumlah_tk"] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Harga Tiket</label>
                        <div class="col-md-9">
                            <input type="number" name="pricetk" id="pricetk" class="form-control" placeholder="pricetk" value="<?php echo $row["price_tk"] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">date event</label>
                        <div class="col-md-9">
                            <input type="text" name="dateev" id="dateev" class="form-control" placeholder="date event" value="<?php echo $row["dateev"] ?>" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Venue</label>
                        <div class="col-md-9">
                            <input type="text" name="venue" id="venue" class="form-control" placeholder="Venue" value="<?php echo $item["venue"] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Location detail</label>
                        <div class="col-md-9">
                            <input type="text" name="locdetail" id="locdetail" class="form-control" placeholder="Location Details" value="<?php echo $item["locdetail"] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Event's Details</label>
                        <div class="col-md-9">
                            <input type="text" name="evdetails" id="evdetails" class="form-control" placeholder="Event Details" value="<?php echo $item["evdetails"] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <img src="./process/<?php echo $item["image"] ?>" style="width:250;height:200;" >
                        <label class="col-sm-5 col-form-label">Upload Gambar</label>
                        <div class="col-sm-4">
                            <input type="file" name="file">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-4">
                            <a name="backBtn" id="backBtn" class="btn btn-dark btn-block" href="formAdmin.php" role="button">Kembali</a>
                        </div>
                        <div class="col-md-4">
                            <!-- <button name="clearFormBtn" id="clearFormBtn" class="btn btn-warning btn-block" role="button" onclick="clearForm()">Clear</button> -->
                        </div>
                        <div class="col-md-4">
                            <input type="submit" name="tambah" class="btn btn-success btn-block" value="update"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script>
        function clearForm() {
            $('#nameev').val('');
            $('#iduser').val('');
            $('#evdetails').val('');
        }
    </script>
    <body>
</html>