<?php
session_start();
include('../connection.php');


$count_mem = "SELECT COUNT(user_id) FROM users";
$result = mysqli_query($conn,$count_mem);
$row=mysqli_fetch_array($result);

$members = $row[0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
  
<a href="logout.php">Logout</a>
<br>

<a>Members:<?php echo("$members"); ?> </a>

<a href="members.php">View Members</a>


<form action="" method="POST">
    <label for="">Craete Post</label>
        <input type="text" name="topic">
    <input type="submit" name="add_post">
</form>


<?php

    //view post muna bago mag comment
    $view_post = "SELECT posts.topic_id, posts.topic, posts.date_time_created, 
    users.user_id , users.username , users.image , users.date_time_created
    FROM posts
    LEFT JOIN users 
    ON posts.user_id = users.user_id";
    $run_post = mysqli_query($conn,$view_post);

    if(mysqli_num_rows($run_post) > 0){
        foreach($run_post as $row){
            ?>
                <h1><?php echo $row ['topic']?></h1>
                <img src="<?php echo "../users/uploads/" . $row['image'] ?>" alt="Image of User" width="100px" height="100px">

                <br>
                <a href="view-post.php?topic_id=<?php echo $row ['topic_id']?>">View Thread</a>
                <br>

               
                <a href="edit-post.php?user_id=<?php $row['user_id']?>&&topic_id=<?php echo $row ['topic_id']?>">Edit</a>

                <br>

                <a href="delete-post.php?user_id=<?php $row['user_id']?>&&topic_id=<?php echo $row ['topic_id']?>">Delete</a>

            <?php
            
        }
    }else{
        echo "No posts yet" . $conn->error;
    }

    ?>

</body>
</html>

<?php
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
        echo "<script>window.location.href='index.php' </script>";
    }else{
        echo "error" . $conn->error;
    }

}


?>