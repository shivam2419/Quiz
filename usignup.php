<?php
include('db.php');


$name=$_POST['username'];
$pswrd=$_POST['password'];
$eid=$_POST['emailid'];
$mobile=$_POST['mnumber'];


echo $name;
$query="INSERT INTO `usignup` (`name`, `password`, `email`, `mnum`) VALUES ('$name', '$pswrd', '$eid', '$mobile')";
$result=mysqli_query($conn,$query);




?>