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
    <link rel="stylesheet" href="../src/css/app.css">
    <title>Document</title>
</head>
<style>
    input[name=login]:hover{
        color: rgba(255,255,255,0.6);
    }
</style>
<body style="background: rgba(0, 0, 0, 0.9); overflow: hidden;">
    <div class="container mb-1">
        <div class="row g-5 d-flex flex-column align-items-center justify-content-center mt-2 ">
            <div class="col-12 text-center">
                <img src="../src/img/photos/soul_inc_2.png" alt="" style="height:150px; padding:0; margin: 0;">
            </div>
            <div class="col-7">
                <form action="" method="POST" class="row container justify-content-center">
                    <div class="col-12 mb-4 text-center">
                        <label class="w-50 text-start" for="">Username</label>
                        <input type="text" name="username" class="w-50 py-xxl-2" style="outline: none;">
                    </div>
                    <div class="col-12 mb-4 text-center">
                        <label class="w-50 text-start" for="">Password</label>
                        <input type="password" name="password" class="w-50 py-xxl-2" style="outline: none;">
                    </div>
                    
                    <span class="col-7 d-flex justify-content-around align-items-center" style="z-index: 111111;">
                        <input type="submit" name="login" value="Log In" style="padding: 4px 20px; background: rgba(255,255,255,0.6); outline: none; border: none;">
                        <a href="registration.php" style="color:rgba(255,255,255,0.6); margin-left: 12px;">Create Account.</a>
                    </span>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#990000" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
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

            if($row['user_type'] == '0'){
                echo "<script>alert('di ka pwede bobo user ka'); </script>";
            }else{
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['user_id'] = $row ['user_id'];
                header("Location: index.php");
            }
          
        }
    }else{
        echo "User not found" . $conn->error;
    }
}

ob_end_flush();

?>