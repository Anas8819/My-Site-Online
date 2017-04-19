	<?php
	require'../require/connection.php';
	$delete_record = $_GET['del'];
	$query = "DELETE FROM product
			  WHERE Product_id = '$delete_record'";	
	if(mysqli_query($connection,$query)){
		echo "<script>window.open('view_product_user.php?deleted=One record has been deleted successfully!' , '_self')</script>";

		
	}
?>
