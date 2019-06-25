<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
<title>Admin Home</title>

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
<script type="text/javascript">
	
function sureToApprove(id){
	
if(confirm("Are you sure you want to delete this message?")){

window.location.href ='delete_msg.php?id='+id;
	
}
	
}

</script>

</head>

<body>

<!-- Header -->

<div id="header">

<div class="shell">

<?php
	
include 'menu.php';
	
?>
		
</div>
	
<!-- End Main Nav -->

</div>
</div>

<div id="container">

<div class="shell">
	
<div class="small-nav">
	
<a href="index.php">Dashboard</a>

<span>&gt;
</span>
	
Client Messages
	
</div>
	
<br />
		

<div id="main">
	
<div class="cl">&nbsp;</div>
	
<div id="content">

<div class="box">

<!-- Box Head -->
	
<div class="box-head">
	
<h2 class="left">Client Messages</h2>
	
<div class="right">
	
<label>search messages</label>
	
<input type="text" class="field small-field" />
	
<input type="submit" class="button" value="search" />
	
</div>
				
</div>
					
		
<div class="table">
		
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	
<tr>
		
<th width="13"><input type="checkbox" class="checkbox" />
</th>

<th>Message Content             
</th>

<th>Time Send</th>
	
<th>Status</th>
	
<th width="110" class="ac">Content Control</th>
	
</tr>
								
<?php
			
include '../includes/config.php';
	
$select = "SELECT * FROM message";
	
$result = $conn->query($select);

while($row = $result->fetch_assoc()){
	
?>
				
<tr>
					
<td><input type="checkbox" class="checkbox" /></td>
	
<td><h3><a href="#"><?php echo $row['message'] ?></a></h3></td>

<td><?php echo $row['time'] ?></td>
	
<td><a href="#"><?php echo $row['status'] ?></a></td>

<td><a href="javascript:sureToApprove(<?php echo $row['msg_id'];?>) "class="ico del" >      Delete </a></td>

</tr>
	
<?php
	
}

?>
	
</table>
		
			

<!-- End Box -->

	
</div>		
</body>

</html>
