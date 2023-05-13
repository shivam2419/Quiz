<?php


include('db.php');

// $qno=0;
session_start();
$qno = $_SESSION['qno'];
// $_SESSION['score']=0;    
$score = $_SESSION['score'];
$ans = $_POST['opt'];




$getq = "SELECT answer FROM `questions` WHERE qno=$qno";
$result = mysqli_query($conn, $getq);

foreach ($result as $Val) {
    foreach ($Val as $ans1) {

        if ($ans1 == $ans) {

            $_SESSION['qno'] = $_SESSION['qno'] + 1;
            $_SESSION['score'] = $_SESSION['score'] + 1;

            // echo $_SESSION['qno'];  

            ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Answer Page</title>
                <style>
                    body {
                        text-align: center;
                        color: white;
                        background-image: url('myimage.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                    }

                    h2 {
                        font-size: 80px;
                    }
                    h3 {
                        font-size: 30px;
                    }
                    

                    input {
                        background-color: green;
                        font-size: 20px;
                        color: white;
                        padding: 7px;
                        border: none;
                    }
                </style>
            </head>

            <body>
                <form action="gtest.php" action="gtest.php">
                    <h2>Correct</h2>
                    <h3>Score
                        <?php echo ": " . $_SESSION['score']; ?>
                    </h3>
                    <input type="submit" name="qno" value="Next Question">
                </form>
                <?php
        } else {
            $_SESSION['qno'] = $_SESSION['qno'] + 1;
            ?>
            <body style=" text-align: center;
                        color: white;
                        background-image: url('myimage.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                        padding:30px;">
            <form action="gtest.php" action="gtest.php" style="margin-top: 30px;">
                    <h2 style="font-size: 80px;">Incorrect Answer</h2>
                    <h3 style="font-size: 30px; font-family: 'Times New Roman', Times, serif;">
                        Score : <?php echo $score; ?>
                    </h3>
                    <!-- <button name="qno" type="submit" value=3>Next Question</button> -->

                    <input type="submit" name="qno" value="Next Question" style="       background-color: green;
                        font-size: 20px;
                        color: white;
                        padding: 7px;
                        border: none;">

                </form>
            </body>
         
            <?php

        }
    }
}


?>
      
      </body>

</html>