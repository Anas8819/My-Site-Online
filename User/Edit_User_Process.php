<?php
require'../require/connection.php';
$folder="../images/Database_Images/";
	if(isset($_POST['update'])){
		$edit_record1 = $_POST['p_id1'];
		$p_name = $_POST['p_name1'];
		$p_type = $_POST['p_type1'];
		$p_des = $_POST['p_des1'];
		$p_status= $_POST['p_status1'];
		$p_stock= $_POST['p_stock1'];
		$p_price= $_POST['p_price1'];
		$img =$p_name.$_FILES['path']['name'];
		$path=$folder.$img;
		move_uploaded_file($_FILES['path']['tmp_name'], $path);
	$query1 = "UPDATE product
			   SET Product_name = '$p_name',
				   Product_type= '$p_type',
				   Description= '$p_des',
				   Status= '$p_status',
				   Stock= '$p_stock',
   				   Price= '$p_price',
				   ImageSource= '$img'
			   WHERE product_id = '$edit_record1'";
	}
$result = mysqli_query($connection,$query1);
 
if(!$result)
{
  die('Could not enter data: ' . mysql_error());
}
 
	header("Location: View_Product_User.php?status=updated");
?>