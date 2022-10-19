<?php   
session_start();
include('../connection.php');

if(empty($_SESSION['user_id'])){
    echo "<script>window.location.href='login.php' </script>";
}



if(isset($_GET['user_id'])){

$user_id = $_GET['user_id'];




if(empty($user_id)){    // user verification starts here
    echo "<script>alert('user id not found');
    window.location = 'home.php';</script>";
    exit();
}




$verify_user_id = "SELECT `username` FROM `users` WHERE username = '$user_id'";
$run_verify_user_id = mysqli_query($conn,$verify_user_id);
if(mysqli_num_rows($run_verify_user_id) == 0){
    
    header("location: home.php");
    exit();


}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>


<?php

$view_profile = "SELECT `first_name`, `last_name`, `image` FROM `users` WHERE username = '$user_id'";
$run_profile = mysqli_query($conn,$view_profile);

if(mysqli_num_rows($run_profile) > 0){
    foreach($run_profile as $row){
        ?>

        <h2><?php echo $row['first_name']." ".$row['last_name']; ?> </h2>
       <img src="<?php echo "uploads/" . $row ['image']?>" alt="user image" height="100px" width="100px">
            
        <?php
    }
}

?>
</body>
</html>