<html>
    <?php include 'header.php'?>
    <body>
    <div id="" class="container-fluid bg-white mt-5" style="padding-top:60px;padding-bottom:70px">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <?php if (isset($username)) { ?>
                        <h1 type="hidden">You Must Be Login First</h1>
                    <?php } else { ?>
                        <!-- <h1 class="text-center ini-quicksand" style="color:red;">You Must Login First</h1>
                        <hr width="350" > -->
                    <?php } ?>
                    <h1 class="text-center ini-quicksand" style="color:blue;">OSem</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <b><h2 class="ini-quicksand text-center">Let's Get Started</h2></b>
                        <p>Insert your's email and password</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <form class="form-signin" action="./process/userLogin.php" method="POST">
                        <input type="text" name="username" class="form-control mb-2 ini-quicksand" placeholder="username">
                        <input type="password" name="password" class="form-control ini-quicksand" placeholder="password">
                        <button class="btn btn-lg btn-primary btn-block mt-4 mb-4 ini-quicksand" type="submit" name="submit">Login</button>
                        <p class="ini-quicksand" >Belum memiliki akun ? Silahkan <a href="register.php">register</a></p>
                    </form>
                </div>
                <div class="col-md-4">

                </div>
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
    <hr>
    <?php include 'footer.php'?>
    </body>
</html>