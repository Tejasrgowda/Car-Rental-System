<?php
	
include '../includes/config.php';
	
$id = $_REQUEST['id'];
		
$query = "DELETE FROM booking_details WHERE BOOKING_ID = '$id'";
	
$result = $conn->query($query);
	if($result === TRUE)
{
		
echo "<script type = \"text/javascript\">
					
alert(\"Booking Successfully Deleted\");
					
window.location = (\"bookingdetails1.php\")
				
</script>";
	
}

?>
