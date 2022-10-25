<?php

include('../connection.php');
session_start();
ob_start();
$_SESSION['username'];

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
    <h2>Update your password</h2>
    <form action="" method="POST">
        <input type="password" name="password">
        <input type="submit" name="update_password" value="Update Password">
    </form>
</body>
</html>

<?php

if(isset($_POST['update_password'])){
    $username = $_SESSION['username'];

    $password = $_POST['password'];
    $new_password = password_hash($password, PASSWORD_DEFAULT);

    $sql_update_password = "UPDATE users SET password = '$new_password' WHERE username = '$username'";
    $run = mysqli_query($conn,$sql_update_password);

    if($run){
        echo "<script>alert('Password Updated') </script>";
        echo "<script>window.location.href='login.php' </script>";
    }else{
        echo "error" . $conn->error;
    }

}

ob_end_flush();

?>