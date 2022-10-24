<?php

ob_start();
include('../connection.php');
session_start();

$user_id = $_SESSION['user_id'];

if(isset($_GET['comment_id'])){
    $comment_id = $_GET['comment_id'];

    $sql_fetch = "SELECT * FROM threads WHERE comment_id = '$comment_id'";
    $run_fetch = mysqli_query($conn,$sql_fetch);

    if(mysqli_num_rows($run_fetch) > 0){
        foreach($run_fetch as $row){

            $topic_id = $row ['topic_id'];

            $sql_delete = "DELETE FROM threads WHERE comment_id = '$comment_id'";
            $run_delete =  mysqli_query($conn,$sql_delete);

            if($run_delete){
                echo "<script>window.location.href='view-post.php?topic_id=$topic_id' </script>";
            }else{
                echo "error" . $conn->error ;
            }

        }
    }

    // $sql = "DELETE FROM threads WHERE user_id = '$user_id' AND comment_id = '$comment_id'";
    // $run = mysqli_query($conn,$sql);

    // if($run){
    //     echo "<script>window.location.href='view-post.php?topic_id=$topic_id  </script>";
    // }else{
    //     echo "error" . $conn->error;
    // }
}

ob_end_flush();
?>