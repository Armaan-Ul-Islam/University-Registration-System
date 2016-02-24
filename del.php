<?php


$s=$_GET['studentid'];

include"con.php";
mysqli_query($con,"DELETE from hall where studentid='$s'");

echo"<script>alert('Successfully Deleted !'); location.href = 'http://cuetreg.loveurl.net/admin.php'; </script>";
