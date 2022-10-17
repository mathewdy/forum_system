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

    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];

        $sql = "SELECT users.user_id, users.first_name, users.last_name, users.image , threads.comment, threads.date_time_created, users.username
        FROM users 
        LEFT JOIN threads ON users.user_id = threads.user_id WHERE users.user_id = '$user_id'";

        $run = mysqli_query($conn,$sql);
        if(mysqli_num_rows($run) > 0){
            foreach($run as $row ) {
                ?>

                    <label for="">Edit your comment</label>
                    <input type="text" name="comment" value="<?php echo $row ['comment']?>">

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