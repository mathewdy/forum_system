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
    <h1>Forums</h1>

    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis debitis quia accusamus, earum iusto obcaecati molestiae consequuntur tempore magnam dicta!</h2>

    <?php

    $view_comments = "SELECT users.user_id, users.first_name, users.last_name, users.image , threads.comment, threads.date_time_created, users.username
    FROM users 
    LEFT JOIN threads ON users.user_id = threads.user_id";
    $run_comments = mysqli_query($conn,$view_comments);

    if(mysqli_num_rows($run_comments) > 0){
        foreach($run_comments as $row){
            ?>

                <p><?php echo $row ['username']?></p>
                <img src="<?php echo "uploads/" . $row ['image']?>" alt="user image" height="100px" width="100px">
                <p>
                    <?php $d = strtotime($row['date_time_created']);
                    echo date("M-d-Y h:i:sa", $d);?>
                </p>
                <a href="edit-comment.php?user_id=<?php echo $row ['user_id']?>">Edit</a>
                <a href="delete-comment.php?user_id=<?php echo $row ['user_id']?>">Delete</a>
            <?php
        }
    }

    ?>

    <form action="" method="POST">
        <input type="text" name="comment" placeholder="Comment">
        <br>
        <input type="submit" name="add_comment" value="Post">
    </form>
</body>
</html>

<?php

if(isset($_POST['add_comment'])){
    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');
    $comment = $_POST['comment'];

    $sql = "INSERT INTO threads (user_id,comment,date_time_created,date_time_updated) VALUES ('$user_id' , '$comment', '$date $time' , '$date $time')";
    $run = mysqli_query($conn,$sql);

    if($run){
        echo "<script>window.location.href='home.php' </script>";
    }else{
        echo "error" . $conn->error;
    }
}

ob_end_flush();

?>