<html>
    <?php include 'header.php'?>
    <body>
        <div class="container-fluid bg-white mt-5" style="padding-top:60px;padding-bottom:70px">
            <form class="form-register" action="./process/actionRegister.php" method="POST">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3 ini-quicksand text-center ml-5">
                        <h1 class="text-center ini-quicksand" style="color:blue;">OSem</h1>
                        <h2 class="">Welcome</h2>
                        <p class="" style="font-size:20px;" >Create an Account's</p>
                        <input type="text" name="username" id="username" class="form-control mb-3" placeholder="Insert Username" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3 ini-quicksand text-center ml-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="firstname" id="firstname" class="form-control mb-2" placeholder="Firstname" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3 ini-quicksand text-center ml-5">
                        <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Insert Password" required>
                        <hr>
                        <small>By signing up, I agree to Osem's terms of service, privacy policy, and community guidelines.</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3 ini-quicksand text-center ml-5">
                        <button class="btn btn-lg btn-primary btn-block mt-4 mb-4 ini-quicksand" type="submit" name="submit">register</button>
                    </div>
                </div>
            </form>
        </div>
    <hr>
    <?php include 'footer.php'?>
    </body>
</html>