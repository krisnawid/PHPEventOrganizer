<html>
<?php include 'header.php'?>
<body>
    <div id="" class="mt-5" style="">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Los_Angeles%2C_Winter_2016.jpg" alt="Los Angeles" width="100%" height="600">
                    <div class="carousel-caption" style="margin-bottom:100px;">
                        <h1 class="ini-quicksand" style="font-size:100px;">Do More What You Love</h1>
                        <p>We had such a great time in LA!</p>
                    </div>   
                </div>
                <div class="carousel-item">
                    <img src="https://www.fshsociety.org/wp-content/uploads/2018/06/cityscape-of-the-los-angeles-skyline-at-dusk-los-angeles-california-united-states-of-america-north-america-530065311-57924bb33df78c17348ace09.jpg" alt="Chicago" width="100%" height="600">
                    <div class="carousel-caption" style="margin-bottom:100px;">
                        <h1 class="ini-quicksand" style="font-size:100px;">Never Do Nothing Again</h1>
                        <p>Thank you, Chicago!</p>
                    </div>   
                </div>
                <div class="carousel-item">
                    <img src="https://web.tplgis.org/wp-content/uploads/2018/01/Echo_Park_Lake_with_Downtown_Los_Angeles_Skyline.jpg" alt="New York" width="100%" height="600">
                    <div class="carousel-caption" style="margin-bottom:100px;">
                        <h1 class="ini-quicksand" style="font-size:100px;">Make You Day OSEM</h1>
                        <p>We love the Big Apple!</p>
                    </div>   
                </div>
            </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
        </div>
    </div>
    <div id="about" class="container-fluid bg-white" style="padding-top:60px;padding-bottom:70px">
        <div class="">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <div class="text-align-left">
                        <h2 class="ini-gillsandstd">Let's Get Started Today <br>  In Mood For....</h2>
                        <h3></h3>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <button onclick="window.location.href='./category/conference.php'" class="btn btn-outline-primary ml-5">Conference</button>
                        <button onclick="window.location.href='./category/forum.php'" class="btn btn-outline-primary ml-5">Forum</button>
                        <button onclick="window.location.href='./category/talkshow.php'" class="btn btn-outline-primary ml-5">Talkshow</button>
                        <button onclick="window.location.href='./category/festival.php'" class="btn btn-outline-primary ml-5">Festival</button>
                        <button onclick="window.location.href='./category/general.php'" class="btn btn-outline-primary ml-5">General</button>
                        <button onclick="window.location.href='./category/other.php'" class="btn btn-outline-primary ml-5">Other</button>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 mt-4 ini-quicksand text-center">
                <b>
                    <h1>Most Recently... </h1>
                    <div class="row">
                        <?php
                                    $query = "SELECT * FROM tb_events LIMIT 3";
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
                                                                <a href="detailEvent.php?id=<?php echo $row["idev"]; ?>" class="btn btn-primary">Go Here</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                            <?php
                                        }
                                    }
                                ?>
                        
                    </div>
                </b>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <br>
                        <i class="fab fa-facebook-square fa-3x mr-5"></i>
                        <i class="fab fa-github-square fa-3x mr-5"></i>
                        <i class="fab fa-instagram fa-3x mr-5"></i>
                        <i class="fab fa-twitter-square fa-3x mr-5"></i>
                        <i class="fab fa-linkedin-square fa-3x"></i>
                        <i class="fab fa-whatsapp-square fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="skill" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
        <div class="row">
            <div class="col-md-2">
                <h1 class="ini-quicksand">MEDIA PARTNER </h1>
            </div>
            <div class="col-md-3 ml-5">
                <p>Skill saya selama kuliah di polinema cukup banyak namun pada skill icon di samping merupakan hal
                    yang pernah saya pelajari. namun beberapa bahasa pemrograman yang pernah saya pelajari yang saya
                    tahu merupakan sebatas basic saja.</p>
            </div>
            <div class="col-md-6">
                <i class="fab fa-html5 fa-5x mr-2"></i>
                <i class="fab fa-css3-alt fa-5x mr-2"></i>
                <i class="fab fa-js fa-5x mr-2"></i>
                <i class="fab fa-php fa-5x mr-2"></i>
                <i class="fab fa-java fa-5x mr-2"></i>
                <i class="fab fa-laravel fa-5x mr-2"></i>
            </div>
        </div>
    </div>
    <div id="hobby" class="container-fluid bg-hobby" style="padding-top:70px;padding-bottom:70px">
        <div class="row">
            <div class="col-md-2">
                <h1 class="ini-quicksand text-light">RECENTLY EVENTS </h1>
            </div>
            <div class="col-md-3 ml-5">
                <h3 class="ini-quicksand font-weight-bold text-light">FISHERMAN</h3>
                <p>Memancing merupakan hobby saya yang paling bawah namun saya suka memancing. dikarenakan memancing
                    mempunyai feels yang saya rasa bisa menghidupkan beberapa intisari di dalam diri saya. dapat
                    dijadikan juga sebagai salah satu refreshing pada hidup saya </p>
                <br>
                <i class="fas fa-fish fa-10x mr-2"></i>
            </div>
            <div class="col-md-3">
                <h3 class="ini-quicksand font-weight-bold text-light">HIJAB FOUNDATION</h3>
                <p>Hijab merupakan suatu hal yang viral dikalang wanita. namun pada kalangan pria hijab foundation
                    dapat berupa skill, suatu hal yang dapat dinikmati, dan dapat dijadikan bahan perdagangan yang
                    menjadi suatu hobby. </p>
                <img src="./img/logo-hijab-02-trace.png" style="width: 40%;height: 30%;margin-left: 5px;color: aliceblue;">
            </div>
            <div class="col-md-3">
                <h3 class="ini-quicksand font-weight-bold text-light">YOUTUBER</h3>
                <p>Youtuber pada zaman berkembang ini banyak dilakukan pada semua kalangan mulai usia muda hingga usia
                    tua yang dapat dinikmati untuk semua orang. saya merambah di dunia youtube hanya sebatas hobby
                    seperti membuat tutorial dan share playlist lagu pada channel saya.</p>
                <i class="fab fa-youtube-square fa-10x"></i>
            </div>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>

</html>