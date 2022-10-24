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

        <!----create post--->
        <h2 style="color: rgba(255,255,255,0.6);">
            <form action="add-post.php" method="POST">
                <label for="">Create Post</label>
                <input type="text" name="topic">
                <input type="submit" name="add_post">
            </form>
        </h2>
        <div class="row pt-4">

        <form action="search.php" method="POST">
            <br>
            <input type="text" name="search_topic" placeholder="Search">
            <input type="submit" name="search" value="Search">
        </form>

        <?php

        //view post muna bago mag comment
        $view_post = "SELECT posts.topic_id, posts.topic, posts.date_time_created, 
        users.user_id , users.username , users.image 
        FROM posts
        LEFT JOIN users 
        ON posts.user_id = users.user_id";
        $run_post = mysqli_query($conn,$view_post);

        if(mysqli_num_rows($run_post) > 0){
            foreach($run_post as $row){
                ?>
                    <div class="card bg-dark p-4" style="border:none; border-left: 3px solid #990000;">
                        <span class="d-flex">
                            <img src="<?php echo "uploads/" . $row['image'] ?>" alt="Image of User" style="height:50px; width: 50px; border-radius: 8px; padding: 0; margin: 0;">
                            <span class="px-3">
                                <p class="p-0 m-0"><?= $row['username']?></p>
                                <a href="view-post.php?topic_id=<?php echo $row ['topic_id']?>" style="font-size: 1.4em; color: rgba(255,255,255,0.6);"><?php echo $row ['topic']?></a>
                            </span>
                        
                      

                        <!--hindi pa tapos yung edit--->
                            <span class="ms-auto">
                                <span>
                                    <span class="text-muted"><?php echo   $d = $row['date_time_created']; ?>
                                </span>
                                </span>
                                <span class=" d-flex flex-row align-items-end justify-content-end">
                                    <?php 
                                    if($row['user_id'] == $_SESSION['user_id'])
                                    {
                                        echo "<a href='edit-post.php?user_id=$row[user_id]&&topic_id=$row[topic_id]' style='color: rgba(255,255,255,0.6);'>Edit</a>";
                                        // echo "<span class='vr mx-2' style='border:1px solid rgba(255,255,255,0.6);'></span>";

                                    }else{
                                        echo "";
                                    } 
                                    ?>

                                    <!-----hindi pa din tapos yung delete--->

                                    <?php 
                                    if($row['user_id'] == $_SESSION['user_id'])
                                    {
                                        echo "<a href='delete-post.php?user_id=$row[user_id]&&topic_id=$row[topic_id]' style='color: rgba(255,255,255,0.6); padding: 0 0 0 5px;'>Delete</a>";
                                    }else{
                                        echo "";
                                    } 
                                    ?>
                                </span>
                            </span>
                        </span>
                    </div>

                
                <?php
                
            }
        }else{
            echo "No posts available." . $conn->error;
        }

        ?>
        </div>   
    </main>
    <script src="../src/js/app.js"></script>
</body>
</html>

<?php





ob_end_flush();

?>