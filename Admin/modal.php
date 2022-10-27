<?php
include '../connection.php';
$topic = $_POST['topic'];

        $sql = "SELECT posts.topic_id, posts.topic, posts.date_time_created, posts.title,
        users.user_id , users.username , users.image , users.date_time_created
        FROM posts
        LEFT JOIN users 
        ON posts.user_id = users.user_id WHERE posts.topic_id = '$topic' ";
?>
<form action="edit-post.php" method="POST">
<?php
        $run = mysqli_query($conn,$sql);
        if(mysqli_num_rows($run) > 0){
            foreach($run as $row ) {
                ?>
                <section class="container-fluid d-flex align-items-center justify-content-center px-4 px-sm-0">
                    <div class="card bg-dark px-3 py-3 mx-3 w-100">
                        <span class="mt-2">
                            <label for="">Title</label>
                            <input type="text" name="title" class="w-100 form-control mb-4" value="<?php echo $row['title']?>">
                            <label for="">Body</label>
                            <textarea name="topic" id="" rows="10" class="form-control" style="resize: none;"><?php echo $row['topic']?></textarea>
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
<span class="px-4" style="display:flex; justify-content: end;">
    <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
    <input type="submit" name="update" class="btn btn-primary" value="Update">
</span>