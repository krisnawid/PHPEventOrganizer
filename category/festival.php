<html>
<head>
    <?php include './header.php' ?>
</head>
<body>
    <body>
        <div class="container-fluid bg-white mt-5" style="padding-top:60px;padding-bottom:0px">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-3">
                    <p class="ini-quicksand">All event in every place, that's so fun</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-11">
                    <b>
                        <h1>Festival</h1>
                    </b>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-1">

                </div>
                <div class="col-md-5">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam sapiente labore deleniti ipsum beatae odio in, maxime dolores provident obcaecati mollitia. Corrupti fugiat unde quasi ipsa consequuntur. Exercitationem, quis!
                    </p>
                    <hr class="my-4">
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-5">
                    <h1 class="ini-quicksand" style="font-size:100px">OSem</h1>
                </div>
            </div>
        </div>
    <div class="container bg-white mt-5" style="padding-top:0px;padding-bottom:70px">
        <div class="row">
            <?php
                        $query = "SELECT * FROM tb_events WHERE id_kategori = 4 ";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result)>0) {
                            // $index = 1;
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col-4 d-flex align-items-stretch mb-3">
                                        <div class="card">
                                            <img class="card-img-top" src="../admin/process/<?php echo $row["image"]; ?>" width="260" height="260" alt="Card image cap">
                                            <div class="card-body d-flex justify-content-end flex-column">
                                                <h5 class="card-title"><?php echo $row["nameev"]; ?></h5>
                                                <p class="card-text text-truncate"><?php echo $row["evdetails"]; ?></p>
                                                <div class="d-flex justify-content-between">
                                                    <a href="../detailEvent.php?id=<?php echo $row["idev"]; ?>" class="btn btn-primary">Go Here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                <?php
                            }
                        } else{?>
                            <h1>Kosong</h1>
                            <?php
                        }
                    ?>
            
        </div>
    </div>
    <?php include './footer.php' ?>
</body>
</html>