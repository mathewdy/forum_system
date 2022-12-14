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
    <link rel="icon" type="image/x-icon" href="../src/img/icons/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/custom.css">
    <link rel="stylesheet" href="../src/css/app.css">
    <title>Soul Inc.</title>
</head>
<body style="background: rgba(0, 0, 0, 0.9);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand py-0" href="index.php">
                <img src="../src/img/photos/soul_inc_2.png" alt="" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto nav-pills">
                <li class="nav-item">
                    <a class="nav-link active px-4" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4" href="members.php">Members</a>
                </li>
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
            if(isset($_POST['search_topic'])){
                $filter_values = $_POST['search_topic'];

                // echo $filter_values;


                $sql = "SELECT posts.topic_id, posts.topic, posts.date_time_created,posts.title,
                users.user_id , users.username , users.image FROM posts 
                LEFT JOIN users ON posts.user_id = users.user_id
                WHERE posts.topic LIKE '%$filter_values%' OR posts.title LIKE '%$filter_values%'";
                $run = mysqli_query($conn,$sql);

                if(mysqli_num_rows($run) > 0){
                    foreach($run as $row){
                        ?>

                        <div class="card bg-dark p-4" style="border:none; border-left: 3px solid #990000;">
                            <span class="d-flex">
                                <img src="<?php echo "../users/uploads/" . $row['image'] ?>" alt="Image of User" style="height:50px; width: 50px; border-radius: 8px; padding: 0; margin: 0;">
                                <span class="px-3">
                                    <p class="p-0 m-0"><?= $row['username']?></p>
                                    <p class="p-0 m-0"><?= $row['title']?></p>
                                    <a href="view-post.php?topic_id=<?php echo $row ['topic_id']?>" style="font-size: 1.3em; color: rgba(255,255,255,0.6); text-decoration: underline;"><?php echo $row ['topic']?></a>
                                </span>
                                <!-- <a href="view-post.php?topic_id=<?php echo $row ['topic_id']?>">View Thread</a> -->
                                        <span class="ms-auto">
                                            <span>
                                                <span class="text-muted"><?php echo   $d = $row['date_time_created']; ?>
                                            </span>
                                            </span>
                                            <span class=" d-flex flex-row align-items-end justify-content-end">
                                               
                                                    <a data-id="<?= $row ['topic_id']; ?>" class='topic' href='edit-post.php?user_id=$row[user_id]&&topic_id=$row[topic_id]' style='color: rgba(255,255,255,0.6);' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</a>
                                                    <span class='vr mx-2' style='border:1px solid rgba(255,255,255,0.6);'></span>
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content card bg-dark">
                                                        <div class="modal-header" style="border:none;">
                                                            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" style="color:white; border-radius: 50%;" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
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
                            </span>
                        </div>

                        <?php
                    }
                }else{
                    echo "<script>alert('Topic or Title Unavailable'); </script>";
                    echo "<script>window.location.href='index.php' </script>";
                }
                ?>
                </main>
                <?php
            }


        ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
    