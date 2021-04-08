<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="first-item col-md-6">
                <h2>SiteMap</h2>
                <div class="row">
                    <div class="col-sm">

                        <?php 
                            wp_nav_menu(
                                array(
                                    'menu' => 'primary',
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap'  => '<ul id="" class="list-unstyled"></ul>'
                                )
                                );
                        
                        ?>
                    
                    </div>
                    <div class="col-sm">
                        <ul class="list-unstyled">
                            <li><a href="#">Identity Managment</a></li>
                            <li><a href="#">Digital Tranformation</a></li>
                            <li><a href="#">Safe And Smart Cities</a></li>
                            <li><a href="#">Commercial Card Printing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="second-item col-md-2">second</div>
            <div class="third-item col-md-4">third</div>
        </div>
        <div class="row">
            <div class="first-item col-md-4">
                <h2>Receive the latest GET Group news</h2>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="second-item col-md-4">
                <h2>Follow us on social media</h2>
                <!-- Social buttons -->
                <ul class="list-unstyled list-inline text-center">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-fb mx-1">
                            <i class="fab fa-facebook-f"> </i>
                        </a>
                    </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1">
                        <i class="fab fa-dribbble"> </i>
                    </a>
                </li>
                </ul>
            <!-- Social buttons -->
            </div>
            <div class="third-item col-md-4">
                <h2>Location Map</h2>
            </div>
        </div>
        <div class="footer-text">
            <p>
            GET Group is a leading provider of end-to-end solutions for identity management, AI-powered digital transformation, safe and smart cities, and commercial card printing, with over 30 years of experience in the MENA region and around the world.
            </p>
        </div>
        <div class="row">
            <div class="col-sm text-left">
                <ul class="list-unstyled text-left">
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Quality Commitment</a></li>
                    <li><a href="#">Data Privecy Code</a></li>
                </ul>
            </div>
            <div class="footer-copyright col-sm text-right">© 2020 Copyright:
                <a href="#"> GET Group Holding LTD</a>
            </div>
        </div>
    </div>
</footer>
<!-- Register Scripts -->
<?php
wp_footer();
?>
</body>
</html>