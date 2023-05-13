<?php
include('db.php');

if (isset($_POST['submit'])) {
    $nxtpage = FALSE;
    $nxtpage1 = FALSE;
    $username = $_POST['username'];
    $pswrd = $_POST['password'];
    $aid = $_POST['aid'];

    $query = "SELECT `name` FROM `asignup` Where aid='$aid' ";
    $result = mysqli_query($conn, $query);
    foreach ($result as $key => $value) {
        foreach ($value as $key1 => $value1) {
            if($username== $value1)
            {
                $nxtpage=true;
            }
        }
    }

    $query = "SELECT `password` FROM `asignup` Where aid='$aid' ";
    $result = mysqli_query($conn, $query);
    foreach ($result as $key => $value) {
        foreach ($value as $key1 => $value1) {
            if($pswrd== $value1)
            {
                $nxtpage1=true;
            }
        }
    }
    if ($nxtpage and $nxtpage1) {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <link rel="stylesheet" href="alogin.css">
            <style>
                body {
                    text-align: center;
                    padding: 100px;
                    color: white;
                    background-image: url('myimage.jpg');
                    background-repeat: no-repeat;
                    background-size: cover;
                    
                }

                .head {
                    margin-bottom: 50px;
                    letter-spacing: 1px;
                    font-family: Arial, Helvetica, sans-serif;
                }

                button {
                    background-color: rgb(6, 94, 16);
                    border: none;
                    color: white;
                    border-radius: 20px;
                }

            </style>
            <title>Document</title>
        </head>

        <body>
            <div class="container">
                <h1 class="head"> Your Options</h1>
                <button><a href="addq.html">ADD A QUESTION</a></button>
                <br><br>
                <button><a href="gtest.php">GIVE TEST</a></button>
                <br><br>
                <button><a href="showqa.php">Questions & Answer</a></button>
                <br><br>
                <button><a href="qupdate.php">Update Question</a></button>
                <br><br>
                <button><a href="oupdate.php">Update Options</a></button>
            </div>
        </body>

        </html>
        <?php
    }
    else{
        ?>
          <!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
    body {
        text-align: center;
        padding: 100px;
        color: white;
        background-image: url('myimage.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    button {
        background-color: rgb(6, 94, 16);
        border: none;
        color: white;
        border-radius: 20px;
        padding: 10px;
        width: 180px;
    }
    button a{
        text-decoration: none;
        color: white;
        font-size: 20px;
    }
</style>
</head>
    <script>
        alert("Username or password is incorrect !");
    </script>
<body>
<h2> Wrong Information </h2>
<button><a href="index.html">Home </a></button>
<button><a href="admin.html">Login</a></button>
</body>

</html>

        <?php
    }
}

?>