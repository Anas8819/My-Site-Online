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
	include'Header_admin.php';
	?>
        

        <section id="middle-container">
            <div id="middle-top" class="full-width"></div>
            <div id="middle-middle">
                <div id="middle-slider-container" class="full-width">
                    
                </div>
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
                    
                    
                    
                    <center><div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel0">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel0">
					</li>
					<li data-slide-to="1" data-target="#carousel0">
					</li>
					<li data-slide-to="2" data-target="#carousel0">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/slider/01.jpg" alt="not found" >
						<div class="carousel-caption">
							
						</div>
					</div>
					<div class="item">
						<img src="images/slider/02.jpg" alt="not found">
						<div class="carousel-caption">
							
						</div>
					</div>
					<div class="item">
						<img src="images/slider/03.jpg" alt="not found">
						<div class="carousel-caption">
							
						</div>
                                                
					</div>
                    <div class="item">
						<img src="images/slider/04.jpg" alt="not found">
						<div class="carousel-caption">
							
						</div>
                                                
					</div>
                    <div class="item">
						<img src="images/slider/05.jpg" alt="not found">
						<div class="carousel-caption">
							
						</div>
                                                
					</div>
                    <div class="item">
						<img src="images/slider/06.jpg" alt="not found">
						<div class="carousel-caption">
							
						</div>
                                                
					</div>
                    <div class="item">
						<img src="images/slider/07.jpg" alt="not found">
						<div class="carousel-caption">
							
						</div>
                                                
					</div>
                                    
                                    
                                    
                                    
				</div> 
                <a class="left carousel-control" href="#carousel0" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> 
                <a class="right carousel-control" href="#carousel0" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>
</center>


                    <div class="product">
                       
                      <div class="spacer11pxH full-width"></div>
                        <div class="add-to-cart-box full-width">
                            
                        </div>
                    </div>
                    <div class="clear-box"></div>
                </div>
                <div class="clear-box"></div>
            </div>
            <div id="middle-bottom" class="full-width"></div>
        </section>
        <?php
		include'Footer_admin.php';
		?>
    
        <div class="spacer10pxH full-width"></div>
    </div>
         

<script src="../bootstrap-3.3.7-dist/js/jquery.min.js" type="text/javascript"></script>
<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.7-dist/js/scripts.js"></script>
    
</body>
</html>
