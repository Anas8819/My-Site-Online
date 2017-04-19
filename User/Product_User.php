<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Online Shopping</title>
<link href="../css/styles.css" media="all" type="text/css" rel="stylesheet" />
<link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
require'../Require/connection.php';
?>
    <div id="header-bg-container"></div>

    <div id="full-page">
    <?php
	session_start();
	if(isset($_SESSION['$name']))
{
}
else
{
	header('location: ../home.php');
}
	include'Header_User.php';
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
                <div id="middle-right">
                    <div class="spacer20pxH"></div>
                    <div class="product">
                        <div class="product-image full-width"><a href="#"><img src="products/catalog/Product_A/Product_A_main.jpg" alt="Product_A" title="Click here to view details" /></a></div>
                        <div class="product-title">Bulb</div>
                        <div class="view-count full-width">0 views</div>
                        <div class="product-price full-width">$ 50</div>
                        <div class="spacer11pxH full-width"></div>
                    </div>
                    <div class="product">
                        <div class="product-image full-width"><a href="#"><img src="products/catalog/Product_A/Product_A_main.jpg" alt="Product_A" title="Click here to view details" /></a></div>
                        <div class="product-title">Bulb</div>
                        <div class="view-count full-width">0 views</div>
                        <div class="product-price full-width">$ 50</div>
                        <div class="spacer11pxH full-width"></div>
                    </div>
                    <div class="product">
                        <div class="product-image full-width"> <a href="#" target="_blank"> <img src="products/catalog/Product_A/Product_A_main.jpg" alt="Product_A" title="Click here to view details" /></a></div>
                        <div class="product-title">Bulb</div>
                        <div class="view-count full-width">0 views</div>
                        <div class="product-price full-width">$ 50</div>
                        <div class="spacer11pxH full-width"></div>
                    </div>
                    <div class="product">
                        <div class="product-image full-width"><a href="#"><img src="products/catalog/Product_A/Product_A_main.jpg" alt="Product_A" title="Click here to view details" /></a></div>
                        <div class="product-title">Bulb</div>
                        <div class="view-count full-width">0 views</div>
                        <div class="product-price full-width">$ 50</div>
                        <div class="spacer11pxH full-width"></div>
                    </div>
                    <div class="product">
                        <div class="product-image full-width"><a href="#"><img src="products/catalog/Product_A/Product_A_main.jpg" alt="Product_A" title="Click here to view details" /></a></div>
                        <div class="product-title">Bulb</div>
                        <div class="view-count full-width">0 views</div>
                        <div class="product-price full-width">$ 50</div>
                        <div class="spacer11pxH full-width"></div>
                    </div>
                    <div class="product">
                        <div class="product-image full-width"><a href="#"><img src="products/catalog/Product_A/Product_A_main.jpg" alt="Product_A" title="Click here to view details" /></a></div>
                        <div class="product-title">Bulb</div>
                        <div class="view-count full-width">0 views</div>
                        <div class="product-price full-width">$ 50</div>
                        <div class="spacer11pxH full-width"></div>
                    </div>
                    <div class="clear-box"><a href="product_show_User.php"><strong>Show All Products</strong></div>
                </div>
                <div class="clear-box"></div>
            </div>
            <div id="middle-bottom" class="full-width"></div>
        </section>
    
        <?php
		include'Footer_User.php';
		?>
    
        <div class="spacer10pxH full-width"></div>
    </div>
    
    
    
<script src="../bootstrap-3.3.7-dist/js/jquery.min.js" type="text/javascript"></script>
<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.7-dist/js/scripts.js"></script>
</body>
</html>
