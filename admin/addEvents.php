<html>
    <?php include 'headerAdmin.php' ?>
    <body>
    <div class="container">
        <h2 class="mt-3 text-center">Form Tambah Events</h2>
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="process/actionAddEvents.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Events</label>
                        <div class="col-md-9">
                            <input type="text" name="nameev" id="nameev" class="form-control" placeholder="Nama Events" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">id user</label>
                        <div class="col-md-9">
                            <input type="number" name="iduser" id="iduser" class="form-control" placeholder="id user" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">id kategori</label>
                        <div class="col-md-9">
                            <input type="number" name="idkategori" id="idkategori" class="form-control" placeholder="id kategori" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">id tipe</label>
                        <div class="col-md-9">
                            <input type="number" name="idtype" id="idtype" class="form-control" placeholder="id tipe" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">qty</label>
                        <div class="col-md-9">
                            <input type="number" name="qty" id="qty" class="form-control" placeholder="qty" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Harga Tiket</label>
                        <div class="col-md-9">
                            <input type="number" name="pricetk" id="pricetk" class="form-control" placeholder="pricetk" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">date event</label>
                        <div class="col-md-9">
                            <input type="text" name="dateev" id="dateev" class="form-control" placeholder="date event" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Venue</label>
                        <div class="col-md-9">
                            <input type="text" name="venue" id="venue" class="form-control" placeholder="Venue" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Location detail</label>
                        <div class="col-md-9">
                            <input type="text" name="locdetail" id="locdetail" class="form-control" placeholder="Location Details" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Event's Details</label>
                        <div class="col-md-9">
                            <input type="text" name="evdetails" id="evdetails" class="form-control" placeholder="Event Details" required>
                        </div>
                    </div>
                    <div class="form-group row">
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
                            <button name="clearFormBtn" id="clearFormBtn" class="btn btn-warning btn-block" role="button" onclick="clearForm()">Clear</button>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" name="tambah" class="btn btn-success btn-block" value="Tambah"/>
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