<?php 

/*
 * Template Name: Blog
 */

get_header(); ?>

<section class="blog-page">
    <div class="container">
        <h1 class="page-title"><?php the_title(''); ?></h1>
        sdfdfd
        <div class="the-content">
            <?php get_template_part('template-parts/content', 'blog'); ?>
            <?php get_template_part( 'template-parts/widgets', 'blog' ); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>