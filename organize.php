<html>
    <?php include 'header.php'?>
    <body>
        <div class="container-fluid bg-white mt-5" style="padding-top:60px;padding-bottom:0px">
            <div class="container bg-white" style="padding-top:0px;padding-bottom:0px">
                <div class="row ini-quicksand">
                    <h1 class="ml-3">Organize Your Event's</h1>
                </div>
                <div class="row">
                    <hr width="500" class="ml-2">
                </div>                
            </div>
        </div>
        <div class="container bg-white mt-5" style="padding-top:0px;padding-bottom:10px">
            <div class="row">
            <?php
                        $query = "SELECT * FROM tb_events WHERE iduser = $iduser";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result)>0) {
                            // $index = 1;
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col-4 d-flex align-items-stretch mb-3">
                                        <div class="card">
                                            <img class="card-img-top" src="admin/process/<?php echo $row["image"]; ?>" width="260" height="260" alt="Card image cap">
                                            <div class="card-body d-flex justify-content-end flex-column">
                                                <h5 class="card-title"><?php echo $row["nameev"]; ?></h5>
                                                <p class="card-text text-truncate"><?php echo $row["evdetails"]; ?></p>
                                                <div class="d-flex justify-content-between">
                                                    <a href="updateEv.php?id=<?php echo $row["idev"]; ?>" class="btn btn-primary">Update Event</a>
                                                    <a href="admin/process/actionDeleteEv.php?id=<?php echo $row["idev"]; ?>" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                <?php
                            }
                        } else {
                    ?>
                    <h1 class="ml-3 ini-quicksand">Empty ...</h1>
                        <?php } ?>
            </div>
        </div>
        <div class="container-fluid bg-white mt-5" style="padding-top:0px;padding-bottom:0px">
            <div class="container bg-white" style="padding-top:0px;padding-bottom:0px">
                <div class="row ini-quicksand">
                    <h1 class="ml-3">Organize Your Ticket's</h1>
                </div>
                <div class="row">
                    <hr width="500" class="ml-2">
                </div>                
                <div class="row">
                <?php
                        $query = "SELECT * FROM tb_events e INNER JOIN tiket_user u ON e.idev = u.idev WHERE u.iduser = $iduser";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result)>0) {
                            // $index = 1;
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col-4 d-flex align-items-stretch mb-3">
                                        <div class="card">
                                            <img class="card-img-top" src="admin/process/<?php echo $row["image"]; ?>" width="260" height="260" alt="Card image cap">
                                            <div class="card-body d-flex justify-content-end flex-column">
                                                <h5 class="card-title"><?php echo $row["nameev"]; ?></h5>
                                                <p class="card-text text-truncate"><?php echo $row["evdetails"]; ?></p>
                                                <div class="d-flex justify-content-between">
                                                    <a href="detailEvent.php?id=<?php echo $row["idev"]; ?>" class="btn btn-primary">Look up Your Tiket</a>
                                                    <a href="admin/process/actionDeleteTk.php?idut=<?php echo $row["idut"]; ?>" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                <?php
                            }
                        } else {
                    ?>
                    <h1 class="ml-3 ini-quicksand">Empty ...</h1>
                        <?php } ?>
                </div>
            </div>
        </div>
    <hr>
    <?php include 'footer.php'?>
    </body>
</html>