<?php   
session_start();
include('../connection.php');
include('../session.php');


if(isset($_GET['id'])){

$user_id = $_GET['id'];


if(empty($user_id)){    // place verification starts here
    echo "<script>alert('user id not found');
    window.location = 'home.php';</script>";
    exit();
}




$verify_user_id = "SELECT `user_id` FROM `users` WHERE user_id = '$user_id'";
$run_verify_user_id = mysqli_query($conn,$verify_user_id);
if(mysqli_num_rows($run_verify_user_id) == 0){
    
    header("location: index.php");
    exit();


}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
</head>
<body>
<a href="logout.php">Logout</a>
<br>
    
</body>
</html>


<table>
    <thead>
        <tr>
        <th>Comments</th>
        <th>Actions</th>
        </tr>
       
    </thead>
    <tbody>

<?php
 $query_comments = "SELECT `comment` FROM threads WHERE user_id = '$user_id'";
 $run_query_comments = mysqli_query($conn,$query_comments);

 if(mysqli_num_rows($run_query_comments) > 0){
    $count = 0;
    foreach($run_query_comments as $Row){
    

      $count++;
    

?>
<tr>
    <td><?php echo $Row['comment']?></td>
    <td>
    <a href="<?php echo $edit_comment_link ?>"> Edit</a>
    </td>
    <td>
    <a href="<?php echo $delete_comment_link ?>"> Delete</a>
    </td>
    <td>
        <!-- <form action="deletePromos.php" method="POST">
            <input type="hidden" name="delete" value="<?php echo $Row['id'];?>">
            <button type="submit" name="delete_promos">Delete</button>
        </form> -->
    </td>
</tr>
<?php
}
}
?>
</tbody>
</table>
