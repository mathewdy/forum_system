<?php
include('../connection.php');
session_start();
ob_start();



if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];

    
    $sql = "DELETE FROM users WHERE user_id = '$user_id' ";
    $run = mysqli_query($conn,$sql);

    if($run){
        echo "<script>window.location.href='members.php' </script>";
    }else{
        echo "error". $conn->error;
    }
}
?>