<?php get_header(); ?>

<?php 
if(have_posts()){
    while (have_posts()){
        the_post(); ?>

        <!-- ループ部分 -->
        <a href="<?php echo get_permalink(); ?>">
                <div class="blog-content" >
                    <?php the_post_thumbnail(); ?>
                    <div class="blog-info">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <a href="#"><i class="fas fa-globe-americas"></i><?php the_category(); ?></a><a href="#"><i class="fas fa-globe-americas"></i><?php the_date(); ?></a>
                    </div>
                </div>
        </a>
<?php
    }
}
?>
                
  


<?php get_footer(); ?>