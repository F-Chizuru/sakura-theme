<?php 
/* Template Name:全画面用
Template Post Type: post, page
 */
?>

<?php get_header(); ?>


<br>
<br>
<br>

<p>page-type1.php 全画面用です</p>

<?php the_post(); ?>
<div class="blog-content" >
            <div class="blog-info">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
</div>

<?php get_footer(); ?>