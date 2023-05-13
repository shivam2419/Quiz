<head>
    <title>Update Questions</title>
    <style>
        body {
            background-image: url('myimage.jpg');
            color: white;
            text-align: center;
            padding: 5%;
            background-repeat: none;
            background-size: cover;
        }

        h1 {
            font-size: 50px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 50px;
        }

        input {
            border: none;
            border-bottom: 1px solid white;
            background: none;
            padding: 10px;
            color: white;
        }

        #nq {
            width: 300px;
        }

        #qn {
            width: 130px;
        }

        #btn {
            background-color: green;
            border: none;
            width: 180px;
            border-radius: 10px;
            height: 35px;
        }

        button {
            background-color: green;
            border: none;
            width: 180px;
            border-radius: 10px;
            height: 35px;
        }

        button a {
            text-decoration: none;
            color: white;
            font-size: 16px;

        }
    </style>
</head>

<body>
    <h1>Update Options</h1>
    <form action="oupdate.php" method="POST">
        <input type="text" placeholder="Enter question number" name="qno">
        <br><br>
        <input type="text" placeholder="Enter option 1" name="opt1">
        <br><br>
        <input type="text" placeholder="Enter option 2" name="opt2">
        <br><br>
        <input type="text" placeholder="Enter option 3" name="opt3">
        <br><br>
        <input type="text" placeholder="Enter option 4" name="opt4">
        <br><br>

        <input type="submit" value="SUBMIT" name="submit" id="btn">

        <button><a href="admin.html">Home</a></button>
        <br><br><button><a href="showqa.php">Show Questions</a></button>
    </form>
</body>



<?php
include('db.php');

if (isset($_POST['submit'])) {
    $qno = $_POST['qno'];
    $opt1 = $_POST['opt1'];
    $opt2 = $_POST['opt2'];
    $opt3 = $_POST['opt3'];
    $opt4 = $_POST['opt4'];





    $query = "UPDATE `questions` SET 
    `opt1`='$opt1',
    `opt2`='$opt2',
    `opt3`='$opt3',
    `opt4`='$opt4' 
    WHERE qno=$qno;";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo '<script>alert(" Updated Successfully !!");</script>';
    }


}

?>