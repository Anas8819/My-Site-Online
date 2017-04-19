<?php
require'../require/connection.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF-8" />
	<title>View all Records</title>
    <link href="../css/styles.css" media="all" type="text/css" rel="stylesheet"/>
    <link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="header-bg-container"></div>

    <div id="full-page">
    <?php
	session_start();
		if(isset($_SESSION['$name']))
{
}
else
{
	header('location: ../home.php');
}
	include'header_admin.php';
	?>
    <center><strong><a href="View_member_admin.php">View All Members</a> OR </strong><strong><a href="add_product_admin.php">Add New Product</a></strong> OR <strong><a href="Add_Admin_Admin.php">Add New Admin</a></strong></center>
<div>
<center><font color="red" size="6"><?php echo @$_GET['deleted']; ?></font></center>
<table align="center" width="700" border="2">
	<tr bgcolor="yellow">
		<td colspan="7" align="center"><h2>View all the Records</h2></td>
	</tr>
	<tr align="center">
		<th>Member Id</th>
		<th>Username</th>
		<th>Email</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Gender</th>
		<th>Birthdate</th>
	</tr>
	<tr align="center">
	<?php
		$query = "SELECT * from member";
		$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($result,MYSQL_BOTH)){
			$u_id = $row['Member_id'];
			$u_name = $row[1];
			$u_email = $row[3];
			$u_fname = $row[4];
			$u_lname = $row[5];
			$u_address = $row[6];
			$u_phone = $row[7];
			$u_gender = $row[8];
			$u_bday = $row[9];
	?>
    	<td align="center"><?php echo $u_id; ?></td>
		<td align="center"><?php echo $u_name; ?></td>
		<td align="center"><?php echo $u_email; ?></td>
		<td align="center"><?php echo $u_fname; ?></td>
		<td align="center"><?php echo $u_lname; ?></td>
        <td align="center"><?php echo $u_address; ?></td>
		<td align="center"><?php echo $u_phone; ?></td>
		<td align="center"><?php echo $u_gender; ?></td>
        <td align="center"><?php echo $u_bday; ?></td>
		<td align="center"><a href="delete_member.php?del=<?php echo $u_id; ?>">Delete</a></td>
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



<script src="../bootstrap-3.3.7-dist/js/jquery.min.js" type="text/javascript"></script>
<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.7-dist/js/scripts.js"></script>