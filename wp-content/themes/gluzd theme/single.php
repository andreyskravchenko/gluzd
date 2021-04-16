<?php

    get_header();
?>

    <div class="single-post">
        <?php
            while(have_posts()) {
                the_post(); 
        ?>
                    <div class="tag"><p>Case Study</p></div>
                    <h1><?php the_title();?></h1>
                    
                
        <?php
            the_content();

            }
        ?>
        
    </div>
<?php
            get_footer();
?>