<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
<title>Admin Home</title>

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
<script type="text/javascript">
		
function sureToApprove(id){
	
if(confirm("Are you sure you want to Approve this request?")){
	
window.location.href ='approve.php?id='+id;
 	
}
		
}
	

function sureToreturn(id){
	
if(confirm("Are you sure car is returned?")){
	
window.location.href ='return.php?id='+id;
 	
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
</div>

<div id="container">
	
<div class="shell">
	
<div class="small-nav">
			
<a href="index.php">Dashboard</a>
			
<span>&gt;</span>
	
Client Requests
		
</div>
		
		
<br />
	
<div id="main">
			
<div class="cl">&nbsp;</div>
	
		
			
<div id="content">
		
		
				
<div class="box">
	
				
<!-- Box Head -->
					
<div class="box-head">
	
<h2 class="left">Client Requests</h2>
	
<div class="right">
			
<label>search requests</label>
		
<input type="text" class="field small-field" />
	
<input type="submit" class="button" value="search" />
						
</div>
					
</div>
					
					

<div class="table">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
						
<tr>
								
<th width="13"><input type="checkbox" class="checkbox" /></th>
								
<th>Client Name</th>
								
<th>Client Phone</th>
								
<th>Car Booked</th>
								
<th>Mpesa ID</th>
								
<th>Status</th>
	
<th>From</th>

<th>TO</th>
							
<th width="110" class="ac">Content Control</th>
							
</tr>
							
<?php
								
include '../includes/config.php';
								
$select = "SELECT client.client_id,client.fname,client.phone,cars.car_name,cars.hire_cost,client.status,client.FROM_DT_TIME,client.RET_DT_TIME 										
FROM client JOIN cars ON client.car_id=cars.car_id";
								
$result = $conn->query($select);
								
while($row = $result->fetch_assoc()){
							
?>
							
<tr>
								
<td><input type="checkbox" class="checkbox" /></td>
								
<td><h3><a href="#"><?php echo $row['fname'] ?></a></h3></td>
								
<td><h3><a href="#"><?php echo $row['phone'] ?></a></h3></td>
								
		
<td><?php echo $row['car_name'] ?></td>
		


<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
								
<td><a href="#"><?php echo $row['status'] ?></a></td>
	
<td><?php echo $row['FROM_DT_TIME'] ?></td>
<td><?php echo $row['RET_DT_TIME'] ?></td>	

						
<td><a href="javascript:sureToApprove(<?php echo $row['client_id'];?>)" 
class="ico edit">Approve</a>
<a href="#" class="ico del">Delete</a>
	
<a href="javascript:sureToreturn(<?php echo $row['client_id'];?>)" 
class="ico edit">Return</a>	</td>					
</tr>
							
<?php
	
							
}
							
?>
						
</table>
						
						
						
<!-- Pagging -->
						
<div class="pagging">
							
							
</div>
						
</div>
						
<!-- End Pagging -->
						
					
</div>
					
				
				
</div>
				
<!-- End Box -->

			
</div>
			<!-- End Content -->
			
			
			
			
<div class="cl">&nbsp;</div>			
		
</div>
		<!-- Main -->
	
</div>
</div>
<!-- End Container -->
	

</body>
</html>