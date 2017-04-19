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
                
                <div id="middle-left">
                    <div id="categories-box" class="full-width">
                        <div id="category-heading" class="full-width">Categories</div>
                        <div id="categories">
                            <ul>
                                <li><a href="#">Home Appliances</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Engineering</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Mobiles</a></li>
                                <li><a href="#">Others</a></li>
                            </ul>
                        </div>
                        <div id="news-letter-box" class="full-width">
                            <div id="news-letter-heading" class="full-width">Newsletter</div>
                            <form action="#" method="post">
                                <div>
                                    <input type="text" id="name" name="name" value="Name" />
                                </div>
                                <div>
                                    <input type="text" id="email" name="email" value="Email" />
                                </div>
                                <input type="image" src="images/subscribe.png" id="subscribe" alt="Subscribe" />
                            </form>
                        </div>
                    </div>
                </div> 
                <?php
				$count=1;
				$query = "SELECT * from product WHERE Status='Y'";
				$result = mysqli_query($connection,$query);
				
				while(($row = mysqli_fetch_array($result,MYSQL_BOTH)) & $count<7)
				
				{	
					$u_id = $row['Product_id'];
					$u_name = $row['Product_name'];
					$u_price = $row[6];
					$u_img = $row[8];
					?>
               
                
<?php
$folder='images/Database_Images/';
$path=$folder.$u_img;
?>
                    
                   <div class="product">
                    <a href="Product_Detail.php?d_id=<?php echo $u_id ?>"><img src= "<?php echo $path ?>" alt="<?php echo $u_name ?>" height="100px" width="100px"></a>  
                        
                        <div class="product-title"><?php echo $u_name ?></div>
                        <div class="product-price full-width"><?php echo $u_price ?></div>
                        <div class="spacer11pxH full-width"></div>
                    </div> 
                    
                    <?php 
					
					$count++;
				}
					 ?>
                    
                    
           
                
                <div align="center" class="clear-box"><a href="Product_show.php"><strong>Show All Products</strong></div>                
                <div class="clear-box"></div>
            </div>
            <div id="middle-bottom" class="full-width"></div>
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
