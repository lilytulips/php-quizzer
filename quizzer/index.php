<?php include 'database.php';?>
<?php
    /*
    *   Get Total Questions
    */

    $query = "SELECT * FROM `questions`";

    //Get results
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $result->num_rows;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP Quizzer</title>    
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
<body class="center">
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Test your PHP Knowledge</h2>
            <p>This is a multiple choice quiz to test your knowledge of PHP.</p>
            <ul>
                <li><strong>Number of Questions: </strong><?php echo $total;?></li>
                <li><strong>Type: </strong>Multiple Choice</li>
                <li><strong>Estimated Time: </strong><?php echo $total * .5;?> Minute(s)</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2023, PHP Quizzer
        </div>
    </footer>
</body>
</html>
