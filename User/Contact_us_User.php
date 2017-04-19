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
	include'Header_User.php';
	?>

        <section id="middle-container">
            <div id="middle-top" class="full-width"></div>
            <div id="middle-middle">
                <div id="middle-slider-container" class="full-width">
                    Contact Us
                    <form method="post" action="#">
                        <div><input type="text" name="name" placeholder="Enter your name:"/></div>
                        <div><input type="email" name="mail" placeholder="Enter your email:"/></div>
                        <div><input type="text" name="mobile" placeholder="Enter your number:"/></div>
                        <div><input type="radio" name="choice"/>New User
                        <input type="radio" name="choice"/>Old User</div>
                        <div>City
                            <select>
                                <option>Lahore</option>
                                <option>Karachi</option>
                                <option>Sialkot</option>
                                <option>Gujranwalla</option>
                                <option>Islababad</option>
                            </select>
                        </div>
                        Message:
                        <div>
                            <textarea name="message" cols="38" rows="10"> </textarea>
                        </div>
                        <input type="submit" name="sumbit" value="Submit">
                    </form>
                </div>
                <div id="middle-left"><h4></h4>
                    <div id="categories-box" class="full-width">
                        
                        
                        
                    </div>
                </div>
                    
                    
                    
                    
                    
                  <div class="product">
                       
                      <div class="spacer11pxH full-width"></div>
                        <div class="add-to-cart-box full-width">
                            
                        </div>
                    </div>  
                    
                    
                    
                    
                    <div class="clear-box"></div>
                
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
