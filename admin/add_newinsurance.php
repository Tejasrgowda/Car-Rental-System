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
			
Add New Insurances
		
</div>
		
		

<br />
		
		
<div id="main">
			
<div class="cl">&nbsp;</div>
			
			
<div id="content">
				
				
<div class="box">
					
<div class="box-head">
						
<h2>Add New Insurances</h2>
					
</div>
					
					
<form action="" method="post" enctype="multipart/form-data">
						
						
<div class="form">
								
<p>
									
<span class="req">max 100 symbols</span>
									
<label>Insurance Code <span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="INSURANCE_CODE" required />
								
</p>	
								
<p>
									
<span class="req">max 20 symbols</span>
									
<label>Insurance Name <span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="INSURANCE_NAME" required />
								
</p>
								
<p>
									
<span class="req">max 20 symbols</span>
									
<label>Coverage Type<span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="COVERAGE_TYPE" required />
								
</p>
								
								
<p>
									
<span class="req">In Terms of Rs.</span>
									
<label>Cost Per Day<span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="COST_PER_DAY" required />
								
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

							
$INSURANCE_CODE = $_POST['INSURANCE_CODE'];
							
$INSURANCE_NAME = $_POST['INSURANCE_NAME'];
							
$COVERAGE_TYPE = $_POST['COVERAGE_TYPE'];
							
$COST_PER_DAY = $_POST['COST_PER_DAY'];
													
							
$qry = "INSERT INTO rental_car_insurance (INSURANCE_CODE,INSURANCE_NAME,COVERAGE_TYPE,COST_PER_DAY)
							
VALUES('$INSURANCE_CODE','$INSURANCE_NAME','$COVERAGE_TYPE','$COST_PER_DAY')";
							
$result = $conn->query($qry);
	


						
if($result == TRUE){
								
echo "<script type = \"text/javascript\">
											
alert(\"Successfully inserted\");
											
window.location = (\"add_insurance.php\")
											
</script>";
							
} 
else
{
								
echo "<script type = \"text/javascript\">
											
alert(\" Failed. Try Again\");
											
window.location = (\"add_newinsurance.php\")
											
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
						
<a href="add_Insurance.php" class="add-button"><span>View Our Insurances</span></a>
						
<div class="cl">&nbsp;</div>
						
						
				
					
</div>
				
</div>
			
</div>
			
			
</body>

</html>