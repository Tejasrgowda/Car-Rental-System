<?php
	
include '../includes/config.php';
	
$id = $_REQUEST['id'];
		
$query = "DELETE FROM rental_car_insurance WHERE INSURANCE_CODE = '$id'";
	
$result = $conn->query($query);
	if($result === TRUE)
{
		
echo "<script type = \"text/javascript\">
					
alert(\"Insurance Successfully Deleted\");
					
window.location = (\"add_insurance.php\")
				
</script>";
	
}

?>
