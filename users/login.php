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
    @font-face {
        font-family: 'Bearskin-DEMO-Regular';
        src:url('../src/fonts/Bearskin/Bearskin-DEMO-Regular.ttf.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }
    body{
        font-family:'Times New Roman', Times, serif;
    }
    .nav-link{
        font-family: 'Bearskin-DEMO-Regular';
        font-size: 1.3em;
        letter-spacing: 2px;
    }
    .nav-link .active{
        background: #990000;
    }
    p{
        letter-spacing: 1px;
    }
    input[name=login]:hover{
        color: rgba(255,255,255,0.6);
    }
    label{
        letter-spacing: 1px;
        font-size: 1.5em;
        font-family:'Bearskin-DEMO-Regular';
    }
    .registration, .btn{
        font-family:'Bearskin-DEMO-Regular';
        letter-spacing: 1px;
        font-size: 1.5em;
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
            <a class="nav-link px-4" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active px-4" href="home.php" aria-current="page">Forum</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-4" href="../about.php">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-4" href="home.php">Contact us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-4" href="registration.php">Sign up</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center mt-4">
        <div class="card bg-dark py-5 px-0">
                <div class="card-header bg-dark text-center pb-0 mb-0" style="border:none;">
                    <img src="../src/img/photos/soul_inc.png" alt="" style="max-height:150px;">
                </div>
                <form action="" method="POST" class="row d-flex justify-content-center py-5 px-0">
                    <div class="col-lg-7 col-md-12 mb-4 text-start-lg">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" style="outline: none;">
                    </div>
                    <div class="col-lg-7 col-md-12 mb-4 text-start">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" style="outline: none;">
                    </div>
                    
                    <span class="col-lg-7 col-md-12 d-flex justify-content-between align-items-center" style="z-index: 111111;">
                        <input type="submit" name="login" value="Log In" class="btn btn-secondary px-4">
                        <a href="registration.php" class="registration">No account? Register here.</a>
                    </span>
                    
                </form>
        </div>
    </div>
</body>
</html>


<?php
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $run = mysqli_query($conn,$sql);

    if(mysqli_num_rows($run) > 0){
        foreach($run as $row){

            if($row['user_type'] == '1'){
                echo "<script>alert('User unavailable'); </script>";
            }else{
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['user_id'] = $row ['user_id'];
                header("Location: home.php");
            }
          
        }
    }else{
        echo "User not found" . $conn->error;
    }
}

ob_end_flush();

?>