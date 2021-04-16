<?php 
    get_header(); 
?>

<div class="single-post all-posts">
    <h1>GLUZD Agency Portfolio</h1>
    <?php
        while( have_posts() ) {
            the_post();
            ?>
        <a href="<?php the_permalink(); ?>">
            <div class="post-item">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="post-item-decription">
                    <h2><?php the_title(); ?></h2> 
                    <p><?php echo get_the_excerpt(); ?></p>      
                </div>
                 
            </div>
        </a>
        <hr> 

            <?php
        }
    ?>
</div>

<?php 
    get_footer();
?>