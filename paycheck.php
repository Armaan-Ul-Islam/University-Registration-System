<?php session_start(); $_SESSION['token']=007;


class showmsgc{
function showmsg(){

echo"<script>alert('Wrong Transection ID');</script>";
}
}
include"con.php";
$tnx=mysqli_real_escape_string($con, $_POST['tnx']);
$tc=mysqli_real_escape_string($con, $_POST['tc']);
$studentid=mysqli_real_escape_string($con, $_POST['studentid']);
$total=mysqli_real_escape_string($con, $_POST['total']);

    $result = mysqli_query($con,"SELECT * FROM bkash");
    $cout=mysqli_num_rows($result);
    $GLOBALS['i']=0;
$GLOBALS['t']=$cout;

function bkash_c($mytext,$tnx,$studentid,$total,$tc,$source){
$total=$total;
$tnx=$tnx;
$studentid=$studentid;
$tc=$tc;
$mytext=$mytext;
$key='Ref';


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






if($tnxR==$tnx) {
if($studentid==$ref)
{



if($source!='bKash'){ echo "<script>alert('Illegal activity detected'); </script>";}
else{

$Tk=intval($Tk);
$total=intval($total);


if ($Tk>=$total){


$u="http://cuetreg.loveurl.net/paymentdone.php?studentid=".$studentid."&total=".$total."&tc=".$tc;

?>

<script>
if (window.confirm('Thank you for your payment !'))
{

function Redirect(url)
{
 location.href = url;
}

Redirect ("<?php echo $u; ?>");



}

</script>


<?php


} else echo "<script>alert('Amount Did not match'); </script>";

}

}
else echo "<script>alert('Student Id(Ref) did not match'); </script>";
}

else{
/*
if($GLOBALS['i'] =='0'){
$nobj=new showmsgc();
$nobj->showmsg();
$GLOBALS['i'] =50;
}

*/
$GLOBALS['i']=$GLOBALS['i']+1;

}







}











while($row = mysqli_fetch_array($result)) {


$mytext=$row['text'];
$source=$row['phone'];
bkash_c($mytext,$tnx,$studentid,$total,$tc,$source);

}





if($GLOBALS['i']==$GLOBALS['t']){
$nobj=new showmsgc();
$nobj->showmsg();
}
?>