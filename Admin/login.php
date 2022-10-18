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
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
    <label for="">Username</label>
    <br>
    <input type="text" name="username">
    <br>
    <label for="">Password</label>
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT  `username`, `password` FROM `admins` WHERE username = '$username'";
$run_sql = mysqli_query($conn,$sql);

if (mysqli_num_rows($run_sql)>0){
    while($row=mysqli_fetch_assoc($run_sql)){
        if($password == $row['password']){ 
            
            $_SESSION['admin'] = $username;
            echo '<script>alert("correct credentials")</script>'; 
            header("location: index.php");

            die();

            
        } 
        else{
            echo '<script>alert("Incorrect credentials")</script>' ; 
        }





}


}

}


?>