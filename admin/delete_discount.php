<?php
	
include '../includes/config.php';
	
$id = $_REQUEST['id'];
		
$query = "DELETE FROM discount_details WHERE DISCOUNT_CODE = '$id'";
	
$result = $conn->query($query);
	if($result === TRUE)
{
		
echo "<script type = \"text/javascript\">
					
alert(\"Discount Successfully Deleted\");
					
window.location = (\"add_discount.php\")
				
</script>";
	
}

?>
