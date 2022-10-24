<?php
include('../connection.php');



if(isset($_POST['search_topic'])){
    $filter_values = $_POST['search_topic'];

    
    $sql = "SELECT * FROM posts WHERE topic LIKE '%$filter_values%'";
    $run = mysqli_query($conn,$sql);
    echo $filter_values;

    if(mysqli_num_rows($run) > 0){
        foreach($run as $row){
            ?>

                <a href="view-post.php?topic_id=<?php echo $row ['topic_id']?>">View Thread</a>

            <?php
        }
    }else{
        echo "<script>alert('Topic Unavailable'); </script>";
        
    }
}



?>