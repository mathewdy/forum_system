<?php
session_start();
include('../connection.php');
include('../session.php');


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
    <title>Admin</title>
</head>
<body>
  
<a href="logout.php">Logout</a>
<br>

<a>Members:<?php echo("$members"); ?> </a>

<!-- to see all the memberss  -->


<table>
    <thead>
        <tr>
        <th>Image</th>
        <th>User ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Actions</th>
        </tr>
       
    </thead>
    <tbody>
    <?php
        include('../connection.php');

        $query_members = "SELECT * FROM users";
        $run_query_members = mysqli_query($conn, $query_members);

        if(mysqli_num_rows($run_query_members) > 0){
            $count = 0;
            foreach($run_query_members as $Row){
              $user_id = $Row['user_id'];


              $comment_link = "comments.php?id=" . $user_id;
              $count++;
            
   
        ?>
        <tr>
            <td>
                <?php echo '<img src="../users/uploads/'.$Row['image'].'" width="100px"; height:"100px;"' ?>
            </td>
            <td><?php echo $Row['user_id']?></td>
            <td><?php echo $Row['first_name']?></td>
            <td><?php echo $Row['last_name']?></td>
            <td>
            <a href="<?php echo $comment_link ?>"> Comments</a>
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

</body>
</html>