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

        <section id="middle-container">
            <div id="middle-top" class="full-width"></div>
            <div id="middle-middle">
                <div id="middle-slider-container" class="full-width">
                    <h3 style="text-align: center">About Us</h3>
                   
                </div>
                <p>
                <?php
				$query="SELECT * FROM pages WHERE Name='About_us'";
				$result=mysqli_query($connection,$query);

				
				while ($row = mysqli_fetch_assoc($result)) {
    echo $row['Contant'];
}
				
				
				
				
				?>
                
                    
                    
                    
                    
                  <div class="product">
                       
                      <div class="spacer11pxH full-width"></div>
                      
                    </div>  
                    
                 
                    
                    
                    <div class="clear-box"></div>
                
                <div class="clear-box"></div>
            </div>
        </section>
                
    
        <?php
	include'Include/Footer.php';
	?>
    
        <div class="spacer10pxH full-width"></div>
    </div>     
    <script src="bootstrap-3.3.7-dist/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/scripts.js"></script>
    
</body>
</html>