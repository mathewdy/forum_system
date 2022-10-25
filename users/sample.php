<?php

include('../connection.php');
ob_start();
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
    <h1>Register</h1>
    <form action="" method="POST">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" name="register" value="Register">
    </form>

 
</body>
</html>

<?php

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_password = password_hash($password,PASSWORD_DEFAULT);

    $sql = "INSERT INTO sample (username,password) VALUES ('$username', '$new_password')";
    $run = mysqli_query($conn,$sql);

    if($run){
        echo "added";
        echo "<script>window.location.href='sample1.php' </script>";
    }else{
        echo "error" . $conn->error;
    }
}



ob_end_flush();

?>