



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
			
Add New Vehicles
 Category		
</div>
		
		
<br />
		
		
<div id="main">
			
<div class="cl">&nbsp;</div>
			
			
<div id="content">
				
				
<div class="box">
					
<div class="box-head">
						
<h2>Add Category</h2>
					
</div>
					
					
<form action="" method="post" enctype="multipart/form-data">
						
						
<div class="form">
								
<p>
									
									
<label>Category of the Car<span></span></label>
									
<input type="text" class="field size1" name="CATEGORY_NAME" required />
								
</p>	
								
<p>
									
								
<label>Number of luggage<span></span></label>
									
<input type="text" class="field size1" name="NO_OF_LUGGAGE" required />
								
</p>
								
<p>
									
							
<label>Number of persons <span></span></label>
									
<input type="text" class="field size1" name="NO_OF_PERSON" required />
								
</p>
								
<p>
									
								
<label>Cost Per Day <span></span></label>
									
<input type="text" class="field size1" name="COST_PER_DAY" required />
								
</p>
							
<p>
									
								
<label>Late Fees per hour<span></span></label>
									
<input type="text" class="field size1" name="LATE_FEE_PER_HOUR" required />
								
</p>	
							
						
</div>
						
						
<div class="buttons">
							
<input type="button" class="button" value="preview" />
							
<input type="submit" class="button" value="submit" name="send" />
						
</div>
						
					
</form>
				
<?php
						

if(isset($_POST['send']))
{
							
include 'includes/config.php';

							
$CATEGORY_NAME = $_POST['CATEGORY_NAME'];
							
$NO_OF_LUGGAGE = $_POST['NO_OF_LUGGAGE'];
							
$NO_OF_PERSON = $_POST['NO_OF_PERSON'];
							
$COST_PER_DAY = $_POST['COST_PER_DAY'];
	
$LATE_FEE_PER_HOUR = $_POST['LATE_FEE_PER_HOUR'];
													
							
$qry = "INSERT INTO car_category (CATEGORY_NAME,NO_OF_LUGGAGE,NO_OF_PERSON,COST_PER_DAY,LATE_FEE_PER_HOUR)
							
VALUES('$CATEGORY_NAME','$NO_OF_LUGGAGE','$NO_OF_PERSON','$COST_PER_DAY','$LATE_FEE_PER_HOUR')";
							
$result = $conn->query($qry);
	


						
if($result == TRUE){
								
echo "<script type = \"text/javascript\">
											
alert(\"Successfully inserted\");
											
window.location = (\"add_vehicles.php\")
											
</script>";
							
} 
else
{
								
echo "<script type = \"text/javascript\">
											
alert(\" Failed. Try Again\");
											
window.location = (\"add_carcategory.php\")
											
</script>";
							
}
						
}
						
					  
?>
		




























				
</div>

			
</div>
			
			
		
			
</body>

</html>