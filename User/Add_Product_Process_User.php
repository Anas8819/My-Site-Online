<?php
require'../require/connection.php';
session_start();
$user_name=$_SESSION['$name'];
$query = "SELECT Member_id from member WHERE Username='$user_name'";
$result = mysqli_query($connection,$query);
$member = mysqli_fetch_array($result,MYSQL_BOTH);
$m=$member['Member_id'];
$folder="../images/Database_Images/";
	if(isset($_POST['Add'])){
		
		$p_name = $_POST['p_name1'];
		$p_type = $_POST['p_type1'];
		$p_des = $_POST['p_des1'];
		$p_status= $_POST['p_status1'];
		$p_stock= $_POST['p_stock1'];
		$p_price= $_POST['p_price1'];
		$img =$p_name.$_FILES['file']['name'];
		$path=$folder.$img;
		$p_dis= $_POST['p_dis1'];
	}
	move_uploaded_file($_FILES['file']['tmp_name'], $path);
	$query1 = "INSERT INTO product (Product_name,Product_Type,Description,Status,Stock,Price,Discount,Member_id,ImageSource) value ('$p_name','$p_type','$p_des','$p_status','$p_stock','$p_price','$p_dis','$m','$img')";
	//var_dump($query1);
	//die;
$result = mysqli_query($connection,$query1);
 
if(!$result)
{
  die('Could not enter data: ' . mysql_error());
}
	header("Location: View_Product_User.php?status=updated");
?>