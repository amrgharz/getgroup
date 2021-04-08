<!-- Get the header from the header.php -->
<?php
    get_header();
?>

    <article class="content px-3 py-5 p-md-5">
    <?php
        if(have_posts()){
            the_post();
            the_content();
        }
    ?>
    </article

// get the Footer from the footer.php
<?php
    get_footer();
?>