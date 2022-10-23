<?php

ob_start();
session_start();
include('../connection.php');
if(empty($_SESSION['user_id'])){
    echo "<script>window.location.href='login.php' </script>";
}
$_SESSION['user_id'];
$user_id = $_SESSION['user_id'];

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
    
    <a href="home.php">Cancel</a>
    <?php

    if(isset($_GET['user_id']) && isset($_GET['topic_id'])){
        $user_id = $_GET['user_id'];
        $topic_id = $_GET['topic_id'];

        $sql = "SELECT posts.topic_id, posts.topic, posts.date_time_created, 
        users.user_id , users.username , users.image , users.date_time_created
        FROM posts
        LEFT JOIN users 
        ON posts.user_id = users.user_id WHERE posts.user_id ='$user_id' AND posts.topic_id = '$topic_id' ";

        $run = mysqli_query($conn,$sql);
        if(mysqli_num_rows($run) > 0){
            foreach($run as $row ) {
                ?>
                    <form action=""></form>
                    <p><?php echo $row ['username']?></p>
                    <img src="<?php echo "uploads/" . $row['image'] ?>" alt="Image of User" width="100px" height="100px">
                    <p><?php echo $row ['topic']?></p>                    
                <?php
            }
        }
    }

    ?>


</body>
</html>

<?php

ob_end_flush();

?>