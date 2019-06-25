<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
<title>Admin Home</title>
	
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
<script type="text/javascript">
		
function sureToApprove(id){
			
if(confirm("Are you sure you want to delete this insurance?")){
				
window.location.href ='delete_insurance.php?id='+id;
			
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
			
Insurance		
</div>
		
		
<br />
		
		
<div id="main">
			
<div class="cl">&nbsp;</div>
			
			
<div id="content">
				
				
<div class="box">
					
<!-- Box Head -->
					
<div class="box-head">
						
<h2 class="left">Our Insurance</h2>
						
<div class="right">
							
<label>search Insurance</label>
							
<input type="text" class="field small-field" />
										

<input type="submit" class="button" value="search" />
						
</div>
					
</div>
					
					
<div class="table">
						
<table width="100%" border="0" cellspacing="0" cellpadding="0">
							
<tr>
								
<th width="13"><input type="checkbox" class="checkbox" /></th>
								
<th>Insurance Code</th>
								
<th>Insurance Name</th>
								
<th>Coverage Type</th>

<th>Cost Per Day</th>
								
<th width="110" class="ac">Content Control</th>
							
</tr>
							
<?php
											

include '../includes/config.php';
								
$select = "SELECT * FROM rental_car_insurance";
								
$result = $conn->query($select);
					
			

while($row = $result->fetch_assoc()){
							
?>
							
<tr>
								
<td><input type="checkbox" class="checkbox" /></td>
								
<td><h3><a href="#"><?php echo $row['INSURANCE_CODE'] ?></a></h3></td>
								
<td><?php echo $row['INSURANCE_NAME'] ?></td>
								
<td><a href="#"><?php echo $row['COVERAGE_TYPE'] ?></a></td>

<td><a href="#"><?php echo $row['COST_PER_DAY'] ?></a></td>
								
<td><a href="javascript:sureToApprove(<?php echo $row['INSURANCE_CODE'];?>)" class="ico del">Delete</a>
<a href="javascript:sureToApprove1(<?php echo $row['INSURANCE_CODE'];?>)" class="ico edit">Edit</a></td>
							
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
						

<a href="add_newinsurance.php" class="add-button"><span>Add new Insurance</span></a>
						
<div class="cl">&nbsp;</div>
						
						


</body>

</html>