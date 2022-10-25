<?php
include('../connection.php');
session_start();
ob_start();

echo $_SESSION['user_id'];


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
<form action="" method="POST">

<h2>Security  Question </h2>


<select name="question_1" id="">
    <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
    <option value="What is the name of your first pet?">What is the name of your first pet?</option>
    <option value="What was your first car?">What was your first car?</option>
    <option value="Who is your first crush?">Who is your first crush?</option>
    <option value="What elementary school did you attend?">What elementary school did you attend?</option>
</select>
<input type="text" name="answer1" placeholder="answer">

<select name="question_2" id="">
    <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
    <option value="What is the name of your first pet?">What is the name of your first pet?</option>
    <option value="What was your first car?">What was your first car?</option>
    <option value="Who is your first crush?">Who is your first crush?</option>
    <option value="What elementary school did you attend?">What elementary school did you attend?</option>
</select>
<input type="text" name="answer2" placeholder="answer">


    <input type="submit" name="add_security" value="Next">


</form>
    
</body>
</html>

<?php

if(isset($_POST['add_security'])){

    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');
    
    $question_1 = $_POST['question_1'];
    $answer1 = $_POST['answer1'];
    $question_2 = $_POST['question_2'];
    $answer2 = $_POST['answer2'];
    $user_id = $_SESSION['user_id'];

    if($question_1 == $question_2){
        echo "<script>alert('Choose other question') </script>";
    }elseif($answer1 == $answer2){
        echo "<script>alert('Answer must not be the same') </script>";
    }else{

        $sql = "INSERT INTO questions (user_id,question_1,answer_1,question_2,answer_2,date_time_created,date_time_updated) VALUES ('$user_id', '$question_1', '$answer1', '$question_2', '$answer2' , '$date $time', '$date $time')";
        $run = mysqli_query($conn,$sql);
    
        if($run){
            echo "<script>alert('Registration Successful'); </script>";
            echo "<script>window.location.href= 'login.php' </script>";
        }else{
            echo "error" . $conn->error;
        }
    }

}


ob_end_flush();


?>