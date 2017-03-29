<?php
include('session.php');

$product=$_POST['product'];
$name=$_POST['name'];
$date=$_POST['date'];
$desc=$_POST['desc'];
$quo=$_POST['quo'];
$quo1=intval($quo);

$curr_quo="SELECT Quantity from product where P_id='$product'";
$reslt=mysqli_query($db, $curr_quo);
//$value=intval($quo)+ intval(mysqli_fetch_object($reslt));

$sql="UPDATE product SET Quantity=Quantity+$quo  WHERE P_id='$product'";
$act="INSERT into activity values(NULL, '$product', '$name', '$desc', '$quo', '$date', '$login_session' )";

if(empty($name)||empty($date)||empty($desc)||empty($quo)){
 $message="Please fill all the required fields!";
}
else{
if(is_numeric($quo)&& $quo>0 && strlen($quo)<4){ 
	$result=mysqli_query($db, $sql);
if($result){
	mysqli_query($db, $act);
	$message="Product added successfully";

}else{
$message="An error occured, check your values & try again!";
}
  } else
    {
    	$message="Data entered for Quantity is not numeric or is too large";
    }
}
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Procurement-ICT KNH</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
	<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
	
</head>
<body>
	<div id="heade">
       <span style="padding: 30px 0;"><img src="images/logo.png"></span>
       <label style="float:right"><a href="logout.php" >|Logout</a></label>
       <label style="float:right"><span style="color:#000;">Welcome, <?php echo $login_session; ?> </span></label>
	</div>
	<div id="header">
		
		<ul id="navigation">
			<li>
				<a href="home.php">Home</a>
			</li>
			<li class="current">
				<a href="procurement.php">Procurement</a>
			</li>
			<li>
				<a href="dispatch.php">Dispatch</a>
			</li>
			<li>
				<a href="#">Support</a>
				<ul>
					<li>
						<a href="support.php">Helpdesk</a>
					</li>
					
					<li>
						<a href="workshop.php">Workshop</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="contact.php">Contact</a>
			</li>
			<li>
				<a href="dashboard.php">Reports</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>Procurement</h2>
		 
		  <p>The ICT department as part of the organization is required to enter details of equipments procured. The form is to be filled with details of Items procured as required.
		  </p>
		  <div></div>
		  <div id="Proc-left">
		   <form method="post"  action="proc.php">
		    <h3>Items details</h3>
		     <label for="details">
				<span>Product ID</span>
				<input type="radio" name="product" value="1" checked> 1:Processing Unit(CPU)<br>
                <input type="radio" name="product" value="2"> 2:Monitor<br>
                <input type="radio" name="product" value="3"> 3:Printer<br>
                <input type="radio" name="product" value="4"> 4:Computer accessories<br>
                <input type="radio" name="product" value="5"> 5:Switch/ Wireless AP<br>
                <input type="radio" name="product" value="6"> 6:Router<br>
                <input type="radio" name="product" value="7"> 7:Network cables<br>
                <input type="radio" name="product" value="8"> 8:Cabinets<br>
                <input type="radio" name="product" value="9"> 9:UPS<br>
                <input type="radio" name="product" value="10"> 10:Other Network Accessories<br>
                <input type="radio" name="product" value="11"> 11:Printer Accessories<br>
                
                 
			</label>

		   
		 </div> 
		 <div id="Proc-right" >
		 	<div style="height:60px;"> <span style="color:red;"><?php echo $message; ?></span></div>
             <label for="name">
				<span>Name</span>
				<input type="text" id="nic" name="name">
			</label>
			<label for="date">
				<span>Date</span>
				<input type="date" name="date" id="nic">
			</label>
			<label for="Description">
				<span>Decription</span>
				<input type="text" id="nic" name="desc">
			</label>
			<label for="subject">
				<span>Quantity</span>
				<input type="text" name="quo" id="nic">
			</label>
			<input type="submit" id="sends" value="submit" style="margin-top:25px;">
             </form>
		 </div> 
	</div>
	<div id="footer">
		<div>
			
			<p>
				&copy; 2017 Kenyatta National Hospital . All rights reserved.
			</p>
		</div>
		<div id="connect">
			<a href="https:://www.facebook.com/Kenyatta-National-Hospital-222808627792716/" id="facebook" target="_blank">Facebook</a>
			<a href="https:://twitter.com/knh_hospital?lang=en" id="twitter" target="_blank">Twitter</a>
			<a href="https://knh.or.ke/" id="googleplus" target="_blank">Google&#43;</a>
		</div>
	</div>
</body>
</html>