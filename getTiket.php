<?php
include 'header.php';

$id = $_GET["id"];

$query = "SELECT * FROM tb_events WHERE idev = $id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

$query1 = "SELECT * FROM tb_user WHERE iduser = $iduser";
$result1 = mysqli_query($con, $query1);
$row1 = mysqli_fetch_assoc($result1);

$query2 = "SELECT * FROM tb_tiket WHERE idev = $id";
$result2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_assoc($result2);

$jumlahtk = $row2["jumlah_tk"];
$harga = $row2["price_tk"];
$nameuser = $row1["username"];
// $iduser = $row["iduser"];
$ininameev = $row["nameev"];
$idkat = $row["id_kategori"];
$idtype = $row["id_type"];
$idtiket = $row2["idtiket"];

?>

<html>
<style>
    .ada {
        visibility: hidden;
    }
</style>
    <body>
         <form action="admin/process/actionAddTiket.php" method="POST" >
            <div class="container-fluid bg-white mt-5" style="padding-top:60px;padding-bottom:70px">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8 ini-quicksand">
                            <h1 class="ini-quicksand text-center mb-4">Checkout You Our Ticket :)</h1>
                            <h3><?php echo $jumlahtk ?> Tickets Sale For You</h3>
                            <h3>1 Ticket = <?php echo $harga ?> IDR </h3>
                            <!-- <input type="number" class="form-control btn-block" name="qty" id="qty" value="" placeholder="Input Quantity Tickets" > -->
                            <input type="hidden" class="form-control btn-block" name="harga" value="<?php echo $harga ?>" id="harga" placeholder="Input You Money">
                            <small>Quantity Tickets</small>
                            <select class="form-control mb-2" name="qty" id="qty">
                                <option value="1">1</option>
                            </select>
                            <input type="number" class="form-control btn-block" name="uang" id="uang" placeholder="Input You Money">
                            <hr>
                            <small>Total Price Ticket</small>
                            <input type="text" class="form-control btn-block" value="" placeholder="Total Price" name="total" id="total" readonly>
                            <small>Cash Back</small>
                            <input type="text" class="form-control btn-block" value="" placeholder="Cash Back" name="kembalian" id="kembalian" readonly>
                        </div>
                    </div>
                    <div class="row padingenak mt-3">
                        <input type="hidden" name="iduser" value="<?php echo $iduser ?>">
                        <input type="hidden" name="idtiket" value="<?php echo $idtiket ?>">
                        <input type="hidden" name="idev" value="<?php echo $id ?>">
                        <input type="hidden" name="jumlah" value="<?php echo $jumlahtk ?>">
                        <div class="col-lg-10 text-right">
                            <a class="btn btn-outline-success" id="getnow">Get Now!</a>
                        </div>
                    </div>
                    <div class="row ada" id="invalid">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-6">
                            <p class="text-alert" style="color:red" >Invalid Money</p>
                        </div>
                    </div>
                    <div class="row padingenak mt-3">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-6 paddingenak ada" id="help">
                            <img src="admin/process/<?php echo $row["image"]; ?>" style="width:100%;height:250;"> <!-- tb_event -->
                        </div>
                        <div class="col-lg-2 bg-putih paddingenak border border-dark ada" id="help2">
                            <br>
                            <b><h5 class="ini-quicksand text-center" style="margin-left:5px"><?php echo $ininameev ?></h5></b> <!-- tb_event -->
                            <p class="text-center" name="namauser">Ticket For <?php echo $nameuser ?></p> <!-- tb_username -->
                            <br>
                            <div class="text-center">
                                <!-- <a href="getTiket.php?id=" name="idevent" class="btn btn-outline-success">Confrim Now</a> -->
                                <input class="btn btn-outline-success" type="submit" name="tambah" value="Confirm Now">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
         </form>
    <hr>
    <?php include 'footer.php'?>
    <script>
    var total = 0;
        $("select")
            .change(function() {
            var str = "";
            var price = "<?=$harga?>";
            $("select option:selected").each(function() {
                str += $(this).text();
                total += parseInt(str) * parseInt(price);
            });
            $("#total").val(total);
            }).change();

        $("#uang").keyup(function() {
            var value = $(this).val() - total;
            if (value < 0) {
                value = 0;
                $("#kembalian").val(value);
                $("#getnow").click(function () {
                    $("#invalid").removeClass("ada");
                    $("#help").addClass("ada");
                    $("#help2").addClass("ada");
                })
            }else{
                $("#kembalian").val(value);
                $("#getnow").click(function (){
                    $("#help").removeClass("ada");
                    $("#help2").removeClass("ada");
                    $("#invalid").addClass("ada");
                })
            }
        }).keyup();
    </script>
    </body>
</html>