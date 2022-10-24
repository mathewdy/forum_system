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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/app.css">
    <title>Document</title>
</head>
<body style="background: rgba(0, 0, 0, 0.9);">
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="navbar-collapse collapse">
            <a href="index.php" class="navbar-brand p-0 px-lg-4 px-sm-0">
                <img src="../src/img/photos/soul_inc_2.png" alt="" height="50">
            </a>
            <ul class="navbar-nav navbar-align px-lg-4 px-sm-0">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </a>

                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle me-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                        <a class="dropdown-item text-light" href="logout.php">Log out</a>
                    </div>
                </li>
			</ul>
		</div>
	</nav>
    <main class="container mb-5" style="color:rgba(255,255,255,0.6);">
        <section class="pt-5">
            <div class="card bg-dark w-25 p-4">
                <h4 style="color:rgba(255,255,255,0.6);">Members: <?php echo("$members"); ?> </h4>
                <a href="members.php">View Members</a>
            </div>
        </section>
        <div class="container-fluid p-0 pt-5">
            <h1 style="color: rgba(255,255,255,0.6);">Forum</h1>        
        </div>

        <!----create post--->
            <div class="card bg-dark p-5">
                <form action="add-post.php" method="POST">
                    <label for="" class="h3 pb-0 mb-0" style="color: rgba(255,255,255,0.6);">Create Post</label>
                    <input type="text" class="form-control my-3" name="topic" >
                    <span class="d-flex flex-row justify-content-end">
                        <input type="submit" class="btn btn-secondary" name="add_post">
                    </span>
                    
                </form>
            </div>
            

        <form action="search.php" method="POST" class="mb-2 text-end">
            <input type="text" name="search_topic" style="padding: 3px 5px; outline:none;" placeholder="Search">
            <input type="submit" name="search" class="btn btn-md btn-secondary" value="Search">
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
                            <img src="<?= "../users/uploads/" . $row['image'] ?>" alt="Image of User" style="height:50px; width: 50px; border-radius: 8px; padding: 0; margin: 0;">
                            <span class="px-3">
                                <p class="p-0 m-0"><?= $row['username']?></p>
                                <a href="view-post.php?topic_id=<?= $row ['topic_id']?>" style="font-size: 1.3em; color: rgba(255,255,255,0.6); text-decoration: underline;"><?php echo $row ['topic']?></a>
                            </span>
                        
                      

                        <!--hindi pa tapos yung edit--->
                            <span class="ms-auto">
                                <span>
                                    <span class="text-muted"><?=  $d = $row['date_time_created']; ?>
                                </span>
                                </span>
                                <span class=" d-flex flex-row align-items-end justify-content-end">
                                   
                                        <a href='edit-post.php?user_id=$row[user_id]&&topic_id=$row[topic_id]' style='color: rgba(255,255,255,0.6);' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content card bg-dark">
                                            <div class="modal-header" style="border:none;">
                                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" style="color:white; border-radius: 50%;" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="edit-post.php" method="POST">

                                                <?php
                                                        $sql = "SELECT posts.topic_id, posts.topic, posts.date_time_created, 
                                                        users.user_id , users.username , users.image , users.date_time_created
                                                        FROM posts
                                                        LEFT JOIN users 
                                                        ON posts.user_id = users.user_id WHERE posts.user_id ='$row[user_id]' AND posts.topic_id = '$row[topic_id]' ";

                                                        $run = mysqli_query($conn,$sql);
                                                        if(mysqli_num_rows($run) > 0){
                                                            foreach($run as $row ) {
                                                                ?>
                                                                <section class="container-fluid d-flex align-items-center justify-content-center px-4 px-sm-0">
                                                                    <span class="d-flex justify-content-center align-items-center">
                                                                        <img src="<?php echo "../users/uploads/" . $row['image'] ?>" alt="image user" style="height:80px; width: 80px; border-radius: 50%; padding: 0; margin: 0;">
                                                                    </span>
                                                                    <div class="card bg-dark px-3 py-3 mx-3 w-100">
                                                                        <p class="p-0 m-0"><?php echo ucfirst($row ['username']);?></p>
                                                                        <span class="mt-2">
                                                                            <input type="text" name="topic" class="w-100" value="<?php echo $row['topic']?>">
                                                                            <br>
                                                                            <input type="hidden" name="user_id" value="<?php echo $row ['user_id']?>">
                                                                            <input type="hidden" name="topic_id" value="<?php echo $row ['topic_id']?>">
                                                                        </span>
                                                                    </div>
                                                                </section>              
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                    
                                            </div>
                                            <div class="modal-footer" style="border:none;">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <input type="submit" name="update" class="btn btn-primary" value="Update">
                                            </div>
                                            </form>  
                                            </div>
                                        </div>
                                        </div>
                                     

                                    <!-----hindi pa din tapos yung delete--->

                                    <a href='delete-post.php?user_id=$row[user_id]&&topic_id=$row[topic_id]' style='color: rgba(255,255,255,0.6); padding: 0 0 0 5px;'>Delete</a>
                                    
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- <script src="../src/js/app.js"></script> -->
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