<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css"
    <title></title>
</head>
<body>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
        <a class="navbar-brand" href="./index.php">Tutify</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav custom-nav  pl-5"> 
                <a class="nav-item nav-link active custom-nav-item" href="index.php">Home </a>
                <a class="nav-item nav-link custom-nav-item" href="#">Courses</a>
                <a class="nav-item nav-link custom-nav-item" href="#">My Profile</a>
                <a class="nav-item nav-link custom-nav-item" href="#">Logout</a>
                <a class="nav-item nav-link custom-nav-item" href="#">Signup</a>
                <a class="nav-item nav-link custom-nav-item" href="#">Contact</a>
            </div>
        </div>
    </nav>
    <!-- end navigation -->

    <!-- start video bg-->
    <div class="container-fluid remove-vid-marg">
        <div class = "vid-parent">
        <div class="vid-overlay"></div>
            <video playsinline autoplay muted loop> 
                <source src=./video/Education.mp4
            </video>
        </div>
        <div class="vid-content">
            <h1 class="my-content"> Welcome to Tutify </h1>
            <small class="my-content">Finding tutors made easy</small><br>
            <a href="#" class="btn btn-danger">Get Started </a>
        </div>

    </div>
    <!-- end video bg-->
    <!-- start text banner -->
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>100+ subjects</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>Expert instructors</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>Lifetime access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-rupee-sign mr-3"></i>Money back guarantee*</h5>
            </div>
        </div>
    </div>
    <!-- end text banner -->
    <!-- start tutor list -->
    <div class="container mt-5">
    <h1 class="text-center">Meet our tutors</h1>
        <!-- start most popular tutor 1st card deck -->
        <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align:left;padding:0px;margin:0px;">
                <div class="card">
                    <img src="./image/man.png" class="card-img-top" alt="tutor1">
                    <div class="card-body">
                        <h5 class="card-title">Mr.Suresh Nair (Phd Maths)</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card- text d-inline">Price: <small><del>&#8377 2000 </del></small>
                        <span class="font-weight-bolder">&#8377 1500<span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a><a href="#" class="btn" style="text-align:left;padding:0px;margin:0px;">
                <div class="card">
                    <img src="./image/man.png" class="card-img-top" alt="tutor1">
                    <div class="card-body">
                        <h5 class="card-title">Mr.Suresh Nair (Phd Maths)</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card- text d-inline">Price: <small><del>&#8377 2000 </del></small>
                        <span class="font-weight-bolder">&#8377 1500<span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a><a href="#" class="btn" style="text-align:left;padding:0px;margin:0px;">
                <div class="card">
                    <img src="./image/man.png" class="card-img-top" alt="tutor1">
                    <div class="card-body">
                        <h5 class="card-title">Mr.Suresh Nair (Phd Maths)</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card- text d-inline">Price: <small><del>&#8377 2000 </del></small>
                        <span class="font-weight-bolder">&#8377 1500<span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a>
        </div>
        <!-- end most popular tutor 1st card deck -->
        <!-- start most popular tutor 2nd card deck -->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="./image/woman.png" class="card-img-top" alt="tutor2">
                    <div class="card-body">
                        <h5 class="card-title">Miss Shilpa Anant(pcm honors)</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card- text d-inline">Price: <small><del>&#8377 1000 </del></small>
                        <span class="font-weight-bolder">&#8377 750<span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="./image/woman.png" class="card-img-top" alt="tutor2">
                    <div class="card-body">
                        <h5 class="card-title">Miss Shilpa Anant(pcm honors)</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card- text d-inline">Price: <small><del>&#8377 1000 </del></small>
                        <span class="font-weight-bolder">&#8377 750<span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="./image/woman.png" class="card-img-top" alt="tutor2">
                    <div class="card-body">
                        <h5 class="card-title">Miss Shilpa Anant(pcm honors)</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card- text d-inline">Price: <small><del>&#8377 1000 </del></small>
                        <span class="font-weight-bolder">&#8377 750<span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a>
        </div>
        <!-- end most popular tutor 2nd card deck -->
        <div class="text-center m-2">
            <a class="btn btn-danger btn-sm" href="#">View all tutors</a>
        </div>
    </div>
    <!-- end list -->
    <?php
        echo "";
    ?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/all.min.js"></script>
</body>
</html>