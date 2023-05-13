<?php

include('db.php');

$question=$_POST['question'];
$opt1=$_POST['opt1'];
$opt2=$_POST['opt2'];
$opt3=$_POST['opt3'];
$opt4=$_POST['opt4'];
$answer=$_POST['answer'];


$query="INSERT INTO `questions` (`question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`) VALUES ('$question', '$opt1', '$opt2', '$opt3', '$opt4', '$answer');";
$result=mysqli_query($conn,$query);
if($result)
{
    echo "<h1>Data Submitted</h1>";
}
// $query1="SELECT * from `questions`";
// $result=mysqli_query($conn,$query1);
// foreach($result as $key=>$value)
// {
//     foreach($value as $key1)
//     {
//         echo $key1;
//         echo "<br>";
//     }
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            text-align:center;
            padding:100px;
            color: white;
            background-image: url('myimage.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        button{
            width:250px;
            padding:10px;
            border:none;
            background-color:green;
            font-size:18px;
        }
        button a{
            text-decoration:none;
            color: white;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">

        <button><a href="addq.html">Add More Questions</a></button>
        <button  class="btn" ><a href="gtest.php">Give Test</a></button>
        
    </div>
</body>
</html>