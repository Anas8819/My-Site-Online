<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>My Product</title>
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
	include'Header_user.php';
	?>
<center><strong><a href="product_show_user.php">View All Products</a> Or Product Catagories</strong></center>
<div>
<center>
<form action="view_product_user.php" method="post">
  <input type="checkbox" name="type" value="Mobiles"> Mobiles
  <input type="checkbox" name="type" value="Car"> Car
  <input type="checkbox" name="type" value="Laptop"> Laptop <br><br>
  <a href="view_my_products.php"> <strong>View My Products</strong></a> OR
  <a href="add_product_user.php"> <strong>Add New Product</strong></a><br><br>
  <input type="submit" name="choice" value="Show Detail">
</form>
</center>
</div>
<div>
<table align="center" width="700" border="2">
	<tr bgcolor="yellow">
		<td colspan="7" align="center"><h2>View all the Products</h2></td>
	</tr>
	<tr align="center">
		<th>Product ID</th>
		<th>Product Name</th>
        <th>Product Type</th>
        <th>Price</th>
		<th>Image</th>
	</tr>
	<tr align="center">
	<?php
		if($_SESSION['$name']!=NULL)
		{
			$username=$_SESSION['$name'];
			$query = "SELECT Member_id from member WHERE Username='$username'";
		}
		$result = mysqli_query($connection,$query);
		$member = mysqli_fetch_array($result,MYSQL_BOTH);
		$temp_id = $member['Member_id'];
		$query="SELECT * from product WHERE Member_id='$member[Member_id]'";
		$result = mysqli_query($connection,$query);
		while($row = mysqli_fetch_array($result,MYSQL_BOTH)){
			$u_id = $row[0];
			$u_name = $row[1];
			$u_type = $row[2];
			$u_price = $row[6];
			$u_img = $row[8];


	?>
		<td align="center"><?php echo $u_id; ?></td>
		<td align="center"><a href="product_detail_user.php?d_id=<?php echo $u_id; ?>"><?php echo $u_name; ?></a></td>
   		<td align="center"><?php echo $u_type; ?></td>
		<td align="center"><?php echo $u_price; ?></td>
		   <?php
$folder='../images/Database_Images/';
$path=$folder.$u_img;
	?>
		<td align="center"> <img height="50px" width="50px" src="<?php echo $path ?>" alt="<?php echo $u_name ?>"></td>
        <td align="center"><a href="delete_product.php?del=<?php echo $u_id; ?>">Delete</a></td>
		<td align="center"><a href="edit_user.php?id=<?php echo $u_id ?>">Edit</a></td>
	</tr>
	<?php } ?>
</table>
<br><br>
<center><a href="logout.php"><input type="button" value="Logout" name="Submit"></a></center>
</div>
<?php
include'footer_user.php';
?>
</div>
</body>
</html>	