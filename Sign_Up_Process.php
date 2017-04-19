<?php
require'require/connection.php';
	if(isset($_POST['Add'])){
		$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
		$p_name = $_POST['p_name1'];
		$p_pass = $_POST['p_pass1'];
		$p_pass=md5($p_pass);
		$p_mail = $_POST['p_mail1'];
		$p_fname= $_POST['p_fname1'];
		$p_lname= $_POST['p_lname1'];
		$p_address= $_POST['p_address1'];
		$p_phone= $_POST['p_phone1'];
		$p_gender=$_POST['p_gender1'];
		$p_bday=$_POST['p_bday1'];
	}
	echo $p_phone;
	$query1 = "INSERT INTO member (Username,Password,Email,F_name,L_Name,Address,Phone,Gender,Birthdate) value ('$p_name','$p_pass','$p_mail','$p_fname','$p_lname','$p_address',$p_phone,'$p_gender','$p_bday')";
$result = mysqli_query($connection,$query1);
 
if(!$result)
{
  die('Could not enter data: ' . mysql_error());
}
	header("Location: login.php?status=updated");
?>