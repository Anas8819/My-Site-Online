<?php
require'../require/connection.php';
session_start();
	if(isset($_POST['update'])){
		$edit_record1 = $_POST['p_id1'];
		$p_name = $_POST['p_name1'];
		$p_title = $_POST['p_title1'];
		$p_con = $_POST['p_con1'];
		$p_status= $_POST['p_status1'];
	$query1 = "UPDATE pages
			   SET Name = '$p_name',
				   Title= '$p_title',
				   Contant= '$p_con',
				   Status= '$p_status'
			   WHERE Page_id = $edit_record1";
	}
$result = mysqli_query($connection,$query1);
 
if(!$result)
{
  die('Could not enter data: ' . mysql_error());
}
 
	header("Location: View_Pages_Admin.php?status=updated");
?>