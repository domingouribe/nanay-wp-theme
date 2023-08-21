<?php get_header(); ?>

    <main>
        <div class="container">
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php nanay_lista_into_pros(); ?>
            <?php get_template_part('template-parts/widgets', 'blog');?>
        </div>
    </main>

<?php get_footer(); ?>