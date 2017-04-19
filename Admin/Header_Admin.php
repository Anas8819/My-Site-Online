<header class="full-width">
            <div id="header" class="full-width">
                <div id="logo" class="full-height"><a href="Home_admin.php"></a></div>
                <div id="user-data" class="full-height">
                    <div>Welcome <?php if(isset($_SESSION['$name'])){echo $_SESSION['$name'];}else {header("location:../home.php");} ?></div>
                </div>
                <div id="top-header-right" class="full-height">
                    <div id="top-header-right-top" class="full-width"></div>
                    <div id="search-box" class="full-width">
                        <form action="#" method="get">
                            <input id="keyword" class="txt_field" type="text" onblur="clearText(this)" onfocus="clearText(this)" title="keyword" name="keyword" value="Search" />
                            <input id="searchbutton" class="sub_btn" type="submit" title="Search" value="" name="Search" />
                        </form>
                    </div>
                </div>
            </div>
            <div id="header-menu-container">
                <ul>
                    <li><a href="Home_admin.php">Home</a></li>
                    <li><a href="Product_show_admin.php">Products</a></li>
                    <li><a href="About_us_admin.php">About Us</a></li>
                    <li><a href="">Shopping Cart</a></li>
                    <li><a href="Contact_us_admin.php">Contact Us</a></li>
                    <li><a href="https://www.facebook.com/"><img src="../images/Social Media/facebook.png" height="40px" alt="Facebook"></a></li>
                    <li><a href="https://twitter.com/login"><img src="../images/Social Media/twitter.jpg" height="40px" alt="Twitter"></li></a>
                    <li><a href="https://www.instagram.com/?hl=en"><img src="../images/Social Media/insta.jpg" height="40px" alt="Twitter"></li></a>
                </ul>
            </div>
            <div id="header-banner" class="full-width">
                <div id="header-banner-text">
                    <div id="header-banner-text-heading">Introducing Web Store</div>
                    <div id="header-banner-text-content">A customer buys products online all over the Pakistan and products will be delievered at door step of our client (customer) after receiving payment...</div>
                    <div id="browse-all-products"><a href="view_product_admin.php">Browse All Products</a></div>
                </div>
                <div id="header-banner-image"></div>
                <div class="clear-box"></div>
            </div>
        </header>
		
