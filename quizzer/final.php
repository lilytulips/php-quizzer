<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP Quizzer</title>    
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
<body>
    <header>
        <div class="container">
            <h1 class="center">PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container" style="text-align: center;">
            <h2>Congratulations! You have completed the test.</h2>
            <p>Your final score is: <?php echo $_SESSION['score']; ?></p>
            <a href="question.php?n=1" class="start">Re-take</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2023, PHP Quizzer
        </div>
    </footer>
</body>
</html>