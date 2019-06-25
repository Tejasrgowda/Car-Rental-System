
<!DOCTYPE html>

<html lang="en">
<head>
	
<title>Car Rental</title>
	
<meta charset="utf-8">
	
<meta name="author" content="pixelhint.com">
	
<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	
<link rel="stylesheet" type="text/css" href="css/reset.css">
	
<link rel="stylesheet" type="text/css" href="css/responsive.css">

	
<script type="text/javascript" src="js/jquery.js"></script>
	
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	
<section class="">
		
<?php
			
include 'header.php';
		
?>

			
<section class="caption">
				
<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				
<h3 class="properties" style="text-align: center"> </h3>
			
</section>
	
</section><!--  end hero section  -->

	
<section class="listings">
		
<div class="wrapper">
			
<ul class="properties_list">
			
<?php
						
include 'includes/config.php';
						
$sel = "SELECT * FROM cars WHERE status = 'Available'";
						
$rs = $conn->query($sel);
						
while($rws = $rs->fetch_assoc()){
			
?>
				
<li>
					
<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						
<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					
</a>
					
<span class="price"><?php echo ''.$rws['hire_cost'];?>
</span>					
<div class="property_details">
						
<h1>
							
<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['car_type'];?>
</a>
						
</h1>
						
<h2>Car Name/Model: <span class="property_size">
<?php echo $rws['car_name'];?></span>
</h2>
					
</div>
				
</li>
			
<?php
				
}
			
?>
			
</ul>
		
</div>
	
</section>
<section class="caption">
				
<h3 class="caption" style="text-align: left" color="099999">Find What Type Of Car You Want</h3>
				
		
</section>

<form method="post">
					
<table>
						
						
<tr>
							
<td>Price:</td>
							
<td><input type="text" name="price" required>(MINIMUM Price)</td>
						
</tr>
						
				
<tr>
							
<td>Price:</td>
							
<td><input type="text" name="price1" required>(Maximum Price)</td>
						
</tr>
					
					

<tr>
							
<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						
</tr>
					
</table>
				
</form>
					
<!--  end listing section  -->

	
<section class="listings">
		
<div class="wrapper">
			
<ul class="properties_list">

<?php

include 'includes/config.php';
	
if(isset($_POST['save']))
{
							
							
$price = $_POST["price"];
							
$price1 = $_POST["price1"];
							
					
							
}


						


					
$sel1 =  "SELECT * FROM cars WHERE hire_cost
BETWEEN '$price' AND '$price1'";

	
$rs2 = $conn->query($sel1);

while($rws = $rs2->fetch_assoc()){
			
?>
				
<li>
					
<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						
<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					
</a>
					
<span class="price"><?php echo ''.$rws['hire_cost'];?>
</span>					
<div class="property_details">
						
<h1>
							
<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['car_type'];?>
</a>
						
</h1>
						
<h2>Car Name/Model: <span class="property_size">
<?php echo $rws['car_name'];?></span>
</h2>
					
</div>
				
</li>
			
<?php
				
}
			
?>
			
</ul>
		
</div>
	
</section>



