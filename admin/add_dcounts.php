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
			
Add New Discounts
		
</div>
		
		
<br />
		
		
<div id="main">
			
<div class="cl">&nbsp;</div>
			
			
<div id="content">
				
				
<div class="box">
					
<div class="box-head">
						
<h2>Add New Discounts</h2>
					
</div>
					
					
<form action="" method="post" enctype="multipart/form-data">
						
						
<div class="form">
								
<p>
									
<span class="req">max 100 symbols</span>
									
<label>Discount Code <span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="DISCOUNT_CODE" required />
								
</p>	
								
<p>
									
<span class="req">max 20 symbols</span>
									
<label>Discount Name <span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="DISCOUNT_NAME" required />
								
</p>
								
<p>
									
<span class="req">max 20 symbols</span>
									
<label>Expiry Date<span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="EXPIRY_DATE" required />
								
</p>
								
								
<p>
									
<span class="req">In Terms of Percentage</span>
									
<label>Discount Percentage<span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="DISCOUNT_PERCENTAGE" required />
								
</p>	
							
						
</div>
						
						
<div class="buttons">
							
<input type="button" class="button" value="preview" />
							
<input type="submit" class="button"  name="send" value="Submit Details" />
							
		
</div>
						
					
</form>
	

<?php
						

if(isset($_POST['send']))
{
							
include 'includes/config.php';

							
$DISCOUNT_CODE = $_POST['DISCOUNT_CODE'];
							
$DISCOUNT_NAME = $_POST['DISCOUNT_NAME'];
							
$EXPIRY_DATE = $_POST['EXPIRY_DATE'];
							
$DISCOUNT_PERCENTAGE = $_POST['DISCOUNT_PERCENTAGE'];
													
							
$qry = "INSERT INTO discount_details (DISCOUNT_CODE,DISCOUNT_NAME,EXPIRY_DATE,DISCOUNT_PERCENTAGE)
							
VALUES('$DISCOUNT_CODE','$DISCOUNT_NAME','$EXPIRY_DATE','$DISCOUNT_PERCENTAGE')";
							
$result = $conn->query($qry);
	


						
if($result == TRUE){
								
echo "<script type = \"text/javascript\">
											
alert(\"Successfully inserted\");
											
window.location = (\"add_discount.php\")
											
</script>";
							
} 
else
{
								
echo "<script type = \"text/javascript\">
											
alert(\" Failed. Try Again\");
											
window.location = (\"add_dcounts.php\")
											
</script>";
							
}
						
}
						
					  
?>
		




























				
</div>

			
</div>
			
			
<div id="sidebar">
				
				
<div class="box">
					
					
<div class="box-head">
						
<h2>Management</h2>
					
</div>
					
					
<div class="box-content">
						
<a href="add_discount.php" class="add-button"><span>View Our Discounts</span></a>
						
<div class="cl">&nbsp;</div>
						
						
				
					
</div>
				
</div>
			
</div>
			
			
</body>

</html>