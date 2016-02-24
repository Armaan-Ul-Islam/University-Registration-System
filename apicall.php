<?php
header("Content-Type: text/html; charset=utf-8");

require_once('api.php');





 $phone = $_GET["phone"];


        $smscenter = $_GET["smscenter"];


        $text_utf8 = rawurldecode($_GET["text"]);

$api=new MysqlDatabase();
 $array = array('smscenter'=>111, 'phone'=>222, 'text'=>333);


$api->insert('bkash',$array);











?>