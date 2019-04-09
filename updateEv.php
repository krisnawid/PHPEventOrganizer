<html>
    <?php
    include 'header.php';
    
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
        <div class="container-fluid bg-white mt-5 ini-quicksand" style="padding-top:60px;padding-bottom:70px">
            <form action="admin/process/actionEditEv.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$idEv?>">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <h1>Basic's Details</h1>
                        <p>Name your event and tell event-goers why they should come. Add details that highlight what makes it unique.</p>
                        <input type="text" name="nameev" id="nameev" class="form-control mb-3" placeholder="Name Events" value="<?php echo $item["nameev"] ?>" required>
                        <input type="hidden" name="iduser" id="iduser" class="form-control mb-3" value="<?php echo $_SESSION["iduser"]; ?>">
                    </div>
                </div>
                <div class="row mt-4">`
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-2">
                        <div>
                            <select class="form-control" placeholder="Type" width="50" name="idkategori" >
                                <?php
                                $qkat = "SELECT * FROM tb_kategori WHERE id_kategori = $idkat";
                                $rkat = mysqli_query($con, $qkat);
                                while ($rk = mysqli_fetch_assoc($rkat)) {
                                ?>
                                <option name="idkategori" value="<?php echo $rk["id_kategori"] ?>"><?php echo $rk["nama_kategori"] ?></option>
                                <?php } ?>
                                <?php
                                $qkategori = "SELECT * FROM tb_kategori";
                                $rkategori = mysqli_query($con, $qkategori);
                                while ($rok = mysqli_fetch_assoc($rkategori)) {
                                ?>
                                <option name="idkategori" value="<?php echo $rok["id_kategori"] ?>"><?php echo $rok["nama_kategori"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" placeholder="Type" width="50" name="idtype">
                            <?php
                            $qtip = "SELECT * FROM tb_type WHERE id_type = $idtip";
                            $rtip = mysqli_query($con, $qtip);
                            while ($rt = mysqli_fetch_assoc($rtip)) {
                            ?>
                            <option name="idtype" value="<?php echo $rt["id_type"] ?>"><?php echo $rt["nama_type"] ?></option>
                            <?php } ?>
                            <?php
                            $qtype = "SELECT * FROM tb_type";
                            $rtype = mysqli_query($con, $qtype);
                            while ($rot = mysqli_fetch_assoc($rtype)) {
                            ?>
                            <option name="id_type" value="<?php echo $rot["id_type"] ?>"><?php echo $rot["nama_type"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                    
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <!-- <input type="text-area" name="evdetails" id="evdetails" class="form-control mb-3" placeholder="Details Event" value="<?php //echo $item["evdetails"] ?>" required> -->
                        <div class="form-group">
                            <label>Event Details</label>
                            <textarea class="form-control" rows="5" name="evdetails" id="evdetails" ><?php echo $item["evdetails"] ?></textarea>
                        </div>
                        <small>Price Tikets</small>
                        <input type="number" name="pricetk" id="pricetk" class="form-control mb-3" placeholder="Price Tiket" value="<?php echo $row["price_tk"] ?>" required>
                        <small>Quantity</small>
                        <input type="number" name="qty" id="qty" class="form-control mb-3" placeholder="Quantity" value="<?php echo $row["jumlah_tk"] ?>" required>
                        <label>Date Event</label>
                        <input type="text" name="dateev" id="dateev" class="form-control mb-3" placeholder="Name Events" value="<?php echo $row["dateev"] ?>" required>
                        <label class="col-sm-5 col-form-label">Upload Gambar</label>
                        <div class="col-sm-4">
                            <div>
                                <img src="./admin/process/<?php echo $item["image"] ?>" style="width:250;height:200;" >
                            </div>
                            <input type="file" name="file" id="file" >
                        </div>
                    </div>
                </div>
                <hr width="750" class="mt-4 mb-4">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <h1>Location Details</h1>
                        <p>Help people in the area discover your event and let attendees <br> know where to show up.</p>
                        <select class="form-control" style="width:270px;" name="venue" id="venue" >
                            <option value="<?php echo $item["venue"] ?>" ><?php echo $item["venue"] ?></option>
                            <option value="Online Event">Online Event</option>
                            <option value="To be announce">To be announce</option>
                        </select>
                        <input type="text" name="locdetail" id="locdetail" class="form-control mt-3 mb-5" placeholder="Detail Location" value="<?php echo $item["locdetail"] ?>" required>
                    </div>
                </div>
                <hr width="640">
                <div class="row mt-2">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <input type="submit" name="tambah" class="btn btn-outline-success btn-block" value="Save Change's"/>
                        <a name="backBtn" id="backBtn" class="btn btn-outline-danger btn-block" href="organize.php" role="button">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    <hr>
    <?php include 'footer.php'?>
    </body>
</html>