<?php get_header(); ?>

<br>
<br>
<br>
<?php the_post(); ?>
<div class="blog-content" >
        <?php the_post_thumbnail(); ?>
            <div class="blog-info">
                <h2><?php the_title(); ?></h2>
                <p>今日の天気は<?php the_field('weather'); ?>です</p>
                <P>今日のSUNABACOの様子：<?php the_field('report'); ?></p>
                <img src="<?php the_field('office_image'); ?>" alt="">
                <p><?php the_content(); ?></p>
                <a href="#"><i class="fas fa-globe-americas"></i><?php the_category(); ?></a><a href="#"><i class="fas fa-globe-americas"></i><?php the_date(); ?></a>
            </div>
</div>

<?php get_footer(); ?>