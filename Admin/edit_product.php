<?php
require'../require/connection.php';
$edit_record = $_GET['id'];

	$query = "SELECT * FROM product
			  WHERE Product_id='$edit_record'";
	$result = mysqli_query($connection,$query);
	while($row = mysqli_fetch_array($result,MYSQL_BOTH)){
		$p_id = $row['Product_id'];
		$p_name = $row[1];
		$p_type = $row[2];
		$p_des = $row[3];
		$p_status = $row[4];
		$p_stock = $row[5];
		$p_price = $row[6];
		$p_img = $row['ImageSource'];
	

?>
<!DOCTYPE html>
<head>
	<title>Updating Product Record</title>
        <link href="../css/styles.css" media="all" type="text/css" rel="stylesheet"/>
	    <link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="header-bg-container"></div>

    <div id="full-page">
    <?php
	session_start();
	include'header_admin.php';
	?>
<form method="post" action="edit_product_process.php" enctype="multipart/form-data">
<table width="300" border="0" align="center">
	<tr>
		<th bgcolor="yellow" colspan="2">Edit Form</th>
	</tr>
    <tr bgcolor="lightgray">
    <td align="right">Product ID</td>
    <input type="hidden" name="p_id1" id="p_id1" value="<?php echo $p_id; ?>">
		<td><input type="text" name="p_id1" value="<?php echo $p_id; ?>" disabled><br/></td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Product Name</td>
		<td><input type="text" name="p_name1" value="<?php echo $p_name; ?>"><br/></td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Product Type</td>
		<td><input type="text" name="p_type1" value="<?php echo $p_type; ?>" /><br />
		</td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Product Description</td>
		<td><input type="text" name="p_des1" value="<?php echo $p_des; ?>" /><br />
		</td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Status</td>
		<td><input type="text" name="p_status1" value="<?php echo $p_status; ?>" /><br />
		</td>
	</tr>
    <tr bgcolor="lightgray">
		<td align="right">Stock</td>
		<td><input type="text" name="p_stock1" value="<?php echo $p_stock; ?>" /><br />
		</td>
	</tr>
    <tr bgcolor="lightgray">
		<td align="right">Price</td>
		<td><input type="text" name="p_price1" value="<?php echo $p_price; ?>" /><br />
		</td>
	</tr>
    <?php
$folder='../images/Database_Images/';
$path=$folder.$p_img;
?>
    <tr bgcolor="lightgray">
		<td align="right">Image</td>
		<td><input type="file" name="file" value="<?php echo $path; ?>" id="image" required /><br />
   		
		<td align="center"> <img height="50px" width="50px" src="<?php echo $path ?>" alt="<?php echo $p_name ?>"></td>
		</td>
	</tr>
    <tr>
    <td>
    <input type="submit" value="Update Record" name="update">
    </td>
    </tr>
</table>

</center>
</form>
</div>
<div>
<?php
	}
include'footer_admin.php';
?>
</div>
</body>
</html>
	


<script src="../bootstrap-3.3.7-dist/js/jquery.min.js" type="text/javascript"></script>
<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.7-dist/js/scripts.js"></script>