<html>
    <?php include 'header.php'?>
    <body>
        <div class="container-fluid bg-white mt-5 ini-quicksand" style="padding-top:60px;padding-bottom:70px">
            <form action="admin/process/actionAddEventUser.php" method="POST" enctype="multipart/form-data" >
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <h1>Basic's Details</h1>
                        <p>Name your event and tell event-goers why they should come. Add details that highlight what makes it unique.</p>
                        <input type="text" name="nameev" id="nameev" class="form-control mb-3" placeholder="Name Events" required>
                        <input type="hidden" name="iduser" id="iduser" class="form-control mb-3" value="<?php echo $_SESSION["iduser"]; ?>">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-2">
                        <div>
                            <select class="form-control" placeholder="Type" width="50" name="idkategori" >
                                <option>Category</option>
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
                            <option>Type</option>
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
                        <input type="text" name="evdetails" id="evdetails" class="form-control mb-3" placeholder="Details Event" required>
                        <input type="number" name="pricetk" id="pricetk" class="form-control mb-3" placeholder="Price Ticket" required>
                        <input type="number" name="qty" id="qty" class="form-control mb-3" placeholder="Quantity Ticket" required>
                        <small>Event Date</small>
                        <input type="date" name="dateev" id="date" class="form-control mb-3" placeholder="Event Date Detail" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <!-- <label for="">Upload Image Event</label><br>
                        <input type="file" name="file"> -->
                        <label class="col-sm-5 col-form-label">Upload Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" name="file" id="file">
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
                            <option selected disable>Venue</option>
                            <option value="Online Event">Online Event</option>
                            <option value="To be announce">To be announce</option>
                        </select>
                        <input type="text" name="locdetail" id="locdetail" class="form-control mt-3 mb-5" placeholder="Detail Location" required>
                    </div>
                </div>
                <hr width="640">
                <div class="row mt-2">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <input type="submit" name="tambah" class="btn btn-outline-success btn-block" value="Save"/>
                    </div>
                </div>
            </form>
        </div>
    <hr>
    <script>
        var dateControl = document.querySelector('input[type="date"]');
        dateControl.value = '2017-06-01';
    </script>
    <?php include 'footer.php'?>
    </body>
</html>