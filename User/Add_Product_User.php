<?php
require'../require/connection.php';

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add Product</title>
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

<center>
<form action="Add_Product_Process_User.php" method="post" enctype="multipart/form-data">
    
      
    <br><br>
    <strong>Product Name</strong><br>
    <input type="text" name="p_name1" value="" placeholder="Product Name" required><br><br>
    <strong>Product Type</strong><br>
    <input type="text" name="p_type1" value="" placeholder="Product Type" required><br><br>
    <strong>Description</strong><br>
    <input type="text" name="p_des1" value="" placeholder="Description" required><br><br>
    <strong>Status</strong><br>
    <input type="text" name="p_status1" value="" placeholder="Status" required><br><br>
    <strong>Stock</strong><br>
    <input type="number" name="p_stock1" value="" placeholder="Stock"><br><br>
    <strong>Price</strong><br>
    <input type="number" name="p_price1" value="" placeholder="Price" required><br><br>
    <strong>Discount</strong><br>
    <input type="number" name="p_dis1" value="" placeholder="Discount" required><br><br>

    <strong>Image</strong><br>
    <input type="file" name="file" id="image"><br><br>
    
    <input type="submit" name="Add" value="Submit">
</form>
</center>
<?php
include'footer_user.php';
?>
</div>
</body>
</html>