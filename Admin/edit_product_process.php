<?php
require'../require/connection.php';
session_start();
$folder="../images/Database_Images/";
	if(isset($_POST['update'])){
		$edit_record1 = $_POST['p_id1'];
		$p_name = $_POST['p_name1'];
		$p_type = $_POST['p_type1'];
		$p_des = $_POST['p_des1'];
		$p_status= $_POST['p_status1'];
		$p_stock= $_POST['p_stock1'];
		$p_price= $_POST['p_price1'];
		$img =$p_name.$_FILES['file']['name'];
		$path=$folder.$img;
		move_uploaded_file($_FILES['file']['tmp_name'], $path);
	$query1 = "UPDATE product
			   SET product_name = '$p_name',
				   product_type= '$p_type',
				   description= '$p_des',
				   status= '$p_status',
				   stock= '$p_stock',
   				   price= '$p_price',
				   imagesource= '$img'
			   WHERE product_id = '$edit_record1'";
	}
$result = mysqli_query($connection,$query1);
 
if(!$result)
{
  die('Could not enter data: ' . mysql_error());
}
 
	header("Location: View_Product_Admin.php?status=updated");
?>