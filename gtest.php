<?php

$ques = "";
$opt1 = "";
$opt2 = "";
$opt3 = "";
$opt4 = "";
$answer = "";


include('db.php');

session_start();
// $_SESSION['qno'] = 1;

$qno = $_SESSION['qno'];

$getq = "SELECT COUNT(qno) FROM `questions` ";
$result12 = mysqli_query($conn, $getq);

foreach ($result12 as $Val) {
    foreach ($Val as $ans1) {



        if ($qno < $ans1 + 1) {


            $getq = "SELECT question FROM `questions` WHERE qno=$qno";
            $result = mysqli_query($conn, $getq);
            foreach ($result as $Val) {
                foreach ($Val as $ans) {

                    $ques = $ques . $ans;
                }
            }

            $option1 = "SELECT opt1 FROM `questions` WHERE qno=$qno";
            $result = mysqli_query($conn, $option1);
            foreach ($result as $Val) {
                foreach ($Val as $ans) {

                    $opt1 = $opt1 . $ans;
                }
            }

            $option2 = "SELECT opt2 FROM `questions` WHERE qno=$qno";
            $result = mysqli_query($conn, $option2);
            foreach ($result as $Val) {
                foreach ($Val as $ans) {

                    $opt2 = $opt2 . $ans;
                }
            }

            $option3 = "SELECT opt3 FROM `questions` WHERE qno=$qno";
            $result = mysqli_query($conn, $option3);
            foreach ($result as $Val) {
                foreach ($Val as $ans) {

                    $opt3 = $opt3 . $ans;
                }
            }

            $option4 = "SELECT opt4 FROM `questions` WHERE qno=$qno";
            $result = mysqli_query($conn, $option4);
            foreach ($result as $Val) {
                foreach ($Val as $ans) {

                    $opt4 = $opt4 . $ans;
                }
            }
            // }
            // func()
?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <style>
                    body {

                        padding: 50px;
                        color: white;
                        background-image: url('myimage.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                    }

                    .main {
                        font-size: 80px;
                        text-align: center;
                        margin: 0px 0px 30px 30px;

                    }

                    #inp {
                        margin-right: 10px;
                    }
                

                    .btn {
                        background-color: green;
                        padding: 10px;
                        width: 180px;
                        font-size: 18px;
                        color: white;
                        margin-top: 10px;
                    }

                    h1 {
                        font-size: 35px;
                        font-family: Arial, Helvetica, sans-serif;
                    }

                    b {
                        font-size: 20px;
                        font-weight: lighter;
                    }

                    h2 {
                        background-color: blue;
                    }
                </style>
                <title>QA Page</title>
            </head>

            <body>
                <div class="container">
                    <h1 class="main">Brainy Kuiz</h1>
                    <form action="gtestans.php" method="post">
                        <?php
                        echo "<h1>Ques : $qno $ques</h1 >";
                        echo "<br>";
                        ?>
                        <?php
                        echo "<input type='radio' name='opt' id='inp' value=$opt1><b>$opt1</b>";
                        echo "<br>";
                        echo "<br>";
                        ?>
                        <?php
                        echo "<input type='radio' name='opt' id='inp' value=$opt2><b>$opt2</b>";
                        echo "<br>";
                        echo "<br>";
                        ?>
                        <?php
                        echo "<input type='radio' name='opt' id='inp'  value=$opt3><b>$opt3</b>";
                        echo "<br>";
                        echo "<br>";
                        ?>
                        <?php
                        echo "<input type='radio' name='opt' id='inp' value=$opt4><b>$opt4</b>";
                        echo "<br>";
                        echo "<br>";
                        ?>
                        <input type="submit" value="SUBMIT" class="btn">
                    </form>
                </div>

            <?php

        } else {
            ?>

                <body style="padding: 100px;
                        color: white;
                        background-image: url('myimage.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                        text-align:center;">


                    <h1 style="font-size: 35px;
                        font-family: Arial, Helvetica, sans-serif;">Questions Over</h1>
                    <h2>Your Score :
                        <?php $inssewssion = (int) $_SESSION['score'];
                        echo $inssewssion; ?>
                    </h2>
                    <button style='
                background-color:green;
                padding:10px;
                width:180px;
                font-size:18px;
                color:white;
                margin-top:10px
            '><a href='gtest.php' style='text-decoration:none; color:white;'>Give test again</a></button>
                    <button style='
                background-color:green;
                padding:10px;
                width:180px;
                font-size:18px;
                color:white;
                margin-top:10px
            '><a href='index.html' style='text-decoration:none; color:white;'>Home</a></button>
                </body>
    <?php
            $_SESSION['qno'] = 1;
            $_SESSION['score'] = 0;
        }
    }
}


    ?>

            </body>

            </html>