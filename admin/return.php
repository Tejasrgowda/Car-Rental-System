<?php
	
include '../includes/config.php';
	
$id = $_REQUEST['id'];
	
$query = "UPDATE client SET status = 'Returned' WHERE client_id = '$id'";
	
$result = $conn->query($query);
	if($result === TRUE)
{
		
echo 'Car as sucessfully returned';
	
?>
		
<meta content="4; client_requests.php" http-equiv="refresh" />
	
<?php
	
}

?>
