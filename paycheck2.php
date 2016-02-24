<?php
include"con.php";
$tnx=mysqli_real_escape_string($con, $_POST['tnx']);
$tc=mysqli_real_escape_string($con, $_POST['tc']);
$studentid=mysqli_real_escape_string($con, $_POST['studentid']);
$total=mysqli_real_escape_string($con, $_POST['total']);
$u="http://cuetreg.loveurl.net/paymentdone.php?studentid=".$studentid."&total=".$total;


    $result = mysqli_query($con,"SELECT * FROM sbank");
    
$a=0;  
while($row = mysqli_fetch_array($result)) {


$amount=$row['amount'];
$studentiddb=$row['studentid'];
$tnxid=$row['tnxid'];
$amount=intval($amount); $tnxid=intval($tnxid);
 
 if($tnxid==$tnx)
 
 {
 if($amount>=$total){
 if($studentiddb==$studentid){
$a=1;
 }
 }
 
 }
 
}
   
if($a==1)   
{?>
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
}  
  else {echo "<script>alert('Student ID or Payment do not Match !');</script>";}   
    
    

?>