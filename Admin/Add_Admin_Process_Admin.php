<?php
require'../require/connection.php';
session_start();
$user_name=$_SESSION['$name'];
	if(isset($_POST['Add'])){
		$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
		$p_name = $_POST['p_name1'];
		$p_pass = $_POST['p_pass1'];
		$p_pass=base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $p_pass, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
		$p_email = $_POST['p_mail1'];
		$p_fname= $_POST['p_fname1'];
		$p_lname= $_POST['p_lname1'];
		$p_address= $_POST['p_address1'];
		$p_phone= $_POST['p_phone1'];
		$p_gender= $_POST['p_gender1'];
	}
	$query1 = "INSERT INTO admin (Admin_Name,Admin_Pass,Email,F_name,L_Name,Address,Phone,Gender) value ('$p_name','$p_pass','$p_email','$p_fname','$p_lname','$p_address','$p_phone','$p_gender')";
if(mysqli_query($connection,$query1))
{
	header("Location: View_Product_Admin.php");
}
else
{
	 die('Could not enter data: ' . mysql_error());
} 
?>