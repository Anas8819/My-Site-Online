<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Product Detail</title>
<link href="../css/styles.css" media="all" type="text/css" rel="stylesheet" />
<link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="panal.css">
<link href="panal.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
session_start();
	if(isset($_SESSION['$name']))
{
}
else
{
	header('location: ../home.php');
}
require'../Require/connection.php';
?>
    <div id="header-bg-container"></div>

    <div id="full-page">
    <?php
	include'Header_admin.php';
	?>
<div>
	<?php
		$p_detail = $_GET['d_id'];
		$query = "SELECT * from pages WHERE Page_id='$p_detail'";
		$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($result,MYSQL_BOTH)){
			$u_id = $row['Page_id'];
			$u_name = $row[1];
			$u_type = $row[2];
			$u_des = $row[3];
			$u_status = $row[4];
	?>
    <center><strong><a href="View_member_admin.php">View All Members</a> OR </strong><strong><a href="add_product_admin.php">Add New Product</a> OR <a href="Add_Admin_Admin.php"></a>Add New Admin</strong></center>
<table align="center" width="700" border="2">
	<tr bgcolor="yellow">
		<td colspan="7" align="center"><h2>View all the Products</h2></td>
    <tr align="center">
    <th>Page ID</th>
    <td align="center"><?php echo $u_id; ?></td>
    </tr>
    <tr align="center">
    <th>Page Name</th>
    <td align="center"><?php echo $u_name; ?></td>
    </tr>
    <tr align="center">
    <th>Page Title</th>
    <td align="center"><?php echo $u_type; ?></td>
    </tr>
    <tr align="center">
    <th>Contant</th>
    <td align="center"><?php echo $u_des; ?></td>
    </tr>
    <tr align="center">
    <th>Status</th>
    <td align="center"><?php echo $r = ('Y' == $u_status) ? 'Available' : 'Not Available'; ?></td>
    </tr>
	<?php } ?>
</table>
<center><a href="logout.php"><input type="button" value="Logout" name="Submit"></a></center>
</div>
<?php
include'footer_admin.php';
?>
</div>
</body>
</html>