<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
<title>Admin Home</title>

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
<script type="text/javascript">
	
function sureToApprove(id){
	
if(confirm("Are you sure you want to delete this booking?")){
                
window.location.href ='delete_booking.php?id='+id;
	
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

<span>&gt;
</span>
	
Boking Details	
</div>
	
<br />
		

<div id="main">
	
<div class="cl">&nbsp;</div>
	
<div id="content">

<div class="box" >

<!-- Box Head -->
	
<div class="box-head" >
	
<h2 class="left">Booking Details</h2>
	
<div class="right">
	
<label>  search booking details</label>
<input type="text" class="field small-field" />
	
<input type="submit" class="button" value="search" />
	
</div>
				
</div>
					
		
<div class="table">
		
<table width="50" border="0" cellspacing="0" cellpadding="0">
	
<tr>
		
<th width="13"><input type="checkbox" class="checkbox" />
</th>

<th>BID</th>

<th>NAME</th>

<th>FROM_DT</th>
	
<th>RET_DT</th>

<th>AMOUNT</th>

<th>B_STATUS</th>

<th>REG_NO</th>

<th>DL_NO</th>

<th>IN_ID</th>

<th>DIS_NO</th>
	
<th width="110" class="ac">Content Control</th>
	
</tr>
								
<?php
								
include '../includes/config.php';
								
$select = "SELECT client.client_id,client.fname,client.phone,cars.car_name,cars.hire_cost,client.status,client.FROM_DT_TIME,client.RET_DT_TIME ,cars.car_id										
FROM client JOIN cars ON client.car_id=cars.car_id";
						
$result = $conn->query($select);
								
while($row = $result->fetch_assoc()){
	
	
?>
		
						
							
<tr>
								
<td><input type="checkbox" class="checkbox" /></td>
<td><?php echo $row['client_id'] ?></td>
<td><?php echo $row['fname'] ?></td>	

<td><?php echo $row['FROM_DT_TIME'] ?></td>
<td><?php echo $row['RET_DT_TIME'] ?></td>	
<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
<td><a href="#"><?php echo $row['status'] ?></a></td>
								
<td><h3><a href="#"><?php echo $row['car_id'] ?></a></h3></td>
								
<td><h3><a href="#"><?php echo $row['client_id'] ?></a></h3></td>
								
<td><?php echo 'NULL' ?></td>	
<td><?php echo 'NULL' ?></td>							
<td><a href="javascript:sureToApprove(<?php echo $row['client_id'];?>)" 
class="ico del">Delete</a>						
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
</body>

</html>
