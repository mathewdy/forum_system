<?php
ob_start();
session_start();
include('../connection.php');
if(empty($_SESSION['user_id'])){
    echo "<script>window.location.href='login.php' </script>";
}
$_SESSION['user_id'];
$user_id = $_SESSION['user_id'];
$_SESSION['user_type'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../src/img/icons/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/custom.css">
    <link rel="stylesheet" href="../src/css/app.css">
    <title>Soul Inc.</title>
</head>
<body style="background: rgba(0, 0, 0, 0.9);">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand py-0" href="home.php">
            <img src="../src/img/photos/soul_inc_2.png" alt="" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto nav-pills">
            <li class="nav-item">
            <a class="nav-link px-4"  href="../index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active px-4" href="#" aria-current="page">Forum</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-4" href="../about.php">About</a>
            </li>
            <?php 
                    
                    if(isset($_SESSION['user_id'])){
                        ?>

                    <li class="nav-item dropdown">
                        <a class="nav-icon d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </a>

                        <a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle me-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <a class="dropdown-item text-light" href="profile.php?user_id=<?= $user_id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle me-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-light" href="logout.php">Log out</a>
                        </div>
                    </li>
                    <?php
                    }else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="users/registration.php">Sign up</a>
                        </li>
                        <?php
                    }
                    
                    ?>
        </ul>
        </div>
    </div>
</nav>
    <main class="container mb-5" style="color:rgba(255,255,255,0.6);">
        <div class="container-fluid p-0 pt-5">
            <h1 style="color: rgba(255,255,255,0.6);">Forum</h1>        
        </div>

        <!----create post--->
            <div class="card bg-dark p-5">
                <form action="add-post.php" method="POST">
                    <label for="" class="h3 pb-0 mb-0" style="color: rgba(255,255,255,0.6);">Create Title</label>
                    <input type="text" class="form-control my-3" name="title" placeholder="What's up?">
                    <label for="" class="h3 pb-0 mb-0" style="color: rgba(255,255,255,0.6);">Create Topic</label>
                    <input type="text" class="form-control my-3" name="topic" placeholder="What's on your mind?" >
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
        $view_post = "SELECT posts.topic_id, posts.topic, posts.date_time_created, posts.title,
        users.user_id , users.username , users.image , users.user_type
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
                                <span class="d-flex align-items-center">
                                <p class="p-0 m-0" data-id="user"><?= $row['username']?>

                                <?php
                                
                                if($row['user_type'] == '1'){
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                  </svg>';
                                }else{
                                    echo "";
                                }

                                ?>
                                </p>
                                </span>
                                <p class="p-0 m-0"><?php echo $row ['title']?></p>
                                <a href='view-post.php?topic_id=<?= $row['topic_id']; ?>' style='font-size: 1.3em; color: rgba(255,255,255,0.6); text-decoration: underline;'><?php echo $row ['topic']; ?></a>
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
                                        ?>
                                        <a data-id="<?= $row ['topic_id']; ?>" class='topic' style='color: rgba(255,255,255,0.6);' data-bs-toggle='modal' data-bs-target='#topicModal'>Edit</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="topicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content card bg-dark">
                                            <div class="modal-header" style="border:none;">
                                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" style="color:white; border-radius: 50%;" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                    
                                            </div>
                                            <div class="modal-footer" style="border:none;">
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
            echo "<div class='py-5'>No posts available.</div>" . $conn->error;
        }

        ?>
        </div>   
    </main>
    <div class="footer mt-5">
        <section class="bg-dark py-4 text-center">
            <img src="../src/img/photos/soul_inc.png" alt="" srcset="" style="height: 7em;">
            <p class="h3" style="color:rgba(255,255,255,0.6);">All Rights Reserved @ 2022</p>
        </section>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- <script src="../src/js/app.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.topic').click(function(){
            var topic = $(this).data('id');
            $.ajax({
                url: 'modal.php',
                type: 'post',
                data: {topic: topic},
                success: function(response){
                    $('.modal-body').html(response);
                    $('#topicModal').modal('show');
                }
            });
        });
    });
</script>
</body>
</html>

<?php
if(isset($_POST['update'])){

    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    $user_id = $_POST['user_id'];
    $topic_id = $_POST['topic_id'];
    $topic = $_POST['topic'];
    $title = $_POST['title'];


    $sql_update = "UPDATE posts SET topic = '$topic',title= '$title', date_time_updated= '$date $time' WHERE user_id = '$user_id' AND topic_id = '$topic_id'";
    $run_update = mysqli_query($conn,$sql_update);

    if($run_update){
        echo "<script>window.location.href='home.php' </script>";
    }else{
        echo "error" . $conn->error;
    }

}




ob_end_flush();

?>