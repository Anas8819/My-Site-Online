	<?php
	require'../require/connection.php';
	$delete_record = $_GET['del'];
	$query = "DELETE FROM member
			  WHERE Member_id = '$delete_record'";
	if(mysqli_query($connection,$query)){
		echo "<script>window.open('view_member_admin.php?deleted=One record has been deleted successfully!' , '_self')</script>";
		
	}
?>
