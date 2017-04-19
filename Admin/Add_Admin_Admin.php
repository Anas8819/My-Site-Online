<?php
require'../require/connection.php';

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add Admin</title>
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
	include'Header_Admin.php';
	?>

<center>
<form action="Add_Admin_Process_Admin.php" method="post" enctype="multipart/form-data">
    
      
    <br><br>
    <strong>Admin Name</strong><br>
    <input type="text" name="p_name1" value="" placeholder="Admin Name" required><br><br>
    <strong>Admin Pass</strong><br>
    <input type="password" name="p_pass1" value="" placeholder="Password" required><br><br>
    <strong>Email</strong><br>
    <input type="email" name="p_mail1" value="" placeholder="Email" required><br><br>
    <strong>First Name</strong><br>
    <input type="text" name="p_fname1" value="" placeholder="First Name" required><br><br>
    <strong>Last Name</strong><br>
    <input type="text" name="p_lname1" value="" placeholder="Last Name"><br><br>
    <strong>Address</strong><br>
    <input type="text" name="p_address1" value="" placeholder="Address" required><br><br>
    <strong>Phone</strong><br>
    <input type="tel" name="p_phone1" value="" placeholder="Phone" required><br><br>

    <strong>Gender</strong><br>
    <input type="text" name="p_gender1" value="" placeholder="Gender" required><br><br>
    
    <input type="submit" name="Add" value="Submit">
</form>
</center>
<center><a href="logout.php"><input type="button" value="Logout" name="Submit"></a></center>
<?php
include'footer_admin.php';
?>
</div>
</body>
</html>