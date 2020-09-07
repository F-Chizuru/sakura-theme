<?php get_header(); ?>

<?php the_post(); ?>
<div class="blog-content" >
        <?php the_post_thumbnail(); ?>
            <div class="blog-info">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                <a href="#"><i class="fas fa-globe-americas"></i><?php the_category(); ?></a><a href="#"><i class="fas fa-globe-americas"></i><?php the_date(); ?></a>
            </div>
</div>

<?php get_footer(); ?>