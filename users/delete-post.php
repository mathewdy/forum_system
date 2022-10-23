<?php
include('../connection.php');
session_start();
ob_start();



if(isset($_GET['user_id']) && isset($_GET['topic_id'])){
    $user_id = $_GET['user_id'];
    $topic_id = $_GET['topic_id'];

    
    $sql = "DELETE FROM posts WHERE user_id = '$user_id' AND topic_id = '$topic_id'";
    $run = mysqli_query($conn,$sql);

    if($run){
        echo "<script>window.location.href='home.php' </script>";
    }else{
        echo "error". $conn->error;
    }
}
?>