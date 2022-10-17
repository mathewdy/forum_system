<?php

$conn = new mysqli("localhost", "root" , "", "forum_system");

if($conn == false){
    echo "error" . $conn->error;
}


?>