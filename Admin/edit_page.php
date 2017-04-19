<?php
require'../require/connection.php';
$edit_record = $_GET['id'];

	$query = "SELECT * FROM pages
			  WHERE Page_id='$edit_record'";
	$result = mysqli_query($connection,$query);
	while($row = mysqli_fetch_array($result,MYSQL_BOTH)){
		$p_id = $row['Page_id'];
		$p_name = $row[1];
		$p_title = $row[2];
		$p_con = $row[3];
		$p_status = $row[4];
?>
<!DOCTYPE html>
<head>
	<title>Updating Page Record</title>
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
<form method="post" action="edit_page_process.php">
<table width="300" border="0" align="center">
	<tr>
		<th bgcolor="yellow" colspan="2">Edit Form</th>
	</tr>
    <tr bgcolor="lightgray">
    <td align="right">Page ID</td>
    <input type="hidden" name="p_id1" id="p_id1" value="<?php echo $p_id; ?>">
		<td><input type="text" name="p_id1" value="<?php echo $p_id; ?>" disabled><br/></td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Page Name</td>
		<td><input type="text" name="p_name1" value="<?php echo $p_name; ?>"><br/></td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Page Title</td>
		<td><input type="text" name="p_title1" value="<?php echo $p_title; ?>" /><br />
		</td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Product Contant</td>
		<td><input type="text" name="p_con1" value="<?php echo $p_con; ?>" /><br />
		</td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Status</td>
		<td><input type="text" name="p_status1" value="<?php echo $p_status; ?>" /><br />
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