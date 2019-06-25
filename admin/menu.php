<?php
	
error_reporting("E-NOTICE");
?>

<?php
	session_start();


if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
	
header("location: ../login.php");
	
}
?>
<div id="top">
			
<div id="top-navigation">
	


<a href="logout.php"><b>Log out</b></a>

</div>
	
</div>
<div id="navigation">
	
<ul>
		

<li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
	
<li><a href="client_requests.php"><span>Hire Requests</span></a></li>

<li><a href="index.php"><span>Messages</span></a></li>
<li><a href="add_insurance.php"><span>Insurances</span></a></li>
	
<li><a href="add_discount.php"><span>Discounts</span></a></li>
	

<li><a href="bookingdetails1.php"><span>Booking Details</span></a></li>

<li><a href="billingdetails.php"><span>Billing Details</span></a></li>

</ul>
		
</div>