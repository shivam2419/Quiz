<?php
include('db.php');


// $nxtpage=FALSE;
$username = $_POST['username'];
$pswrd = $_POST['password'];

// $query="SELECT `password` FROM `usignup` WHERE name=$username ";
$query = "SELECT `password` FROM `usignup` WHERE `name`='$username';";
$result = mysqli_query($conn, $query);


foreach ($result as $key => $value) {
    foreach ($value as $key1 => $value1) {
        if ($value1 == $pswrd) {
?>
            <!DOCTYPE html>
            <html lang="en">

            <head>

                <style>
                    body {
                        text-align: center;
                        padding: 20px;
                        background-image: url("myimage.jpg");
                        background-repeat: no-repeat;
                        background-size: cover;
                        color: white;
                    }

                    .nav {
                        display: flex;
                        justify-content: space-around;
                    }

                    .content {
                        display: flex;
                    }

                    .content h2 {
                        font-size: 30px;
                        font-family: Arial, Helvetica, sans-serif;
                    }

                    .nav img {
                        height: 50px;
                        width: 50px;
                        margin-top: 15px;
                        margin-left: 20px;
                    }

                    .nav ul {
                        display: flex;
                        margin-top: 20px;
                        padding: 10px;
                    }

                    .nav ul li {
                        margin-left: 30px;
                        list-style-type: none;
                        font-size: 18px;
                    }

                    .nav ul li a,
                    #lsta a {
                        text-decoration: none;
                        color: white;
                    }

                    #lsta {
                        background-color: green;
                        padding: 10px;
                        margin-top: 15px;
                        border: none;
                        font-size: 20px;
                        height: 50px;
                        width: 140px;
                        border-radius: 30px;
                    }


                    .head {
                        margin-bottom: 50px;
                        letter-spacing: 1px;
                        margin-top: 100px;;
                        font-family: Arial, Helvetica, sans-serif;
                    }

                    button {
                        background-color: rgb(6, 94, 16);
                        border: none;
                        padding: 10px;
                        width: 180px;
                        border-radius: 20px;
                    }

                    button a {
                        font-size: 20px;
                        text-decoration: none;
                        color: white;
                    }
                </style>
                <title>Document</title>
            </head>

            <body>
                <div class="nav">
                    <div class="content">
                        <h2>Brainy_Kuiz</h2>
                        <img src="brain.png" alt="" />
                    </div>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="">SignUp</a></li>
                        <li><a href="">Setting</a></li>
                    </ul>
                    <button id="lsta"><a href="index.html">Home</a></button>
                </div>

                <div class="container">
                    <h1 class="head"> Your Options</h1>
                    <button><a href="index.html">Home</a></button>
                    <br><br>
                    <button><a href="gtest.php">Give Test</a></button>
                    <br><br>

                </div>
            </body>

            </html>
<?php
        }
    }
}
?>