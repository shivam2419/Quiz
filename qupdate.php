<head>
<title>Update Questions</title>
<style>
    body{
        background-image: url('myimage.jpg');
        color: white;
        text-align: center;
        padding: 10%;
        background-repeat: no-repeat;
        background-size: cover;;
    }
    h1{
        font-size: 50px;
        font-family: Arial, Helvetica, sans-serif;
        margin: 50px;
    }
    input{
        border: none;
        border-bottom: 1px solid white;
        background: none;
        padding: 10px;
        color: white;
    }
    #nq{
        width: 300px;
    }
    #qn{
        width: 130px;
    }
    #btn{
        background-color: green;
        border: none;
        width: 180px;
        border-radius: 10px;
        height: 35px;
    }
    button{
        background-color: green;
        border: none;
        width: 180px;
        border-radius: 10px;
        height: 35px;
    }
    button a{
        text-decoration: none;
        color: white;
        font-size: 16px;
        
    }
</style>
</head>
<body>
<h1>Update Questions</h1>
<form action="qupdate.php" method="POST">
<input type="text" placeholder="Enter new question" name="question" id="nq">
<br><br>
<input type="number" placeholder="Question no*" name="qno" id="qn">
<br><br>


<input type="submit" value="SUBMIT" name="submit" id="btn">

<button><a href="admin.html">Home</a></button>
<br><br><button><a href="showqa.php">Show Questions</a></button>
</form>
</body>



<?php
include('db.php');

if (isset($_POST['submit'])) {
    $nxtpage = FALSE;
    $ques = $_POST['question'];
    $qno = $_POST['qno'];
    



    $query = "UPDATE `questions` SET `question`='$ques' WHERE qno=$qno";
    $result = mysqli_query($conn, $query);
    if ($result)
    {
        echo  '<script>alert(" Updated Successfully !!");</script>';
    }
    

}

?>