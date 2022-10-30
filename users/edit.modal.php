<?php
include '../connection.php';
$topic = $_POST['topic'];

$sql_threads = "SELECT threads.topic_id,threads.comment_id,threads.comment,threads.date_time_created ,users.image, users.username,users.date_time_created, users.user_id , users.user_type
FROM threads
LEFT JOIN users 
ON threads.user_id = users.user_id 
WHERE threads.comment_id = '$topic'";
$run_threads = mysqli_query($conn,$sql_threads);
?>
<form action="edit-comment.php" method="POST">  
<?php
if(mysqli_num_rows($run_threads) > 0){
    foreach($run_threads as $row_threads){
        ?>
        <section class="container-fluid d-flex align-items-center justify-content-center px-4 px-sm-0">
            <div class="card bg-dark px-3 py-3 mx-3 w-100">
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