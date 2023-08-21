<?php 
/*
 * Template Name: Página de Blog
 */
get_header(); ?>

<main>
        <div class="container">
            <?php get_template_part( 'template-parts/content', 'blog' ); ?>
            <?php get_template_part('template-parts/widgets', 'blog');?>
        </div>
    </main>

<?php get_footer(); ?>