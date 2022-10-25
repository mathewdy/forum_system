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
<form action="" method="POST">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php

if(isset($_POST['login'])){
 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_select = "SELECT * FROM sample WHERE username = '$username'";
    $run_select = mysqli_query($conn,$sql_select);

    if(mysqli_num_rows($run_select)> 0){
        while($row = mysqli_fetch_assoc($run_select)){
            if(password_verify($password, $row['password'])){
                
                $_SESSION['username'] = $username;
                echo "pasok";
                header("location: pasok.php");
            }else{
                echo "burat awlaa";
            }
        }
    }else{
        echo "wala sa nabangit";
    }
}
?>