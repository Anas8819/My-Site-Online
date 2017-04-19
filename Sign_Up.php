<?php
require'require/connection.php';

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add Member</title>
<link href="css/styles.css" media="all" type="text/css" rel="stylesheet" />
<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="panal.css">
<link href="panal.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

?>
    <div id="header-bg-container"></div>

    <div id="full-page">
    <?php
	include'include/Header.php';
	?>

<center>
<form action="Sign_up_process.php" method="post">
    
      
    <br><br>
    <strong>Username</strong><br>
    <input type="text" name="p_name1" value="" placeholder="Username" required><br><br>
    <strong>Password</strong><br>
    <input type="password" name="p_pass1" value="" placeholder="Password" required><br><br>
    <strong>Email</strong><br>
    <input type="text" name="p_mail1" value="" placeholder="Status" required><br><br>
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
    <strong>Birthday</strong><br>
    <input type="date" name="p_bday1" value="" placeholder="Phone" required><br><br>
    
    <input type="submit" name="Add" value="Submit">
</form>
</center>
<?php
include'include/footer.php';
?>
</div>
</body>
</html>