<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Online Shopping</title>
<link href="css/styles.css" media="all" type="text/css" rel="stylesheet" />
<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="panal.css">
<link href="panal.css" rel="stylesheet" type="text/css">


</head>

<body>
<?php
require'Require/connection.php';
?>
    <div id="header-bg-container"></div>

    <div id="full-page">

        <?php
	include'Include/Header.php';
	?>


<h2 align="center">Contact Us</h2><br/>
<div class="container">
<div class="col-md-8">
<table>
<tr>
	<td><strong>Name: </strong></td>
    <td><input type="text" name="fname" placeholder="Enter your name" size="30"></td>
</tr>
<tr>
	<td><strong>E-mail: </strong></td>
    <td><input type="email" name="e-mail" placeholder="Enter your e-mail" size="30"></td>
</tr>
<tr>
	<td><strong>Phone: </strong></td>
    <td><input type="tel" name="phone" placeholder="Enter your phone number" size="30"></td>
</tr>
<tr>
	<td><strong>City: </strong></td>
    <td><input type="text" name="City" placeholder="Enter your City" size="30"></td>
</tr>
<tr>
    <td align="top"><strong>Roll </strong></td>
    <td><input type="radio" value="val1">Customer</td>
    <td><input type="radio" value="val2">User</td>
</tr>
<tr>
    <td align="top"><strong>Message: </strong></td>
    <td><textarea type="text" name="message" cols="38" rows="6" placeholder="Write message here..."></textarea></td>
</tr>

<tr>
	<td colspan="2" align="right">
    <input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</div>
<div class="col-md-4"><h4>Our Address:</h4>
	<p>123 main bulevard allama iqbal town lahore pakistan</p>
    <div id="map" style="width:700px;height:200px;background:yellow"></div>
      <script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(31.5546, 74.357),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>
</div></div><br/>   
    
       <div><?php
	include'Include/Footer.php';
	?>
    </div>
    
        <div class="spacer10pxH full-width"></div>
    </div>
         
    <script src="bootstrap-3.3.7-dist/js/jquery.min.js" type="text/javascript"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/scripts.js"></script>
    
</body>
</html>
