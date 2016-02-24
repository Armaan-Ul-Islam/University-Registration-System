<?php session_start();
require_once("con.php");

$studentid=mysqli_real_escape_string($con, $_POST['studentid']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$pa=md5('cuetZXCV');
$password2=md5($password);
if($studentid=='Hall admin'&&$password2==$pa){$_SESSION['Hadmin']='Hadmin'; header('location:admin.php'); die();}
if($studentid=='Bank admin'&&$password2==$pa){$_SESSION['Badmin']='Badmin'; header('location:bankadmin.php'); die();}
    $result = mysqli_query($con,"SELECT * FROM student WHERE studentid='$studentid' AND password='$password2'");


$c=mysqli_num_rows($result);
if($c>0){ $_SESSION['studentid']=$studentid; header('location:dash.php'); }
else { header('location:index.php?action=no'); }


?>