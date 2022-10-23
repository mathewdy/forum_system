<?php
ob_start();
session_start();
$_SESSION['user_id'];
include('../connection.php');
if(isset($_POST['add_post'])){
    $user_id = $_SESSION['user_id'];
    $topic_id = "2022".rand('1','10') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;
    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');
    $topic = $_POST['topic'];


    $sql = "INSERT INTO posts (user_id,topic_id,topic,date_time_created,date_time_updated)
    VALUES ('$user_id', '$topic_id', '$topic', '$date $time' , '$date $time' )";
    $run_sql = mysqli_query($conn,$sql);

    if($run_sql) {
        echo "added post";
    }else{
        echo "error" . $conn->error;
    }

}


?>