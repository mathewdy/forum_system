<?php
ob_start();
include('../connection.php');
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/app.css">
    <title>Document</title>
</head>
<body style="background: rgba(0, 0, 0, 0.9);">
    <div class="container d-flex justify-content-center align-items-center" style=" height: 50em;">
        <div class="card bg-dark w-50 p-5">
            <h1 class="pb-4" style="color:rgba(255,255,255,0.6);">Registration</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="">First Name</label>
                <br>
                <input type="text" class="form-control" name="first_name">
                <br>
                <label for="">Last Name</label>
                <br>
                <input type="text" class="form-control" name="last_name">
                <br>
                <label for="">Image</label>
                <br>
                <input type="file" class="form-control" name="image">
                <br>
                <label for="">Username</label>
                <br>
                <input type="text" class="form-control" name="username">
                <br>
                <label for="">Password</label>
                <br>
                <input type="password" class="form-control" name="password">
                <br>
                <input type="submit" name="register" class="btn btn-primary" value="Create Account">
            </form>
            <span class="col-lg-7 col-md-12 d-flex justify-content-between align-items-center" style="z-index: 111111;">
                    <a href="login.php" class="registration">Log in</a>
                </span>
        </div>
    </div>
    <script src="../src/js/app.js"></script>
</body>
</html>

<?php
if(isset($_POST['register'])){


    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    $user_id = "2022".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;
    $user_type = '1';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_password = password_hash($password,PASSWORD_DEFAULT);
    //image
    $image = $_FILES['image']['name'];

    $query_check = "SELECT * FROM users WHERE username='$username'";
    $run_check = mysqli_query($conn,$query_check);
    
    if(mysqli_num_rows($run_check) > 0){
        echo "<script>alert('Unit Already Added')</script>";
        exit();
    }

    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension,$allowed_extension)){
        echo "<script>alert('File not allowed'); </script>";
        echo "<script>window.location.href='Registration.php'</script>";
    }else{
        
        if(file_exists("uploads/" .$_FILES['image']['name'])){
            $filename = $_FILES['image']['name'];
        }else{
            $query_registration = "INSERT INTO users (user_id,first_name,last_name,image,username,password,user_type,date_time_created,date_time_updated) VALUES ('$user_id','$first_name', '$last_name', '$image', '$username', '$new_password', '$user_type' , '$date $time' , '$date $time')";
            $run_sql = mysqli_query($conn,$query_registration);
            $_SESSION['user_id'] = $user_id;

            if($run_sql){
                move_uploaded_file($_FILES["image"]["tmp_name"], "../users/uploads/".$_FILES["image"]["name"]);
                echo "<script>window.location.href='question.php'</script>";
            }else{
                echo "error" . $conn->error;
            }
        }
    }

}
ob_end_flush();

?>