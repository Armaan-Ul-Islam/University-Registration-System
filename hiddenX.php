<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php

include"con.php";
    $result = mysqli_query($con,"SELECT * FROM bkash");
     echo "<table><tr> <th>Student ID</th><th>Amount </th><th>Payment</th><th>Tnx ID</th> </tr>";
     
     
     
     
while($row = mysqli_fetch_array($result)) {


$mytext=$row['text'];
$source=$row['phone'];
bkash_c($mytext,$tnx,$studentid,$total,$tc,$source);

}
     
     

function bkash_c($mytext,$tnx,$studentid,$total,$tc,$source){

$total=$total;
$tnx=$tnx;
$studentid=$studentid;
$tc=$tc;
$mytext=$mytext;
$key='Ref';



if($source=='bKash'){

$pieces = explode(" ", $mytext);

foreach( $pieces as $key => $value )
{




if($pieces[$key] == 'Ref' )
{
$ref=$pieces[$key+1];
 $ref= substr($ref, 0, -1); 

}



if($pieces[$key] == 'TrxID' )
{

 $tnxR=$pieces[$key+1];


}


if($pieces[$key] == 'Tk' )
{
 $Tk[]=$pieces[$key+1];


}
}
//////////////////

 $Tk=$Tk[0];
 $Tk= substr($Tk, 0, -3); 
$Tk = str_replace(",", "", $Tk);
//////////////








echo "<tr><td>$ref </td>   <td>$Tk</td>  <td>Bkash</td> <td>$tnxR</td>      </tr>";
}
}
////


    $result2= mysqli_query($con,"SELECT * FROM sbank");
    

while($row2 = mysqli_fetch_array($result2)) {


$amount2=$row2['amount'];
$studentiddb2=$row2['studentid'];
$tnxid2=$row2['tnxid'];



echo "<tr><td>$studentiddb2</td>   <td>$amount2</td>  <td>Sonali Bank</td> <td>$tnxid2</td>      </tr>";

}









echo "</table>";

?>

</body>
</html>