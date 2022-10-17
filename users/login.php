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
    <title>Document</title>
</head>
<body>
    <h1>Log In</h1>
    <form action="" method="POST">
        <label for="">Username</label>
        <br>
        <input type="text" name="username">
        <br>
        <label for="">Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" name="login" value="Log In">
        <a href="registration.php">No account? Register here.</a>
    </form>
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
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['user_id'] = $row ['user_id'];

            header("Location: home.php");
        }
    }else{
        echo "User not found" . $conn->error;
    }
}

ob_end_flush();

?>