<?php
    if(empty($_SESSION['admin'])){
        echo "<script>window.location.href='login.php' </script>";
    }
?>


