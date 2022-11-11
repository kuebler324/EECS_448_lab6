<?php
    $score = 0;
    $q1 = $_POST['q1'];
    if($q1 === '10') {
        $score += 1;
    }
    $q2 = $_POST['q2'];
    if($q2 === 'blue') {
        $score += 1;
    }
    $q3 = $_POST['q3'];
    if($q3 === 'Them') {
        $score += 1;
    }
    $q4 = $_POST['q4'];
    if($q4 === 'javascript') {
        $score += 1;
    }
    $q5 = $_POST['q5'];
    if($q5 === 'Microsoft Teams') {
        $score += 1;
    }
    $score *= 20;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Exercise 2 | Quiz Results</title>
    </head>
    <body>
        <div>
            <p>Question 1: How old am I?</p>
            <p>You answered: <?=$q1?></p>
            <p>Correct answer: a.) 10</p>
        </div>
        <div>
            <p>Question 2: What is my favorite color?</p>
            <p>You answered: <?=$q2?></p>
            <p>Correct answer: b.) blue</p>
        </div>
        <div>
            <p>Question 3: Who is in charge?</p>
            <p>You answered: <?=$q3?></p>
            <p>Correct answer: c.) Them</p>
        </div>
        <div>
            <p>Question 4: What is the best language?</p>
            <p>You answered: <?=$q4?></p>
            <p>Correct answer: d.) javascript</p>
        </div>
        <div>
            <p>Question 5: What is your favorite apple product?</p>
            <p>You answered: <?=$q5?></p>
            <p>Correct answer: a.) Microsoft Teams</p>
        </div>
        <div>
            <h1>Your score: <?=$score?>%</h1>
        </div>
    </body>
</html>