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
                    <div class="col-sm text-left">
                        <i class="fas fa-phone"></i>Contact Sales
                    </div>
                    <div class="col-sm text-right">
                        <i class="fas fa-search"></i> | EN <i class="fas fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Upper Navbar -->
        <!-- Start Main Navbar -->
        <nav class="navbar navbar-light bg-light justify-content-between">
            <div class="container">
                <a class="navbar-brand"><?php  echo get_bloginfo('name');?></a>
                <?php 
                    if(function_exists('the_custom_logo')){
                        the_custom_logo();
                    }
                ?>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <?php dynamic_sidebar('sidebar-1')?>
        <!-- End Main Navbar -->
    </header>