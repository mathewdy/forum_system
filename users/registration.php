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
<body>
    <h1>Registration</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">First Name</label>
        <br>
        <input type="text" name="first_name">
        <br>
        <label for="">Last Name</label>
        <br>
        <input type="text" name="last_name">
        <br>
        <label for="">Image</label>
        <br>
        <input type="file" name="image">
        <br>
        <label for="">Username</label>
        <br>
        <input type="text" name="username">
        <br>
        <label for="">Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" name="register" value="Create Account">
    </form>
    <script src="../src/js/app.js"></script>
</body>
</html>

<?php
if(isset($_POST['register'])){


    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    $user_id = "2022".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //image
    $image = $_FILES['image']['name'];

    $query_check = "SELECT * FROM users WHERE username='$username' AND password='$password'";
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
            $query_registration = "INSERT INTO users (user_id,first_name,last_name,image,username,password,date_time_created,date_time_updated) VALUES ('$user_id','$first_name', '$last_name', '$image', '$username', '$password' , '$date $time' , '$date $time')";
            $run_sql = mysqli_query($conn,$query_registration);

            if($run_sql){
                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES["image"]["name"]);
                echo "<script>alert('Registration Successful') </script>";
                echo "<script>window.location.href='Login.php'</script>";
            }else{
                echo "error" . $conn->error;
            }
        }
    }

}
ob_end_flush();

?>