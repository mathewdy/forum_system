<?php
include('../connection.php');
session_start();
ob_start();



if(isset($_GET['topic_id'])){
    $topic_id = $_GET['topic_id'];

    
    $sql = "DELETE FROM posts WHERE topic_id = '$topic_id'";
    $run = mysqli_query($conn,$sql);

    if($run){
        echo "<script>window.location.href='index.php' </script>";
    }else{
        echo "error". $conn->error;
    }
}
?>