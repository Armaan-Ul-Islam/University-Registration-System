<?php session_start();
if(!isset($_SESSION['Hadmin'])){header('location:index.php?action=no');}
?>
<?php
header('Content-type: text/html; charset=utf-8');
$studentid=$_SESSION['studentid'];
?>

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
				 <li><a href='logout.php'><span>Logout</span></a></li>
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
				  
				  <link rel="stylesheet" href="menus.css" type="text/css" />
				  
				 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
 $(function() {
		/* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
		/* For cell text alignment */
		$("table td:first-child, table th:first-child").addClass("first");
		/* For removing the last border */
		$("table td:last-child, table th:last-child").addClass("last");
});
</script>

<style type="text/css">

	html, body, div, span, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	abbr, address, cite, code,
	del, dfn, em, img, ins, kbd, q, samp,
	small, strong, sub, sup, var,
	b, i,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td {
		margin:0;
		padding:0;
		border:0;
		outline:0;
		
		font-size:100%;
		vertical-align:baseline;
		background:transparent;
	}
	
	body {
		margin:0;
		padding:0;
		font:12px/15px "Helvetica Neue",Arial, Helvetica, sans-serif;
		color: #555;
		background:#f5f5f5 url(bg.jpg);
	}
	
	a {color:#666;}
	
	#content {width:100%; max-width:690px; margin:6% auto 0;float:left;padding-left:100px;}
	
	/*
	Pretty Table Styling
	CSS Tricks also has a nice writeup: http://css-tricks.com/feature-table-design/
	*/
	
	table {
		overflow:hidden;
		border:1px solid #d3d3d3;
		background:#fefefe;
		width:70%;
		margin:5% auto 0;
		-moz-border-radius:5px; /* FF1+ */
		-webkit-border-radius:5px; /* Saf3-4 */
		border-radius:5px;
		-moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
	}
	
	th, td {padding:18px 28px 18px; text-align:center; }
	
	th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
	
	td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
	
	tr.odd-row td {background:#f6f6f6;}
	
	td.first, th.first {text-align:left}
	
	td.last {border-right:none;}
	
	/*
	Background gradients are completely unnecessary but a neat effect.
	*/
	
	td {
		background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
	}
	
	tr.odd-row td {
		background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
	}
	
	th {
		background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
		background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#4C6F07), to(#E4F6BA));
	}
	
	/*
	I know this is annoying, but we need additional styling so webkit will recognize rounded corners on background elements.
	Nice write up of this issue: http://www.onenaught.com/posts/266/css-inner-elements-breaking-border-radius
	
	And, since we've applied the background colors to td/th element because of IE, Gecko browsers also need it.
	*/
	
	tr:first-child th.first {
		-moz-border-radius-topleft:5px;
		-webkit-border-top-left-radius:5px; /* Saf3-4 */
	}
	
	tr:first-child th.last {
		-moz-border-radius-topright:5px;
		-webkit-border-top-right-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.first {
		-moz-border-radius-bottomleft:5px;
		-webkit-border-bottom-left-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.last {
		-moz-border-radius-bottomright:5px;
		-webkit-border-bottom-right-radius:5px; /* Saf3-4 */
	}

</style>


<center>

<h3>
<?php include"con.php";

   
     //echo "Student ID :".$studentid;


?>
</h3>


</center>



<h1 style='font-size:22px' >Hall Information</h1>
<br>
<p> <a href='admin.php?entry=yes'> <b> New Entry </b></a> </p>

<?php if(isset($_POST['ent'])){


$studentid=$_POST['studentid'];
$finee=$_POST['finee'];
$fee=$_POST['fee'];
$hallname=$_POST['hallname'];
$status=$_POST['status'];



include"con.php";
if($studentid==''||$finee==''||$fee==''){echo"please Fill All the Fields ";}
else{
				$sql="UPDATE hall  SET finee='$finee', fee='$fee', hallname='$hallname' WHERE studentid='$studentid'";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Entry Successful";

}

}?>

<?php if(isset($_GET['edit'])){
?>




<form method="post" action="edit.php">
					    	
						    <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="studentid" type="text" value="<?php echo $_GET['studentid'];?>"></span>
						    </div>
						     <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="fee" type="text" placeholder="Hall Fee " ></span>
						    </div>
						     <div>
						    	<span><label></label></span>
						    	<span><input  style="width:200px;border-radius: 4px;" name="finee" type="text" placeholder="Hall Fine" ></span>
						    </div>
						    
						    <div>
						    	<span><label></label></span>
						    	<span><select  style="width:200px;border-radius: 4px;" name="hallname" type="text" placeholder="Institute Code " ></span>
						    	
						    	<option value='BBHALL'> BongaBondhu Hall</option>
						    	<option value='SMSHALL'> Shah Hall</option>
						    	<option value='THHALL'> Tarek Huda Hall</option>
						    	<option value='QKHALL'> QKHALL</option>
						    	<option value='SKHALL'>Sufia Kamal Hall</option>
						    	
						    	</select>
						    </div>
						    <div>
						    	<span><label></label></span>
						    	<span><input style='display:none' style="width:200px;border-radius: 4px;" name="status" type="text" value="Not Paid" ></span>
						    </div>
						    
						    
						   <div>
						   		<span><input style="color: white;width:200px;height:30px; background-color: #7845BA;
border-radius: 4px;" type="submit" name="ent" value="Entry"></span>
						  </div>
					    </form>





<?php
}

?>



<table cellspacing="0">
    <tr> <th><h1 style='font-size:18px' > Student_ID </h1> </th><th> <h1 style='font-size:18px' > Hall </h1></th><th> <h1 style='font-size:18px' > Fine </h1></th><th><h1 style='font-size:18px' > Fee </h1></th>  <th><h1 style='font-size:18px' > Edit </h1></th> <th><h1 style='font-size:18px' > Delete </h1></th></tr> 
   
   <?php
   include"con.php";
   
    
    $result = mysqli_query($con,"SELECT * FROM hall");

while($row = mysqli_fetch_array($result)) {
  
 

    ?>
    
    <tr>   <td><?php echo $s=$row['studentid'];  ?></td><td><?php echo $row['hallname'];  ?></td><td> <?php echo $row['finee']; ?></td><td> <?php echo $total=$row['fee'] ?> </td> <td> <a href='edit.php?studentid=<?php echo $s; ?>'>EDIT </a></td>   <td> <a href='del.php?studentid=<?php echo $s; ?>'>Delete</a></td> </tr>

    
    
    
    <?php
    }


?>




 

    
    
    
   
    </table>













				  
				  
				  
				  
				  
				  
				  
				  
				  
					    </center>
				 
  				</div>
				<div class="col span_1_of_contact">
				  <div class="company_address">
				     	
				   	
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

    	
    	
            