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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <div class="container-fluid p-0 pt-5 pb-4">
            <!-- <a href="home.php" style="text-decoration:none; color: rgba(255,255,255,0.6);">< Go Back</a> -->
            <h4 style="color: rgba(255,255,255,0.6);">Discussion</h4>        
        </div>
    
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
                    <div class="container mb-5">
                        <div class="card bg-dark px-5 py-4">
                            <div class="d-flex flex-row align-items-end">
                                <img src="<?php echo "uploads/" . $row_topic ['image'] ?>" alt="image user" style="height:50px; width: 50px; border-radius: 50%; padding: 0; margin: 0;">
                                <h4 class="mx-2" style="font-size:1.3em; color: rgba(255,255,255,0.6);"><?php echo ucfirst($row_topic ['username']); ?> </h4>
                            </div>
                            <hr class="featurette-divider">
                            <div class="container p-4">
                                <h1 style="color: rgba(255,255,255,0.6);"><?php echo $row_topic ['topic']?></h1>
                            </div>
                        </div>  
                    </div>
                    <div class="container">
                        <div class="card bg-dark pt-4 pb-5 mb-5" style="border-radius: 8px;">
                            <form action="" method="POST" class="text-end px-5">
                                <textarea id="" name="comment" class="w-100" rows="1" style="font-size: 1.2em;padding:4px 2px; background: none; outline:none; border:none; border-bottom: 1px solid rgba(255,255,255,0.3); resize: none; color: rgba(255,255,255,0.6);" placeholder="Comment..."></textarea>
                                <input type="hidden" name="topic_id_insert" value="<?php echo $row_topic ['topic_id']?>">
                                <input type="submit" name="add_comment" value="Add Comment" class="text-end btn btn-secondary mt-2">
                            </form>
                        </div> 
                    </div>
                      
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
                    <section class="container-fluid d-flex">
                        <!-----username nya FOR THE NAME---->
                        <span class="d-flex flex-column justify-content-start align-items-center">
                            <img src="<?php echo "uploads/" . $row_threads['image'] ?>" alt="image user" style="height:80px; width: 80px; border-radius: 50%; padding: 0; margin: 0;">
                        </span>
                        <!---forda image ni user--->
                        <div class="card bg-dark px-3 py-3 mx-3 w-100" style="border-left: 3px solid #990000;">
                            <p class="p-0 m-0"><?php echo ucfirst($row_threads ['username']);?></p>
                            <?php 
                            $d = strtotime($row_threads['date_time_created']); ?>
                            <span class="text-muted"><?= date("F d, Y h:i a", $d);?></span>
                            <span class="mt-4">
                                <p><?php echo $row_threads ['comment']?></p>

                            </span>
                            
                        

                            <!--edit comment -->
                            <span class="d-flex">
                            <?php if($row_threads['user_id'] == $_SESSION['user_id'])
                            {
                                echo "<a href='edit-comment.php?comment_id=$row_threads[comment_id]' data-bs-toggle='modal' data-bs-target='#exampleModal' style='color: rgba(255,255,255,0.6);'>Edit</a>";
                                echo "<span class='vr mx-2' style='border:1px solid rgba(255,255,255,0.6);'></span>";

                                ?>
                                    <!-- Modal edit for comments -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content card bg-dark">
                                            <div class="modal-header" style="border:none;">
                                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" style="color:white; border-radius: 50%;" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="edit-comment.php" method="POST">
                                                    <section class="container-fluid d-flex align-items-center justify-content-center px-4 px-sm-0">
                                                        <span class="d-flex justify-content-center align-items-center">
                                                            <img src="<?php echo "uploads/" . $row_threads['image'] ?>" alt="image user" style="height:80px; width: 80px; border-radius: 50%; padding: 0; margin: 0;">
                                                        </span>
                                                        <div class="card bg-dark px-3 py-3 mx-3 w-100">
                                                      
                                                            <p class="p-0 m-0"><?php echo ucfirst($row_threads['username']);?></p>
                                                            <span class="mt-2">
                                                                <input type="text" class="form-control" name="comment" value="<?php echo $row_threads['comment']?>">
                                                                <input type="hidden" name="comment_id" value="<?php echo $row_threads['comment_id']?>">
                                                                <input type="hidden" name="topic_id" value="<?php echo $row_threads['topic_id']?>">
                                                            </span>
                                                        </div>
                                                    </section> 
                                            </div>
                                            <div class="modal-footer" style="border:none;">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <input type="submit" name="update" class="btn btn-primary" value="Update">
                                            </div>
                                                </form>  
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }else{
                                echo "";
                            } 
                            ?>

                            <!----delete--->

                            <?php if($row_threads['user_id'] == $_SESSION['user_id'])
                            {
                                echo "<a href='delete-comment.php?comment_id=$row_threads[comment_id]' style='color: rgba(255,255,255,0.6);'>Delete</a>";
                            }else{
                                echo "";
                            } ?>
                            </span>
                        </div>
                    </section>
                            
                    <?php
        }
    }
}
    
        
        
    ?>
        
    </main>
    <div class="footer">

    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- <script src="../src/js/app.js"></script> -->
</body>
</html>

<?php

if(isset($_POST['add_comment'])){
    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');
    $comment_id = "2023".rand('2','105') . substr(str_shuffle(str_repeat("0123456789", 5)), 0, 3) ;
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