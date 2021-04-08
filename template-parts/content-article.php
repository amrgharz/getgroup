<div>
    <header>
        <div>
            <span>Published <?php the_date()?></span>
            <?php
            the_tags('<span class="tag"> <i class="fas fa-tag"></i>', '</span><span class="tag"> <i class="fas fa-tag"></i>', '</span>');
            ?>
            <span> <i class="fas fa-tag"></i>category</span>
            <span> <a href="#"><i class="fas fa-comment"></i><?php comments_number()?></a></span>
        </div>
    </header>
    <?php
        the_content();
    ?>

    <!-- Add the commetns section -->
    <?php 
        comments_template();
    ?>
</div>