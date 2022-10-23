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

    <link rel="stylesheet" href="../src/css/app.css">
    <title>Document</title>
</head>
<body style="background: rgba(0, 0, 0, 0.9);">
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="navbar-collapse collapse">
            <a href="home.php" class="navbar-brand p-0 px-lg-4 px-sm-0">
                <img src="../src/img/photos/soul_inc.png" alt="" height="50">
            </a>
            <ul class="navbar-nav navbar-align px-lg-4 px-sm-0">
                <li class="nav-item">
                    <a href="home.php" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Forum</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </a>

                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle me-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                        <a class="dropdown-item text-light" href="profile.php?user_id=<?= $user_id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle me-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-light" href="logout.php">Log out</a>
                    </div>
                </li>
			</ul>
		</div>
	</nav>
    <main class="container mb-5" style="color:rgba(255,255,255,0.6);">
        <div class="container-fluid p-0 pt-5">
            <h1 style="color: rgba(255,255,255,0.6);">Forums</h1>        
        </div>

    <h2 style="color: rgba(255,255,255,0.6);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis debitis quia accusamus, earum iusto obcaecati molestiae consequuntur tempore magnam dicta!</h2>
    <div class="row pt-4">
    <?php

    $view_comments = "SELECT users.user_id, users.first_name, users.last_name, users.image , threads.comment, threads.date_time_created, users.username
    FROM users 
    LEFT JOIN threads ON users.user_id = threads.user_id";
    $run_comments = mysqli_query($conn,$view_comments);

    if(mysqli_num_rows($run_comments) > 0){
        foreach($run_comments as $row){
            ?>
            <div class="col-12 col-xxl-12 row my-2">
                <div class="col-12 d-flex flex-row align-items-center">
                    <img src="<?php echo "uploads/" . $row ['image']?>" alt="user image" style="height:37px; width: 37px; border-radius: 50%; padding: 0; margin: 0;">
                    <a class="px-2" style="font-size: 16px;" href="profile.php?user_id=<?php echo $row ['user_id']?>"><?php echo $row ['username'] ?> </a>
                    <?php $d = strtotime($row['date_time_created']); ?>
                    <span class="text-muted"><?= date("F d, Y h:i a", $d);?></span>
                </div>
                <div class="col-12 py-4 px-5">
                    <p><?php echo $row['comment'] ?> </p>
                </div>
                <div class="col-12 d-flex flex-row px-5">
                    <a style="padding:0 8px 0 0;" href="edit-comment.php?user_id=<?php echo $row ['user_id']?>">Edit</a>
                    <a href="delete-comment.php?user_id=<?php echo $row ['user_id']?>">Delete</a>
                </div>
            </div>
            <hr class="featurette-divider" style="background: rgba(255,255,255,0.3);">
            <?php
        }
    }

    ?>
    </div>
    <form action="" method="POST" class="row">
        <div class="col-12 col-sm-12">
            <textarea name="comment" id="" class="w-100 py-2 px-4" placeholder="Comment" cols="50"  style="outline: none; resize: none; border-radius: 8px;"></textarea>
        </div>
        <div class="col-12 col-sm-12">
            <input type="submit" name="add_comment" class="btn btn-primary px-4" value="Post">
        </div>
    </form>
    </main>
    <script src="../src/js/app.js"></script>
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