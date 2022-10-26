<?php
include('../connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../src/img/icons/favicon.ico">
    <link rel="stylesheet" href="../src/css/custom.css">
    <link rel="stylesheet" href="../src/css/app.css">
    <title>Soul Inc.</title>
</head>
<style>
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
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5">
        <div class="card bg-dark py-lg-5 px-0">
                <div class="card-header bg-dark text-center pb-0 mb-0" style="border:none;">
                    <img src="../src/img/photos/soul_inc.png" alt="" style="max-height:150px;">
                </div>
                <form action="" method="POST" class="row d-flex justify-content-center py-lg-5 px-0">
                    <div class="col-lg-7 col-md-12 mb-4 text-start-lg">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" style="outline: none;">
                    </div>
                    <div class="col-lg-7 col-md-12 mb-4 text-start">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" style="outline: none;">
                    </div>
                    
                    <span class="col-lg-7 col-md-12 d-flex justify-content-between align-items-center mb-5" style="z-index: 111111;">
                        <input type="submit" name="login" value="Log In" class="btn btn-secondary px-4">
                        <a href="registration.php" class="registration">No account? Register here.</a>
                    </span>
                    <span class="col-lg-7 col-md-12 d-flex justify-content-between align-items-center" style="z-index: 111111;">
                        <a href="forgot-password.php" class="registration">Forgot Password?</a>
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

    $sql_select = "SELECT * FROM users WHERE username = '$username'";
    $run_select = mysqli_query($conn,$sql_select);

    if(mysqli_num_rows($run_select)> 0){
        while($row = mysqli_fetch_assoc($run_select)){
            if(password_verify($password, $row['password'])){
                if($row['user_type'] == '1'){
                    $_SESSION['user_id'] = $row ['user_id'];

                    $_SESSION['username'] = $username;
                    echo "pasok";
                    header("location: index.php");
                }else{
                    echo "<script>alert('User not allowed');</script>";
                }
            }else{
                echo "<script>alert('User does not exists'); </script>";
            }
        }
    }else{
        echo "<script>alert('User does not exists'); </script>";
    }
}
// if($row['user_type'] == '0'){
//     $_SESSION['user_id'] = $row ['user_id'];

//     $_SESSION['username'] = $username;
//     echo "pasok";
//     header("location: home.php");
// }else{
//     echo "<script>alert('User not allowed');</script>";
// }
ob_end_flush();

?>