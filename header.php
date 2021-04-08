<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Register Styles-->
    <?php
    wp_head();
    ?>
  
</head>
<body>
    <header>
        <!-- Start Upper Navbar -->
        <div class="upper-nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm text-left contact">
                        <i class="fas fa-phone"></i>Contact Sales
                    </div>
                    <div class="col-sm text-right ">
                        <i class="fas fa-search search dropdown">|
                            
                        </i> 
                        <i class="fas fa-angle-down lang">  EN </i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Upper Navbar -->
        <!-- Start Main Navbar -->
        <nav class="navbar navbar-light bg-light justify-content-between">
            <div class="container">
                <?php 
                    if(function_exists('the_custom_logo')){
                        the_custom_logo();
                    }
                ?>
                <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',

                                )
                                );
                        
                        ?>
            </div>
        </nav>
        <img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
        <?php dynamic_sidebar('sidebar-1')?>
        <!-- End Main Navbar -->
    </header>