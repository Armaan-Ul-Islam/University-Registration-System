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
				    <img style='align:left;width:150px' src='http://www.geocities.ws/acmbeganer/logo.gif'>
				    
				    
				    
				    <?php include"con.php"; 
				    if(isset($_POST['sub'])){ 
					   
         //   mysql_real_escape_string($user),
         //   mysql_real_escape_string($password));
					    $studentid=mysqli_real_escape_string($con, $_POST['studentid']);
					    $password=mysqli_real_escape_string($con, $_POST['password']);    
					    $password2=mysqli_real_escape_string($con, $_POST['password2']);
					    $password3=md5($password2);   
					    $inscode=$_POST['inscode'];
					    if($studentid==''||$password==''||$password2==''||$inscode==''||($password!=$password2)||$inscode!='4092684'){echo"<br>please Fill All the Fields or check password/inscode ";}
					    else{
					    
					include"con.php";
					  $sql="INSERT INTO student (studentid,password) VALUES ('$studentid','$password3')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "<br>You are Successfully Registered";
					    
					    }
					    
					    }
					    ?>
				    
				    
				    
				    
				    
				    <?php if(!isset($_GET['reg'])){ ?>
				  <?php  if($_GET['action']=='no'){echo "<p style='color:red'> Wrong Student ID or Password</p>";}?>
				  	<h3>Student Login</h3>
					    <form method="post" action="login.php">
					    	
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="studentid" type="text" placeholder="Student ID " ></span>
						    </div>
						     <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="password" type="password" placeholder="Login Password " ></span>
						    </div>
						    
						   <div>
						   		<span><input style="color: white;width:200px;height:30px; background-color: #7845BA;
border-radius: 4px;" type="submit" value="Login"></span>
						  </div>
					    </form>
					    <?php } ?>
					    
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   <?php if(isset($_GET['reg'])){ ?>
					    
					   
					   
					   
					   
					   
					   
					   <h3>Student Register</h3>
					    <form method="post" action="index.php">
					    	
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="studentid" type="text" placeholder="Student ID " ></span>
						    </div>
						     <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="password" type="password" placeholder="Login Password " ></span>
						    </div>
						     <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="password2" type="password" placeholder="Confirm Password" ></span>
						    </div>
						    
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="inscode" type="password" placeholder="Institute Code " ></span>
						    </div>
						    
						    
						   <div>
						   		<span><input style="color: white;width:200px;height:30px; background-color: #7845BA;
border-radius: 4px;" type="submit" name="sub" value="Register"></span>
						  </div>
					    </form>
					   
					   
					   
					   
					   
					   
					    
					    <?php } ?>
					    
					    
					  
					    
					    
					    
					    <Br>
					   <p> Not Registered Yet ? <a href='index.php?reg=yes'> Register</a> </p>
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

    	
    	
            