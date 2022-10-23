<?php

include('../connection.php');
session_start();
ob_start();
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


    <?php

        if(isset($_GET['comment_id'])){
            $comment_id = $_GET['comment_id'];

            $sql = "SELECT * FROM threads WHERE comment_id = '$comment_id'";
            $run = mysqli_query($conn,$sql);

            if(mysqli_num_rows($run) > 0){
                foreach($run as $row){
                    ?>
                        <form action="" method="POST">
                            <a href="view-post.php?topic_id=<?php echo $row ['topic_id']?>">Cancel</a>
                            <input type="text" name="comment" value="<?php echo $row ['comment']?>">
                            <input type="hidden" name="comment_id" value="<?php echo $row ['comment_id']?>">
                            <input type="submit" name="update" value="Update">
                            <input type="hidden" name="topic_id" value="<?php echo $row ['topic_id']?>">
                        </form>

                    <?php
                }
            }
        }

    ?>
    
</body>
</html>
<?php


if(isset($_POST['update'])){
    $comment = $_POST['comment'];
    $comment_id = $_POST['comment_id'];
    $user_id = $_SESSION['user_id'];
    $topic_id = $_POST['topic_id'];
    $sql_update = "UPDATE threads SET comment = '$comment' WHERE comment_id = '$comment_id' AND user_id = '$user_id' ";
    $run_update = mysqli_query($conn,$sql_update);

    if($run_update){
        echo "<script>window.location.href='view-post.php?topic_id=$topic_id'; </script>";
    }else{
        echo "error" . $conn->error;
    }
}


ob_end_flush();
?>