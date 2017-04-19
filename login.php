<?php
require("require/connection.php");
$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
if (isset($_POST['submit']))
{
	$id = $_POST['user'];
	$pas = $_POST['pass'];
	$user_type=$_POST['user_type'];
	if($user_type=='User'){
	$query = "SELECT * from Member";
	$result=mysqli_query($connection,$query);
	while($row = mysqli_fetch_array($result,MYSQL_BOTH)){
			$u_id = $row['Member_id'];
			$u_name = $row[1];
			$u_pass = $row[2];
			$pas=md5($pas);
			$done=NULL;		
	if ($id == "$u_name" && $pas == "$u_pass")
	{
		$done='1';
	}
	if ($done=="1")
{
	session_start();
	$_SESSION['$name'] = $u_name;
	header("Location: User/Product_Show_User.php");
    exit;
}
}die;
	}
	else if ($user_type=='Admin'){
		$id = $_POST['user'];
		$pas = $_POST['pass'];
		$query = "SELECT * from Admin";
		$result=mysqli_query($connection,$query);
		while($row = mysqli_fetch_array($result,MYSQL_BOTH)){
			$u_id = $row['Admin_id'];
			$u_name = $row[1];
			$u_pass = $row[2];
			$pas=md5($pas);
	if ($id == "$u_name" && $pas == "$u_pass")
	{
		$done="1";
	if ($done=="1")
{
	session_start();
	$_SESSION['$name'] = $u_name;
	header("Location: Admin/Product_Show_Admin.php");
    exit;
}
	}
}
		
	}
	else
	{
		header("Location: Admin/Product_Show_Admin.php");
	}
}
?>

<!doctype html>
<html>
<head>
<title>Login Page</title>
    <link href="css/styles.css" media="all" type="text/css" rel="stylesheet"/>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
 <div id="header-bg-container"></div>

    <div id="full-page">
    <?php
	include'include/header.php';
	?>
<form action="login.php" method="post">
<table width="100%" cellpadding="0" cellspacing="0" height="50%">
    <tbody>
      <tr>
        <td align="center"><h3>Please Enter User Name and Password</h3></td>
      </tr>
      
      <tr>
        <td colspan="8" align="center"></td>
      </tr>
      <tr>
        <td width="100%" align="center"><table align="center" border="0">
            <tbody>
              <tr>
                <td width="0" rowspan="7"></td>
              </tr>
              <tr>
                <td colspan="4"><div></div></td>
              </tr>
              <tr>
                <td width="70">&nbsp;</td>
                <td></td>
                <td width="0"></td>
                <td width="224"></td>
              </tr>
          </tbody>

<label><strong>User Name</strong></label>
  <div align="centre"> 
  <input type="text" name ="user" id="user" required/><br/>
  </div>
  
  <label><strong>Password</strong></label>
  <div align="centre"> 
  <input type="password" name="pass" id="pass" required/><br/><br><br>
  <input type="radio" name ="user_type" value="User" required/> User<br>
  <input type="radio" name ="user_type" value="Admin" required/> Admin
   <tr>
        <center?<td colspan="4"><input type="submit" name="submit" value="Submit"/> </td></center>
        </tr>
  </div>
  </table>
  
  
  

</form>
<br><br>
</div>
</body>
</html>
<?php
include 'include/footer.php';
?>


<script src="bootstrap-3.3.7-dist/js/jquery.min.js" type="text/javascript"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/scripts.js"></script>