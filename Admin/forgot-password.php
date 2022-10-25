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
<h2>Security  Question </h2>
    <form action="" method="POST">

        <input type="text" name="username" placeholder="Username">

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

        <input type="submit" name="check_security" value="Next">

    </form>
</body>
</html>

<?php

if(isset($_POST['check_security'])){

    $username = $_POST['username'];
    $question_1 = $_POST['question_1'];
    $answer1 = $_POST['answer1'];
    $question_2 = $_POST['question_2'];
    $answer2 = $_POST['answer2'];


    $query_check = "SELECT questions.question_1,questions.question_2,questions.answer_1,questions.answer_2 , users.username
    FROM questions
    LEFT JOIN users
    ON questions.user_id = users.user_id
    WHERE users.username = '$username' AND questions.question_1 = '$question_1' AND questions.question_2 = '$question_2' AND questions.answer_1 = '$answer1' AND questions.answer_2 = '$answer2'";
    $run_check = mysqli_query($conn,$query_check);

    if($run_check){
        $_SESSION['username'] = $username;
        header('Location: update-password.php');
    }else{
        echo "error " . $conn->error;
    }
    

}

ob_end_flush();

?>