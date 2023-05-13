<?php

include('db.php');


$naam = $_POST['username'];
$pswrd = $_POST['password'];
$eid = $_POST['emailid'];
$mobile = $_POST['mnumber'];
$id = $_POST['aid'];


// $query = "INSERT INTO `asignup` (`name`, `password`, `email`, `mnum`, `aid`) VALUES ('$naam', '$pswrd', '$eid', '$mobile', '$id')";
$query="SELECT * FROM `questions`";
$result = mysqli_query($conn, $query);

if ($result) {
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
                alert("Signed Up Successfully !");
            </script>
    <body>
        <h2> SignedUp Completed </h2>
        <button><a href="index.html">Home </a></button>
        <button><a href="admin.html">Login</a></button>
    </body>

    </html>


<?php
}

?>