<?php   
session_start();
include('../connection.php');

if(empty($_SESSION['user_id'])){
    echo "<script>window.location.href='login.php' </script>";
}

$user_id = $_SESSION['user_id'];

if(isset($_GET['user_id'])){

$user_id = $_GET['user_id'];




if(empty($user_id)){    // user verification starts here
    echo "<script>alert('user id not found');
    window.location = 'home.php';</script>";
    exit();
}




$verify_user_id = "SELECT `username` FROM `users` WHERE user_id = '$user_id'";
$run_verify_user_id = mysqli_query($conn,$verify_user_id);
if(mysqli_num_rows($run_verify_user_id) == 0){
    
    header("location: home.php");
    exit();


}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/app.css">
    <title>Profile</title>
</head>
<style>
   .image-upload>input {
    display: none;
    }
</style>
<body style="background: rgba(0, 0, 0, 0.9);">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand py-0" href="#">
                <img src="../src/img/photos/soul_inc_2.png" alt="" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto nav-pills">
                <li class="nav-item">
                    <a class="nav-link px-4" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active px-4" href="#" aria-current="page">Members</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-icon d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </a>

                    <a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle me-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                        <a class="dropdown-item text-light" href="profile.php?user_id=<?= $user_id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle me-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-light" href="logout.php">Log out</a>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container px-5">
        <div class="row pt-5 justify-content-center">
        <?php

        $view_profile = "SELECT `first_name`, `last_name`,  `username`, `image`, `user_id` FROM `users` WHERE user_id = '$user_id'";
        $run_profile = mysqli_query($conn,$view_profile);

        if(mysqli_num_rows($run_profile) > 0){
            foreach($run_profile as $row){
                ?>
                <div class="img-col col-12 mb-4 text-center">
                    <img class="mb-3" src="<?php echo "../users/uploads/" . $row ['image']?>" alt="user image" style="height: 250px; width: 250px; border-radius: 50%;">
                    <h2 style="color: rgba(255,255,255,0.6);"><?= ucfirst($row['username']);?></h2>
                </div>
                <hr class="featurette-divider">
                <div class="col-12 row gx-5 gy-3">
                    <h1 class="display-4" style="color: rgba(255,255,255,0.6);">Profile</h1>
                    <span class="col-lg-12 mb-2">
                        <label for="" class="h3" style="color: rgba(255,255,255,0.6);">First Name</label>
                        <input type="text" class="form-control" value="<?= ucfirst($row['first_name'])?>" readonly>
                    </span>
                    <span class="col-lg-12 mb-4">
                        <label for="" class="h3" style="color: rgba(255,255,255,0.6);">Last Name</label>
                        <input type="text" class="form-control" value="<?= ucfirst($row['last_name'])?>" readonly>
                    </span>
                    <span>
                        <a href="edit-profile.php?user_id=<?php echo $row ['user_id']?>" class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</a>
                    </span>
                </div>        

                <!-- Modal edit -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content card bg-dark">
                            <div class="modal-header" style="border:none;">
                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" style="color:white; border-radius: 50%;" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-3">
                            <form action="" method="POST" enctype="multipart/form-data">

                            <?php

                                if(isset($_GET['user_id'])){
                                    $user_id = $_GET['user_id'];



                                    $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
                                    $run = mysqli_query($conn,$sql);

                                    if(mysqli_num_rows($run) > 0){
                                        foreach ($run as $row){
                                            ?>
                                                    <span>
                                                        <label class="h6" style="color: rgba(255,255,255,0.6);" for="">Note: Once you updated your info, it will be automatically logged out.</label> 
                                                        
                                                    </span>
                                                    
                                                    <span>
                                                        <label class="h6" style="color: rgba(255,255,255,0.6);" for="">Username</label> 
                                                        <input type="text" class="form-control" name="username" value="<?php echo $row ['username']?>">
                                                    </span>
                                                    <span>
                                                        <label class="h6" style="color: rgba(255,255,255,0.6);" for="">Password</label> 
                                                        <input type="password" class="form-control" name="password" value="<?php echo $row ['password']?>">
                                                    </span>
                                                    <br>
                                                    
                                                    <label class="h6" style="color: rgba(255,255,255,0.6);" for="">First Name</label>
                                                    <br>
                                                    <input type="text" class="form-control" name="first_name" value="<?php echo $row ['first_name']?>">
                                                    <br>
                                                    <label for="" class="h6" style="color: rgba(255,255,255,0.6);">Last Name</label>
                                                    <br>
                                                    <input type="text" class="form-control" name="last_name" value="<?php echo $row ['last_name']?>">
                                                    <br>
                                                    <img src="<?php echo "../users/uploads/".$row['image']?>" width="100px" height="100px" alt="image" style="border-radius: 50%;">
                                                    <input type="file" name="image">
                                                    <input type="hidden" name="old_image" value="<?php echo $row ['image']?>">

                                                    <br>

                                            <?php
                                        }
                                    }

                                }


                                ?>
                            <div>
                            <div class="modal-footer" style="border:none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="update" class="btn btn-primary" value="Update">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
            }
        }

        ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- <script src="../src/js/app.js"></script> -->
</body>
</html>
<?php
if(isset($_POST['update'])){
    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_password = password_hash($password, PASSWORD_DEFAULT);

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != ''){
        $update_filename = $_FILES['image']['name'];
    }else{
        $update_filename = $old_image;
    }
    
    
    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension,$allowed_extension)){
        echo "<script>alert('File not allowed'); </script>";
        echo "<script>window.location.href='profie.php' </script>";
    }else{
        
        $query_update = "UPDATE users SET username = '$username', password = '$new_password', first_name = '$first_name' , last_name = '$last_name' , image= '$update_filename' WHERE user_id = '$user_id' ";
        $run_update = mysqli_query($conn,$query_update);

        if($run_update){
            move_uploaded_file($_FILES["image"]["tmp_name"], "../users/uploads/".$_FILES["image"]["name"]);
            unlink("../users/uploads/". $old_image);
            echo "<script>alert('Profile updated!') </script>";
            echo "<script>window.location.href='logout.php' </script>";
            // echo "<script>window.location.href='Units.php' </script>";
        }else{
            echo "error" . $conn->error;
        }
        
    }
}
?>