<?php
ob_start();
session_start();
include('../connection.php');
$_SESSION['user_id'];

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
    

    <a href="home.php">Back</a>
    <?php

        if(isset($_GET['topic_id'])){
            $topic_id = $_GET['topic_id'];
            $sql_topic = "SELECT posts.topic_id,posts.topic, users.user_id , 
            users.username , users.image, users.date_time_created
            FROM posts 
            LEFT JOIN users 
            ON posts.user_id = users.user_id WHERE topic_id = '$topic_id'";
            $run_topic = mysqli_query($conn,$sql_topic);

            if(mysqli_num_rows($run_topic) > 0){
                foreach($run_topic as $row_topic){
                    ?>

                        <h1><?php echo $row_topic ['topic']?></h1>
                        <p><?php echo $row_topic ['username']?> </p>
                        <img src="<?php echo "uploads/" . $row_topic ['image'] ?>" alt="image user" width="100px" height="100px">
                        <form action="" method="POST">
                            <input type="text" name="comment">
                            <input type="hidden" name="topic_id_insert" value="<?php echo $row_topic ['topic_id']?>">
                            <input type="submit" name="add_comment" value="Add Comment">
                        </form>

                    <?php
                }
            }
        }


        if(isset($_GET['topic_id'])){
            $topic_id_1 = $_GET['topic_id'];

            $sql_threads = "SELECT threads.topic_id,threads.comment_id,threads.comment,threads.date_time_created ,users.image, users.username,users.date_time_created, users.user_id
            FROM threads
            LEFT JOIN users 
            ON threads.user_id = users.user_id 
            WHERE threads.topic_id = '$topic_id_1'";
            $run_threads = mysqli_query($conn,$sql_threads);

            if(mysqli_num_rows($run_threads) > 0){
                foreach($run_threads as $row_threads){
                    ?>

                        <!-----username nya FOR THE NAME---->
                        <p><?php echo $row_threads ['username']?></p>
                        <!---forda image ni user--->
                        <img src="<?php echo "uploads/" . $row_threads['image'] ?>" alt="image user" width="100px" height="100px">
                        <p><?php echo $row_threads ['comment']?></p>

                        <!--edit comment -->
                        
                        <?php if($row_threads['user_id'] == $_SESSION['user_id'])
                        {
                            echo "<a href='edit-comment.php?comment_id=$row_threads[comment_id]'>Edit</a>";
                        }else{
                            echo "";
                        } ?>

                        <!----delete--->

                        <?php if($row_threads['user_id'] == $_SESSION['user_id'])
                        {
                            echo "<a href='delete-comment.php?comment_id=$row_threads[comment_id]'>Delete</a>";
                        }else{
                            echo "";
                        } ?>



                    <?php
                }
            }
        }
        
        
    ?>



    
</body>
</html>

<?php

if(isset($_POST['add_comment'])){
    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');
    $comment_id = "2023".rand('2','105') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;
    date_default_timezone_set("Asia/Manila");
    $comment = $_POST['comment'];
    $topic_id_insert = $_POST['topic_id_insert'];
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO threads (user_id,topic_id,comment_id,comment,date_time_created,date_time_updated) VALUES ('$user_id', '$topic_id_insert' ,'$comment_id', '$comment', '$date $time' , '$date $time')";
    $run = mysqli_query($conn,$sql);

    if($run){
        echo "<script>window.location.href='view-post.php?topic_id=$topic_id' </script>";
    }else{
        echo "error" . $conn->error;
    }
}

// SELECT posts.topic_id, posts.topic, posts.date_time_created, users.user_id , users.username , users.image , users.date_time_created, threads.comment_id, threads.comment
//             FROM posts
//             LEFT JOIN users 
//             ON posts.user_id = users.user_id
//             LEFT JOIN threads 
//             ON posts.user_id = threads.user_id WHERE posts.topic_id = '$topic_id

// if($row_threads['user_id'] == $_SESSION['user_id']){
//     echo "<script>window.location.href='edit-comment.php?comment_id=<?php echo $row_threads[comment_id]' </script>";
// }else{
//     echo "<p hidden> bawal</p>";
// }
ob_end_flush();
?>