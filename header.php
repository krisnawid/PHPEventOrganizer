<?php
    session_start();
    @$username = $_SESSION["username"];
    @$level = $_SESSION["level"];
    @$iduser = $_SESSION["iduser"];
    include ('process/conSQL.php');
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>OSem</title>
    <link rel="stylesheet" href="./css/ini-bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li>
                <a href="index.php" style="margin-right: 150px;font-size: 40px;text-decoration:none;" class="ini-berlin">
                    OSem
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="allevents.php" style="margin-right: 80px;color: white;">All Events </a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="" style="margin-right: 80px;color: white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Help </a>
                    <div class="dropdown-menu transparana ini-quicksand" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="help.php">How It'Works</a>
                        <a class="dropdown-item" href="about.php">Contact Person OSem</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
            <?php if (isset($username)) { ?>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="createEvent.php" style="margin-right: 80px;color: white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create Event's </a>
                    <div class="dropdown-menu transparana ini-quicksand" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="createEvent.php">Make Event's</a>
                        <a class="dropdown-item" href="#">Resource</a>
                    </div>
                </div>
            <?php } else { ?>
                <a href="signin.php" class="nav-link" style="margin-right: 80px; color: white">Create Event's</a>
            <?php } ?>
            </li>
            <li class="nav-item">
                <?php if (isset($username)) {?>
                    <a class="nav-link" href="organize.php" style="margin-right: 80px; color: white">Organize </a>
                <?php } else { ?>
                    <a class="nav-link" href="signin.php" style="margin-right: 80px; color: white">Organize </a>
                <?php } ?>
            </li>
            <li class="nav-item">
            <?php if (isset($username)) { ?>
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" style="margin-right:50px;color:white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <span><?php echo @$username ?></span> </a>
                    <div class="dropdown-menu transparana ini-quicksand">
                        <a href="./process/userLogout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>
            <?php } else { ?>
                <a class="nav-link" href="signin.php" style="margin-right: 100px;color: white">Sign In </a>
            <?php } ?>
            </li>
        </ul>
    </nav>
</body>