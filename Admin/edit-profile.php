<?php

include('../connection.php');
session_start();
ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="profile.php">Cancel</a>

    <?php

        if(isset($_GET['user_id'])){
            $user_id = $_GET['user_id'];



            $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
            $run = mysqli_query($conn,$sql);

            if(mysqli_num_rows($run) > 0){
                foreach ($run as $row){
                    ?>

                        <form action="" method="POST" enctype="multipart/form-data">

                            <label for="">Username</label> 
                            <br>
                            <input type="text" name="username" value="<?php echo $row ['username']?>">
                            <br>
                            <label for="">First Name</label>
                            <br>
                            <input type="text" name="first_name" value="<?php echo $row ['first_name']?>">
                            <br>
                            <label for="">Last Name</label>
                            <br>
                            <input type="text" name="last_name" value="<?php echo $row ['last_name']?>">
                            <br>


                            <label for="">Image</label>
                            <br>
                            <input type="file" name="image">
                            <br>
                            <input type="hidden" name="old_image" value="<?php echo $row ['image']?>">

                            <br>
                            <img src="<?php echo "uploads/".$row['image']?>" width="100px" height="100px" alt="image">
                            <br>
                            <input type="submit" name="update" value="Update">
                        </form>

                    <?php
                }
            }

        }


    ?>

</body>
</html>


<?php

if(isset($_POST['update'])){
    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != ''){
        $update_filename = $_FILES['image']['name'];
    }else{
        $update_filename = $old_image;
    }
    
    
    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension,$allowed_extension)){
        echo "<script>alert('File not allowed'); </script>";
        echo "<script>window.location.href='profie.php' </script>";
    }else{
        
        $query_update = "UPDATE users SET username = '$username', first_name = '$first_name' , last_name = '$last_name' , image= '$update_filename' WHERE user_id = '$user_id' ";
        $run_update = mysqli_query($conn,$query_update);

        if($run_update){
            move_uploaded_file($_FILES["image"]["tmp_name"], "../users/uploads/".$_FILES["image"]["name"]);
            unlink("../users/uploads/". $old_image);
            echo "<script>window.location.href='profie.php' </script>";
            // echo "<script>alert('Updated Unit') </script>";
            // echo "<script>window.location.href='Units.php' </script>";
        }else{
            echo "error" . $conn->error;
        }
        
    }
}


ob_end_flush();
?>