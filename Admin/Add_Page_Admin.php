<?php
require'../require/connection.php';

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add Page</title>
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
<form action="Add_Page_Process_Admin.php" method="post" enctype="multipart/form-data">
    
      
    <br><br>
    <strong>Page Name</strong><br>
    <input type="text" name="p_name1" value="" placeholder="Page Name" required><br><br>
    <strong>Page Title</strong><br>
    <input type="text" name="p_title1" value="" placeholder="Page Title" required><br><br>
    <strong>Contant</strong><br>
    <input type="text" name="p_con1" value="" placeholder="Contant" required><br><br>
    <strong>Status</strong><br>
    <input type="text" name="p_status1" value="" placeholder="Status" required><br><br>
    
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