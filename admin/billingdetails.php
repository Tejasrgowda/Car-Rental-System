<?php
	include '../includes/config.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
<title>Admin Home</title>
	
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
             			
</head>
<body>
<div id="header">
	
<div class="shell">
		
		
<?php
			
include 'menu.php';
		
?>
		
</div>
	
</div>
</div>

<div id="container">
	
<div class="shell">
		
		
<div class="small-nav">
			
<a href="index.php">Dashboard</a>
			
<span>&gt;</span>
			

Billing Details
		
</div>
		
		
<br />
		
		
<div id="main">
			
<div class="cl">&nbsp;</div>
			
			
<div id="content">
				
				
<div class="box">
					
<div class="box-head">
						
<h2>Billing</h2>
					
</div>
					
					
<form action="" method="post" enctype="multipart/form-data">
	     
					
						
<div class="form">
								


<p>
									
<span class="req"></span>
									
<label>Billing ID<span></span></label>
									
<input type="text" class="field size1" name="BILL_ID" required />
								
</p>

<p>
									
<span class="req"></span>
									
<label>BILLING DATE<span></span></label>
									
<input type="text" class="field size1" name="BILL_DATE" required />
								
</p>

<p>
									
<span class="req"></span>
									
<label>Bill Status<span></span></label>
									
<input type="text" class="field size1" name="BILL_STATUS" required />
								
</p>
	
								

								
								
<p>
									
<span class="req"></span>
									
<label>Booking ID<span></span></label>
									
<input type="text" class="field size1" name="BOOKING_ID" required />
								
</p>

<p>
									
<span class="req"></span>
									
<label>Hire Amount</label>
									
<input type="text" class="field size1" name="HIRE_AMOUNT"  />
								
</p>									
<p>
									
<span class="req"></span>
									
<label>Discount Amount</label>
									
<input type="text" class="field size1" name="DISCOUNT_AMOUNT"  />
								
</p>	
							
						

<p>
									
<span class="req"></span>
									
<label>Tax Amount<span></span></label>
									
<input type="text" class="field size1" name="TAX_AMOUNT" required />
								
</p>	
							
						
	
<p>
									
<span class="req"></span>
									
<label>Total Late Fees<span></span></label>
									
<input type="text" class="field size1" name="TOTAL_LATE_FEE" required />
								
</p>	
							
						
				
						
<div class="buttons">
							
<input type="submit" class="button"  name="send" value="Submit Details"/>
<a href="print.php" class="button">Print</a>
 							
</div>
	
</div>
	</div>
			
</div>
						
					
</form>
	

<?php
						

if(isset($_POST['send']))   
{
							
include 'includes/config.php';

$BILL_STATUS = $_POST['BILL_STATUS'];
							
$BILL_ID = $_POST['BILL_ID'];
							
$BILL_DATE = $_POST['BILL_DATE'];
														
$BOOKING_ID = $_POST['BOOKING_ID'];
$DISCOUNT_AMOUNT = $_POST['DISCOUNT_AMOUNT'];
$TAX_AMOUNT = $_POST['TAX_AMOUNT'];
$TOTAL_LATE_FEE = $_POST['TOTAL_LATE_FEE'];
	
$HIRE_AMOUNT = $_POST['HIRE_AMOUNT'];
	

												
							
$qry = "INSERT INTO billing_details (BILL_ID,BILL_DATE,BILL_STATUS,BOOKING_ID,DISCOUNT_AMOUNT,TAX_AMOUNT,TOTAL_LATE_FEE,HIRE_AMOUNT,TOTAL_AMOUNT)
							
VALUES('$BILL_ID','$BILL_DATE','P','$BOOKING_ID','$DISCOUNT_AMOUNT','$TAX_AMOUNT','$TOTAL_LATE_FEE','$HIRE_AMOUNT',('$TAX_AMOUNT' + '$TOTAL_LATE_FEE' + '$HIRE_AMOUNT')- '$DISCOUNT_AMOUNT')";
							
$result = $conn->query($qry);
	

						
if($result == TRUE){
								
echo "<script type = \"text/javascript\">
											
alert(\"Successfully inserted\");
											
window.location = (\"billingdetails.php\")
											
</script>";
							
} 
else
{

echo "<script type = \"text/javascript\">
											
alert(\" Failed. Try Again\");
											
window.location = (\"billingdetails.php\")
											
</script>";
			
}
						
}
						
					  
?>

<div id="sidebar">
				
				
<!-- Box -->
				
<div class="box">
					
					
<!-- Box Head -->
					
<div class="box-head">
						
<h2>Calculation</h2>
					
</div>
					
<!-- End Box Head-->
					
					
<div class="box-content">
						

<a href="latefees.php" class="add-button"><span>Calculate late Fees and Tax</span></a>
 
<a href="discountamt.php" class="add-button"><span>Calculate Discount Amount</span></a>
					
<div class="cl">&nbsp;</div>
			
</div>

			
</div>
			
			
			
</div>
			
</div>
			
			
</body>

</html>