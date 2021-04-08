<div class="commetns-wrapper">
    <div class="commetns" id="comments">
        <div class="comment header">
            <h2 class="comment-replay-title">
                <?php
                    if(!have_comments()){
                      echo  "Leave A Comment";
                    }else{
                      echo  get_comments_number() . "Comments";
                    }
                ?>
            </h2>
        </div>
        <div class="comment-inner">
            <?php
                wp_list_comments(
                    array(
                        'avatar_size' => 120,
                        'style'       => 'div',
                    )
                    );
            ?>
        </div>
    </div>
    <hr>
    <?php
        if(comments_open()){
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply_before' => "<h2 id='reply' class='comment-reply-title'>",
                    'title_reply_after' => "</h2>",
                        
                )
                );
        }
    ?>
</div