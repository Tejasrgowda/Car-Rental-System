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
			
Add New Cars
		
</div>
		
		
<br />
		
		
<div id="main">
			
<div class="cl">&nbsp;</div>
			
			
<div id="content">
				
				
<div class="box">
					
<div class="box-head">
						
<h2>Add New Cars</h2>
					
</div>
					
					
<form action="" method="post" enctype="multipart/form-data">
						
						
<div class="form">

<p>
									
<span class="req">max 100 symbols</span>
									
<label>Vehicle ID <span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="car_id" required />
								
</p>								
<p>
									
<span class="req">max 100 symbols</span>
									
<label>Vehicle Name <span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="car_name" required />
								
</p>	
								
<p>
									
<span class="req">max 20 symbols</span>
									
<label>Vehicle Make <span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="car_type" required />
								
</p>
								
<p>
									
<span class="req">max 20 symbols</span>
									
<label>Vehicle Hire Price <span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="hire_cost" required />
								
</p>
								
<p>
									
<span class="req">Current Images</span>
									
<label>Vehicle Image <span>(Required Field)</span></label>
									
<input type="file"  name="photo" required />
								
</p>
								
<p>
									
<span class="req">In Terms of Passenger Seats</span>
									
<label>Vehicle Capacity<span>(Required Field)</span></label>
									
<input type="text" class="field size1" name="capacity" required />
								
</p>	
<p>
									
									
<label>Car Category<span>(Required Field)</span></label>

<select name="CAR_CATEGORY_NAME">
					
<option> Select Category </option>
	
								
<option> COMPACT</option>
								
<option>ECONOMY</option>

<option>FULL SIZE</option>

<option>FULL SIZE SUV</option>

<option>LUXURY CAR</option>

<option>MID SIZE</option>

<option>MINI VAN</option>

<option>STANDARD</option>

<option>STANDARD SUV</option>
							
</select>
									
								
</p>
								
						
</div>
						
						
<div class="buttons">
							
<input type="button" class="button" value="preview" />
							
<input type="submit" class="button"  name="send" value="Submit" />
							
		
</div>
						
					
</form>
	

<?php
						

if(isset($_POST['send']))
{
							
include 'includes/config.php';
                                                                              

							
$car_id = $_POST['car_id'];
							
$car_type = $_POST['car_type'];
							
$car_name = $_POST['car_name'];
							
$hire_cost = $_POST['hire_cost'];

$capacity = $_POST['capacity'];

$CAR_CATEGORY_NAME = $_POST['CAR_CATEGORY_NAME'];

$qry = "INSERT INTO cars(car_id,car_type,car_name,hire_cost,capacity,CAR_CATEGORY_NAME)
							
VALUES('$car_id','$car_type','$car_name','$hire_cost','$capacity','$CAR_CATEGORY_NAME')";
							
													
							

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
											
window.location = (\"add_cars1.php\")
											
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
						
<a href="add_vehicles.php" class="add-button"><span>View Our Vehicles</span></a>
						
<div class="cl">&nbsp;</div>
						
						
				
					
</div>
				
</div>
			
</div>
			
			
</body>

</html>