<!-- Navigation -->
        <div id="navigationBckg">
        <div id="navigation">
        	<ul class="navigation">
                <li><a href="index.php" title="Home">Home</a>
                    <ul>
                        <li><a href="404.php" title="404">404 Page</a></li>
                        <li><a href="landing.php" title="Landing Page">Landing Page</a></li>
                    </ul>
                </li>
                
                <li><a href="biography.php" title="Biography">Biography</a></li>
                
                <li>
                	<a href="news.php" title="News and Events">News and Events</a>
                </li>
                

                <li><a href="getInvolved.php" title="Get Involved">Get Involved</a></li>
        <?php   if(isset($_SESSION['LOGIN_STATUS']) && $_SESSION['LOGIN_STATUS']==true)
                {
        ?>
                        <li><a href="admin/home.php" title="Get Involved">Admin</a></li>
        <?php   }
        ?>
                
               
            </ul>
        </div>
<!--    <div id="navigation">
            <ul class="navigation">
                <li><a href="index.php" title="Home">Home</a>
                    <ul>
                        <li><a href="404.php" title="404">404 Page</a></li>
                        <li><a href="landing.php" title="Landing Page">Landing Page</a></li>
                        <li><a href="faq.php" title="FAQ">FAQ</a></li>
                        <li><a href="faq2.php" title="FAQ - version 2">FAQ - version 2</a></li>
                        <li><a href="faq3.php" title="FAQ - version 3">FAQ - version 3</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="theIssues.php" title="The Issues">The Issues</a>
                    
                    <ul>
                        <li><a href="theIssues2.php" title="The Issues - version 2">The Issues - version 2</a></li>
                        <li><a href="generic.php" title="Typography and Buttons">Typography and Buttons</a></li>
                        <li class="current_page_item"><a href="signup.php" title="Sign Up">Sign Up</a></li>

                        <li>
                            <a href="javascript:void()" title="Dropdown Level 1">Dropdown Level 1</a>
                            <ul>
                                <li><a href="javascript:void()" title="Dropdown Level 2">Dropdown Level 2</a></li>
                                <li><a href="javascript:void()" title="Dropdown Level 2">Dropdown Level 2</a></li>
                                <li><a href="javascript:void()" title="Dropdown Level 2">Dropdown Level 2</a></li>
                                <li><a href="javascript:void()" title="Dropdown Level 2">Dropdown Level 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li><a href="biography.php" title="Biography">Biography</a></li>
                
                <li>
                    <a href="news.php" title="News and Events">News and Events</a>
                    
                    <ul>
                        <li><a href="news2.php" title="News and Events - version 2">News and Events - version 2</a></li>
                        <li><a href="newsSingle.php" title="Single News">Single News</a></li>
                    </ul>
                </li>
                
                <li><a href="videos.php" title="Videos">Videos</a>
                    
                    <ul>
                        <li><a href="videos2.php" title="Videos - version 2">Videos - version 2</a></li>
                        <li><a href="gallery.php" title="Gallery">Gallery</a></li>
                    </ul>
                </li>
                <li><a href="getInvolved.php" title="Get Involved">Get Involved</a></li>
                <li><a href="shop.php" title="Campaign Shop">Campaign Shop</a>
                    <ul>
                        <li><a href="shop2.php" title="Campaign Shop - version 2">Campaign Shop - version 2</a></li>
                    </ul>
                </li>
                <li><a href="contact.php" title="Contact">Contact</a></li>
            </ul>
        </div> -->
        </div>
    	<!-- .Navigation -->