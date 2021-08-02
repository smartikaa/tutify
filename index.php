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
    
    <!-- end text banner -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/all.min.js"></script>
</body>
</html>