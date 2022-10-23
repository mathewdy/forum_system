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

<a href="index.php">Back</a>

    

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>


        <?php

        $sql = "SELECT * FROM users";
        $run = mysqli_query($conn,$sql);

        if(mysqli_num_rows($run) > 0) {
            $no = 1;
            foreach($run as $row){
                ?>
                    <tr>
                        <td><?php echo $no?></td>
                        <td><?php echo $row ['username']?></td>
                        <td><?php echo $row ['first_name']?></td>
                        <td><?php echo $row ['last_name']?></td>
                        <td>
                            <a href="edit-member.php?user_id=<?php echo $row['user_id'] ?>">Edit</a>
                            <a href="delete-member.php?user_id=<?php echo $row ['user_id']?>">Delete</a>
                        </td>
                    </tr>
                </tbody>

                <?php


                $no++;
            }
        }


        ?>
        </tbody>
    </table>

</body>
</html>

<?php

ob_end_flush();

?>