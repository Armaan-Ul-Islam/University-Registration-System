<!DOCTYPE HTML>
<html>
<head>
<title>CUET Registration System </title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">	
	<div class="header-top">
		<div class="wrap">
				<div class="logo">
					
				</div>
				<div class="search_box">
				
			</div>
			<div class="clear"></div> 
	    </div>
    </div>
	<div class="header-bottom">
		 <div class="wrap"> 
			 <div id='cssmenu'>
				<ul>
				   <li><a href='index.html'><span>Home</span></a></li>
				  <li><a href='about.html'><span>About</span></a></li>
				   <li><a href='dash.php'><span>Register</span></a></li>
				   <li><a href='status.php'><span>Status</span></a></li>
				
				 
				   <div class="clear"></div> 
				</ul>
			  </div>
		 </div>
    </div>	
</div>
     <div class="content-top">
      
			<div class="wrap">
				
				<div class="section group">
				 <div class="col span_2_of_contact">
				
				  <center>
				  
				  
				  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
     padding:2px;
}
</style>
</head>
<body>

<?php 

if(!isset($_POST['submit']))
{
?>
   <form method="post" action="hidden.php">
					    	
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="studentid" type="text" placeholder="Student ID " ></span>
						    </div>
						  
						    
						   <div>
						   		<span><input style="color: white;width:200px;height:30px; background-color: #7845BA;
border-radius: 4px;" type="submit" value="Search" name='submit'></span>
						  </div>
					    </form>
					    
					    <br><br><br>
<?php


 }
 
 



?>




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




if(isset($_POST['submit']))
{
$s=$_POST['studentid'];
if($s==$ref){
echo "<tr><td>$ref </td>   <td>$Tk</td>  <td>Bkash</td> <td>$tnxR</td>      </tr>";
}
}


else{
echo "<tr><td>$ref </td>   <td>$Tk</td>  <td>Bkash</td> <td>$tnxR</td>      </tr>";
}
}
}
////


    $result2= mysqli_query($con,"SELECT * FROM sbank");
    

while($row2 = mysqli_fetch_array($result2)) {


$amount2=$row2['amount'];
$studentiddb2=$row2['studentid'];
$tnxid2=$row2['tnxid'];

if(isset($_POST['submit']))
{
$s=$_POST['studentid'];
if($s==$studentiddb2){
echo "<tr><td>$studentiddb2</td>   <td>$amount2</td>  <td>Sonali Bank</td> <td>$tnxid2</td>      </tr>";
}
}
else   {  echo "<tr><td>$studentiddb2</td>   <td>$amount2</td>  <td>Sonali Bank</td> <td>$tnxid2</td>      </tr>"; }

}









echo "</table>";

?>

</body>
</html>

				  
				  
				  
				  
				  	    </center>
				 
  				</div>
				<div class="col span_1_of_contact">
				  <div class="company_address">
				     	<br><br><br><h3>DEVELOPER  Information :</h3>
						    	
						    <p>Md. Armaan-Ul-Islam</p>
						   		<p>Bangabandhu Hall,</p>
						<p>Phone: 880 1674092684</p>
				   		
				 	 	<p>Email: <span>armaan.ul.islam9@gmail.com</span></p>
				   	
				   </div>
				 </div>
				 <div class="clear"></div>
			  </div>
			</div>
	</div>
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			<p> © 2014 All rights Reserved | Design by Armaan 0904093</a></p>
		</div>
 	</div>
 </div>
</body>
</html>

    	
    	
            