<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
<title>Admin Home</title>
	
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
<script type="text/javascript">
		
function sureToApprove(id){
			
if(confirm("Are you sure you want to delete this ?")){
				
window.location.href ='delete_discount.php?id='+id;
			
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
			
Bill		
</div>
		
		
<br />
		
		
<div id="main">
			
<div class="cl">&nbsp;</div>
			
			
<div id="content">
				
				
<div class="box">
					
<!-- Box Head -->
					
<div class="box-head">
						
<h2 class="left">Reciept</h2>
						
<div class="right">
							
<label>search Billing</label>
							
<input type="text" class="field small-field" />
							
<input type="submit" class="button" value="search" />
						
</div>
					
</div>
					
					
<div class="table">
						
<table width="100%" border="0" cellspacing="0" cellpadding="0">
							
<tr>
								
<th width="13"><input type="checkbox" class="checkbox" /></th>
								
<th>Bill No.</th>
								
<th>Bill Date</th>
								
<th>Booking ID</th>

<th>Discount Amount</th>

<th>Tax</th>

<th>Late Fee</th>

<th>Total Amount</th>
								
							
</tr>
							
<?php
											

include '../includes/config.php';
								
$select = "SELECT * FROM billing_details";
								
$result = $conn->query($select);
					
			

while($row = $result->fetch_assoc()){
							
?>
							
<tr>
								
<td><input type="checkbox" class="checkbox" /></td>
								
<td><h3><a href="#"><?php echo $row['BILL_ID'] ?></a></h3></td>
								
<td><?php echo $row['BILL_DATE'] ?></td>
	
<td><?php echo $row['BOOKING_ID'] ?></td>
	
<td><?php echo $row['DISCOUNT_AMOUNT'] ?></td>
								
<td><a href="#"><?php echo $row['TAX_AMOUNT'] ?></a></td>

<td><a href="#"><?php echo $row['TOTAL_LATE_FEE'] ?></a></td>

<td><a href="#"><?php echo $row['TOTAL_AMOUNT'] ?></a></td>								

					
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
					
<h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>
					
				
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
						

<a href="billingdetails.php" class="add-button"><span>New Billings</span></a>
						
<div class="cl">&nbsp;</div>
						
						


</body>

</html>