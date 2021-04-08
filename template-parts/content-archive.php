<div class="container">
    <div class="post">
        <img class="image" alt="alt-text" src="<?php the_post_thumbnail_url('thumbnail'); ?>">
        <div class="media-body">
            <h3 class="title"><?php the_title();?></h3>
            <div class="meta">
                <span class="date"><?php the_date()?></span>
                <span class="commet"><a href="#"><?php comments_number();?></a></span>
            </div>
            <div class="intro">
                <?php
                    the_excerpt();
                ?>
            </div>
            <a class="more-link" href="<?php the_permalink()?>">Read More &rarr;</a>
        </div>
    </div>
</div>