<?php
	
include '../includes/config.php';
	
$id = $_REQUEST['id'];
		
$query = "UPDATE cars SET hire_cost = '2000' WHERE car_id = '$id'";
	
$result = $conn->query($query);
	if($result === TRUE)
{
		
echo "<script type = \"text/javascript\">
					
alert(\"Car information Successfully updated \");
					
window.location = (\"add_vehicles.php\")
				
</script>";
	
}

?>
