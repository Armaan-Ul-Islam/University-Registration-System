<?php session_start();
if(!isset($_SESSION['studentid'])){header('location:index.php?action=no');}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>CUET Registration System </title>






<script type="text/javascript">
    function getval(sel) {
         var y=sel.value;
         
          if(y=='0'){
   document.getElementById('l').style.display = "none";
document.getElementById('s').style.display = "none";  


 }
         if(y=='1'){
   document.getElementById('l').style.display = "block";
document.getElementById('s').style.display = "none";  
 

 }
		 
   if(y=='2'){
   document.getElementById('l').style.display = "none";
document.getElementById('s').style.display = "block";  


 }

 
	}
</script>
















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
				    <li><a href='status.php'><span>status</span></a></li>
				    <li><a href='logout.php'><span>Logout</span></a></li>
				 
				   <div class="clear"></div> 
				</ul>
			  </div>
		 </div>
    </div>	
</div>
     <div class="content-top">
			
			
			<center>
			<h3>Student Registration </h3>
			
			
			<?php
if(isset($_POST['submit'])){

$studentid=$_SESSION['studentid'];
$studentname=$_POST['studentname'];

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$level=$_POST['level'];
$term=$_POST['term'];
$regtype=$_POST['regtype'];
$stnum=$_POST['stnum'];
$st1=$_POST['st1'];
$st2=$_POST['st2'];
$st3=$_POST['st3'];
$st4=$_POST['st4'];
$st5=$_POST['st5'];



if($studentname=='' || $fname=='' || $mname==''){

 echo"<script> alert('You Must Fill Up All Fields !'); </script>";  echo"<a href='http://cuetreg.loveurl.net/dash.php'>Go Back </a>"; die();}
include"con.php";
$status=1;
$sql="INSERT INTO reg (studentid,studentname,fname,mname,level,term,regtype,stnum,st1,st2,st3,st4,st5,status)
VALUES ('$studentid', '$studentname', '$fname', '$mname', '$level', '$term','$regtype','$stnum','$st1','$st2','$st3','$st4','$st5', '$status')";

include"office.php";
$fee=$office_work[$level]['pay'];

$sql2="INSERT INTO office (studentid,dep,finee,fee)
VALUES ('$studentid', 'CSE', '100', '$fee')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

if (!mysqli_query($con,$sql2)) {
  die('Error: ' . mysqli_error($con));
}

echo"<script> alert('Thank you. Your Registration Successfully Submitted !');</script>";
//echo"<a href='status.php'> View Status  </a>";   

}











?>


<?php include"con.php";





$studentid=$_SESSION['studentid'];

    $resultx = mysqli_query($con,"SELECT * FROM reg WHERE studentid='$studentid' AND status='1'");


$c=mysqli_num_rows($resultx);
if($c>0){

?>
<h2> You are  Registered </h2>
<a href='status.php'><h2> View Status</h2> </a>

				 <div class="clear"></div>
			  </div>
			</div>
	</div>
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			<p> © 2014 All rights Reserved | Armaan 0904093</a></p>
		</div>
 	</div>
 </div>
</body>
</html>

<?php
  die();
  }
else {}



?>






			
			
			
			<?php 
			if(!isset($_POST['submit'])){
			?>
					    <form method="post" action="">
					    
						    
					    	
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="studentname" type="text" placeholder="Student Name " ></span>
						    </div>
						    
						    <br>
						    
						    
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="studentid" type="text" value="<?php echo $_SESSION['studentid']; ?>" ></span>
						    </div>
						    
						    
						    
						    <br>
						    
						    
						    
						    
						    
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="fname" type="text" placeholder="Father`s  Name " ></span>
						    </div>
						    
						    <br>
						     <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="mname" type="text" placeholder="Mother`s  Name " ></span>
						    </div>
						    
						    
						    <br>
						   
						    
						    
						    
				Select Registration Type: <br><br><select style="width:200px;border-radius: 4px;"  name="regtype" onchange="getval(this);">
  <option value="0">Select Any</option>
    <option value="1">Regular Term</option>
    <option value="2">Short Term</option>
    
</select>
						    
						    <br>
						   <br>
						   
						   
						   
						   <div id="s" style="display:none">
						   
						   
						   
						   <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="stnum" type="text" placeholder="Number of Subject" ></span>
						    </div>
						   <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="st1" type="text" placeholder="Subject Code " ></span>
						    </div>
						    
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="st2" type="text" placeholder="Subject Code " ></span>
						    </div>
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="st3" type="text" placeholder="Subject Code" ></span>
						    </div>
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="st4" type="text" placeholder="Subject Code" ></span>
						    </div>
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:220px;border-radius: 4px;" name="st5" type="text" placeholder="Subject Code " ></span>
						    </div>
						    
						    
						    
						    
						   </div>
						   
						   
						   
						   
						   
						   
						   
						   
						   
						    <div id="l" style="display:none">
					<select style="width:200px;border-radius: 4px;" name="level">
  <option value="1">Level 1</option>
  <option value="2">Level 2</option>
  <option value="3">Level 3</option>
  <option value="4">Level 4</option>

 
</select>
	       <br>
						    <br>
					<select style="width:200px;border-radius: 4px;" name="term">
  <option value="1">Term 1</option>
  <option value="2">Term 2</option>
 

 
</select>
						   
</div>						    
						    
						    
						    
						    
						
   
						    
						    
						    
						   <div>
						     <br>
						   		<span><input style="color: white;width:200px;height:30px; background-color: #7845BA;
border-radius: 4px;" type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
					    <?php } ?> 
					    </center>
			
			
			
			
			
			
			
			
				 <div class="clear"></div>
			  </div>
			</div>
	</div>
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			<p> © 2014 All rights Reserved | Armaan 0904093</a></p>
		</div>
 	</div>
 </div>
</body>
</html>

    	
    	
            