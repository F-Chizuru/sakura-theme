<?php get_header(); ?>

<br>
<br>
<br>
<?php the_post(); ?>
<div class="blog-content" >
        <?php the_post_thumbnail(); ?>
            <div class="blog-info">
                <p>商品名<?php the_field('item_name'); ?></p>
                <P>商品価格<?php the_field('price'); ?></p>
                <img src="<?php the_field('item_image'); ?>" alt="<?php the_field('item_name'); ?>商品画像">
            </div>
</div>

<?php get_footer(); ?>