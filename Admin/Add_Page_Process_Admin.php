<?php
require'../require/connection.php';
session_start();
$user_name=$_SESSION['$name'];
$query = "SELECT Admin_id from admin WHERE Admin_Name='$user_name'";
$result = mysqli_query($connection,$query);
$member = mysqli_fetch_array($result,MYSQL_BOTH);
$m=$member['Admin_id'];
	if(isset($_POST['Add'])){
		
		$p_name = $_POST['p_name1'];
		$p_title = $_POST['p_title1'];
		$p_con = $_POST['p_con1'];
		$p_status= $_POST['p_status1'];
	}
	$query1 = "INSERT INTO pages (Name,Title,Contant,Status) value ('$p_name','$p_title','$p_con','$p_status')";
if(mysqli_query($connection,$query1))
{
	header("Location: View_Pages_Admin.php");
}
else
{
	 die('Could not enter data: ' . mysql_error());
} 
?>