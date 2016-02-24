<?php

/*
This demo shows how to handle requests from SMS Gateway with full UTF-8 support and send reply SMS back
*/

//setup PHP UTF-8 stuff
setlocale(LC_CTYPE, 'en_US.UTF-8');
mb_internal_encoding("UTF-8");
mb_http_output('UTF-8');


//read parameters from HTTP Get URL


//if parameters are not present in HTTP url, they can be also present in HTTP header

        $phone = $_GET["phone"];


        $smscenter = $_GET["smscenter"];


        $text= rawurldecode($_GET["text"]);





include "api.php";
include "con.php";
include"con.php";
					  $sql="INSERT INTO bkash(smscenter,phone,text) VALUES ('$smscenter ','$phone','$text')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
//header('Content-Type: text/html; charset=utf-8');
//header("text: $reply_header"); //if you don't want reply sms, comment out this this line


// Debug outputs:
//echo "phone = $phone\n";
//echo "smscenter = $smscenter\n";
//echo "text_utf8 = $text_utf8\n";
//echo "reply_utf8 = $reply_utf8\n";
return true;
?>





