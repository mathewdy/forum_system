<?php

ob_start();
session_start();
include('../connection.php');
if(empty($_SESSION['user_id'])){
    echo "<script>window.location.href='login.php' </script>";
}
$_SESSION['user_id'];
$user_id = $_SESSION['user_id'];

if(isset($_POST['update'])){

    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    $user_id = $_POST['user_id'];
    $topic_id = $_POST['topic_id'];
    $topic = $_POST['topic'];


    $sql_update = "UPDATE posts SET topic = '$topic', date_time_updated= '$date $time' WHERE topic_id = '$topic_id'";
    $run_update = mysqli_query($conn,$sql_update);

    if($run_update){
        echo "<script>window.location.href='index.php' </script>";
    }else{
        echo "error" . $conn->error;
    }

}

ob_end_flush();

?>