<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
<title>Admin Home</title>
	
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
<script type="text/javascript">
		
function sureToApprove(id){
			
if(confirm("Are you sure you want to delete this car?")){
				
window.location.href ='delete_car.php?id='+id;
			
}
		
}
	

function sureToApprove1(id){
			
if(confirm("Are you sure you want to update this car information?")){
				
window.location.href ='update.php?id='+id;
			
}
		
}
	


</script>
</head>
<body>
<!-- Header -->
<div id="header">
	
<div class="shell">
		
		
<?php
			
include 'menu.php';
		
?>
		
</div>
		
<!-- End Main Nav -->
	
</div>
</div>

<div id="container">
	
<div class="shell">
		
		
<div class="small-nav">
			
<a href="index.php">Dashboard</a>
			
<span>&gt;</span>
			
Vehicle Management
		
</div>
		
		
<br />
		
		
<div id="main">
			
<div class="cl">&nbsp;</div>
			
			
<div id="content">
				
				
<div class="box">
					
<!-- Box Head -->
					
<div class="box-head">
						
<h2 class="left">Our Vehicles</h2>
						
<div class="right">
							
<label>search vehicles</label>
							
<input type="text" class="field small-field" />
							
<input type="submit" class="button" value="search" />
						
</div>
					
</div>
					
					
<div class="table">
						
<table width="100%" border="0" cellspacing="0" cellpadding="0">
							
<tr>
								
<th width="13"><input type="checkbox" class="checkbox" /></th>
								
<th>Vehicle Make</th>
								
<th>Car Type</th>
								
<th>Hire Price</th>
								
<th width="110" class="ac">Content Control</th>
							
</tr>
							
<?php
								
include '../includes/config.php';
								
$select = "SELECT * FROM cars WHERE status = 'Available'";
								
$result = $conn->query($select);
					
			

while($row = $result->fetch_assoc()){
							
?>
							
<tr>
								
<td><input type="checkbox" class="checkbox" /></td>
								
<td><h3><a href="#"><?php echo $row['car_type'] ?></a></h3></td>
								
<td><?php echo $row['car_name'] ?></td>
								
<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
								
<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a>
<a href="javascript:sureToApprove1(<?php echo $row['car_id'];?>)" class="ico edit">Edit</a></td>
							
</tr>
							
<?php
								
}
							
?>
						
</table>
						
						
<!-- Pagging -->
						
<div class="pagging">
							
<div class="left"></div>
							
						
</div>
						
</div>
						
<!-- End Pagging -->
						
					
</div>
					
				
				
</div>
				
<!-- End Box -->

			
</div>
			
<!-- End Content -->
			
			
<!-- Sidebar -->
			
<div id="sidebar">
				
				
<!-- Box -->
				
<div class="box">
					
					
<!-- Box Head -->
					
<div class="box-head">
						
<h2>Management</h2>
					
</div>
					
<!-- End Box Head-->
					
					
<div class="box-content">
						

<a href="add_cars.php" class="add-button"><span>Add new Vehicles</span></a>
 
<a href="add_carcategory.php" class="add-button"><span>Add car category</span></a>
					
<div class="cl">&nbsp;</div>
						
						


</body>

</html>