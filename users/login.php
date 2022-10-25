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
<style>
    input[name=login]:hover{
        color: rgba(255,255,255,0.6);
    }
</style>
<body style="background: rgba(0, 0, 0, 0.9); overflow-x: hidden;">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card bg-dark p-2">
                <div class="card-header bg-dark text-center pb-0 mb-0" style="border:none;">
                    <img src="../src/img/photos/soul_inc.png" alt="" style="max-height:150px;">
                </div>
                <form action="" method="POST" class="row d-flex justify-content-center p-5">
                    <div class="col-lg-7 col-md-12 mb-4 text-start-lg">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" style="outline: none;">
                    </div>
                    <div class="col-lg-7 col-md-12 mb-4 text-start">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" style="outline: none;">
                    </div>
                    
                    <span class="col-lg-7 col-md-12 d-flex justify-content-between align-items-center" style="z-index: 111111;">
                        <input type="submit" name="login" value="Log In" style="padding: 4px 20px; background: rgba(255,255,255,0.6); outline: none; border: none;">
                        <a href="registration.php" style="color:rgba(255,255,255,0.6); margin-left: 12px;">No account? Register here.</a>
                    </span>

                </form>
        </div>
    </div>
</body>
</html>


<?php
if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $run = mysqli_query($conn,$sql);

    if(mysqli_num_rows($run) > 0){
        foreach($run as $row){

            if($row['user_type'] == '1'){
                echo "<script>alert('User unavailable'); </script>";
            }
            else
            {

                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $row ['user_id'];
                header("Location: home.php");
                
            }
          
        }
    }else{
        echo "<script>alert('User not found'); </script>";
    }
}

// $_SESSION['username'] = $username;
// $_SESSION['password'] = $password;
// $_SESSION['user_id'] = $row ['user_id'];
// header("Location: home.php");
ob_end_flush();

?>

