<?php
session_start();
include('../connection.php');
if(empty($_SESSION['user_id'])){
    echo "<script>window.location.href='login.php' </script>";
}
$_SESSION['user_id'];
$user_id = $_SESSION['user_id'];

if(isset($_POST['update'])){
    $comment = $_POST['comment'];
    $comment_id = $_POST['comment_id'];
    $user_id = $_SESSION['user_id'];
    $topic_id = $_POST['topic_id'];
    $sql_update = "UPDATE threads SET comment = '$comment' WHERE comment_id = '$comment_id' AND user_id = '$user_id' ";
    $run_update = mysqli_query($conn,$sql_update);

    if($run_update){
        echo "<script>alert('Updated!') </script>";
        echo "<script>window.location.href='view-post.php?topic_id=$topic_id'; </script>";
    }else{
        echo "error" . $conn->error;
    }
}


ob_end_flush();
?>