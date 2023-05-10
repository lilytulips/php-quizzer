<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    //Query, use super global.
    //Set question number.
    //n is the variable we set in url, it will access it!
    $number = (int) $_GET['n'];
    // Reset score
    if($_GET['n'] == 1) {
      $_SESSION['score'] = 0;
    }

    /*
    *   Get Question
    */

    $query = "SELECT * FROM `questions` 
            WHERE question_number = $number";
    
    //Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        
    /*
    *   Get Number of Question
    */  

    //fetch_assoc will fetch associative array
    $question = $result->fetch_assoc();

    /*
    *   Get Choices
    */

    $query = "SELECT * FROM `choices` 
            WHERE question_number = $number";
    
    //Get results
    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

     /*
    *   Get Total Question
    */

    $query = "SELECT * FROM `questions`";
    
    //Get result
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
<body>
    <header>
        <div class="container">
            <h1 class="center">PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">Question <?php echo $number;?> of <?php echo $total;?></div>
            <p class="question">
               <strong><?php echo $question['text']?></strong>
            </p>
            <form method="post" action="process.php">
                <ul class="choices">
                    <?php while($row = $choices->fetch_assoc()): ?>
                        <li><input name="choice" type="radio" value="<?php echo $row['id'];?>"/><?php echo $row['text'];?></li>
                    <?php endwhile; ?>
                </ul>
                <div class="right">
                    <input class="submit" type="submit" value="Submit"/>
                    <!--Getting the page number-->
                    <input type = hidden name="number" value="<?php echo $number; ?>" />
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2023, PHP Quizzer
        </div>
    </footer>
</body>
</html>