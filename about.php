<?php
include('connection.php');
session_start();
if(isset($_SESSION['user_id'])){
    $_SESSION['user_id'];
    $user_id = $_SESSION['user_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="icon" type="image/x-icon" href="src/img/icons/favicon.ico">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="src/css/custom.css">
    <link rel="stylesheet" href="src/css/app.css">
    <title>Soul Inc.</title>
</head>
<body style="background: rgba(0, 0, 0, 0.9); overflow-x: hidden;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand py-0" href="#">
            <img src="src/img/photos/soul_inc_2.png" alt="" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto nav-pills">
            <li class="nav-item">
            <a class="nav-link  px-4"  href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-4" href="users/home.php">Forum</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active px-4" href="about.php" aria-current="page">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-4" href="contact.php">Contact us</a>
            </li>
            <?php 
                    
                    if(isset($user_id)){
                        ?>

                    <li class="nav-item dropdown">
                        <a class="nav-icon d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </a>

                        <a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle me-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <a class="dropdown-item text-light" href="users/profile.php?user_id=<?= $user_id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle me-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-light" href="logout.php">Log out</a>
                        </div>
                    </li>
                    <?php
                    }else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="users/registration.php">Sign up</a>
                        </li>
                        <?php
                    }
                    
                    ?>
        </ul>
        </div>
    </div>
</nav>
<div id="about" class="mt-5">
        <section>
            <div class="bg-dark text-center p-5">
                <p style="font-size:3em; padding:0;">About Us</p>
                <span class="px-2 py-0 m-0"><hr class="featurette-divider mt-0 pt-0"></span>
                <span class="row align-items-center justify-content-center mb-5">
                    <div class="col-xxl-4 col-sm-12 p-4 text-sm-center">
                        <img src="src/img/photos/ng.png" alt="" height="200" width="200">

                    </div>
                    <div class="col-lg-6 col-sm-12" style="text-align: justify; ">
                        <p style="font-size: 1.3em; color: rgba(255,255,255,0.6);">
                            Nicolei Games is a indie game studio founded by Fernando Nicolei Esperida when he was a 14 years old. During his high school days he created 3 mobile games and uploaded on Google Play Store. His successful game so far was the "Bulalord Extreme" that gathered 300k downloads from the Google Play Store last 2014.
                        </p>
                    </div>
                </span>
                <hr class="featurette-divider mt-0 pt-0">
                <h1 style="font-size:3em; font-family:'Bearskin-DEMO-Regular'; padding:0; color:rgba(255,255,255,0.6);">Members</h1>
                <span class="d-flex justify-content-center row p-lg-5">
                    <span class="col-xxl-4 col-md-6 col-sm-12 p-4">
                        <img src="src/img/photos/1.png" class="" alt="" height="200" width="200">
                        <p class="h1 my-0" style="color: rgba(255,255,255,0.6);">Aaron Sayson</p>
                        <p class="h5 py-0 my-0" style="color: rgba(255,255,255,0.6);">Level Designer</p>
                    </span>
                    <span class="col-xxl-4 col-md-6 col-sm-12 p-4">
                        <img src="src/img/photos/2.png" class="" alt="" height="200" width="200">
                        <p class="h1 my-0" style="color: rgba(255,255,255,0.6);">Jeff Balmori</p>
                        <p class="h5 py-0 my-0" style="color: rgba(255,255,255,0.6);">Programmer</p>
                    </span>
                    <span class="col-xxl-4 col-md-6 col-sm-12 p-4">
                        <img src="src/img/photos/3.png" class="" alt="" height="200" width="200">
                        <p class="h1 my-0" style="color: rgba(255,255,255,0.6);">Michael Reynoso</p>
                        <p class="h5 py-0 my-0" style="color: rgba(255,255,255,0.6);">3D Modeler</p>
                    </span>
                    <span class="col-xxl-4 col-md-6 col-sm-12 p-4">
                        <img src="src/img/photos/4.png" class="" alt="" height="200" width="200">
                        <p class="h1 my-0" style="color: rgba(255,255,255,0.6);">Christian Cernal</p>
                        <p class="h5 py-0 my-0" style="color: rgba(255,255,255,0.6);">Project Manager</p>
                    </span>
                    <span class="col-xxl-4 col-md-6 col-sm-12 p-4">
                        <img src="src/img/photos/5.png" class="" alt="" height="200" width="200">
                        <p class="h1 my-0" style="color: rgba(255,255,255,0.6);">Angelica Macatangay</p>
                        <p class="h5 py-0 my-0" style="color: rgba(255,255,255,0.6);">3D Modeler</p>
                    </span>
                </span>
                
            </div>
        </section>
    </div>
    <div class="footer">
        <section class="bg-dark py-4 text-center">
            <img src="src/img/photos/soul_inc.png" alt="" srcset="" style="height: 7em;">
            <p class="h3" style="font-family: 'Bearskin-DEMO-Regular'; color:rgba(255,255,255,0.6);">All Rights Reserved @ 2022</p>
        </section>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>