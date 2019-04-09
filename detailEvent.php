<?php
include 'header.php';
$id = $_GET["id"];

$query = "SELECT * FROM tb_events WHERE idev = $id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

$idkat = $row["id_kategori"];
$idtype = $row["id_type"];

$query1 = "SELECT * FROM tb_kategori WHERE id_kategori = $idkat";
$result1 = mysqli_query($con, $query1);
$row1 = mysqli_fetch_assoc($result1);

$query2 = "SELECT * FROM tb_type WHERE id_type = $idtype";
$result2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_assoc($result2);

$query3 = "SELECT * FROM tb_tiket WHERE idev = $id";
$result3 = mysqli_query($con, $query3);
$row3 = mysqli_fetch_assoc($result3);

$query4 = "SELECT * FROM tb_tiket WHERE idev = $id";
$result4 = mysqli_query($con, $query4);
$row4 = mysqli_fetch_assoc($result4);

$ininameev = $row["nameev"];
?>
<html>
    <body>
        <div class="container-fluid mt-5" style="padding-top:60px;padding-bottom:70px">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <h1 class="ini-quicksand text-center"><?php echo $ininameev ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6" >
                    <img src="admin/process/<?php echo $row["image"]; ?>" width="680" height="500">
                </div>
                <div class="col-lg-3">
                </div>
            </div>
            <div class="row ini-quicksand" style="padding-top:60px;padding-bottom:70px">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <h3>Event Details</h3>
                    <p><?php echo $row["evdetails"]; ?></p>
                    <br>
                    <h3>Category</h3>
                    <p><?php echo $row1["nama_kategori"]; ?></p>
                    <br>
                    <h3>Type</h3>
                    <p><?php echo $row2["nama_type"]; ?></p>
                    <br>
                    <h3>Date And Time Details </h3>
                    <p><?php echo $row3["dateev"]; ?></p>
                    <br>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Price Tickets</h3>
                                <p>Rp.<?php echo $row4["price_tk"] ?></p>
                            </div>
                            <div class="col-md-6">
                                <h3>Quantity</h3>
                                <p><?php echo $row4["jumlah_tk"] ?></p>
                            </div>  
                        </div> 
                    </div>
                    <hr>
                    <?php if (isset($username)) { ?>
                        <a href="getTiket.php?id=<?php echo $row["idev"]; ?>" class="btn btn-outline-success btn-block">Get Tickets Now</a>    
                    <?php } else { ?>
                        <a href="signin.php" class="btn btn-outline-success btn-block" >Get Tikets Now</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    <hr>
    <?php include 'footer.php'?>
    </body>
</html>