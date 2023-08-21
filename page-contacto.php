<?php 
/*
 * Template Name: Página de contacto
 */
get_header(); ?>

    <main>
        <div class="container">
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php echo do_shortcode( '[contact-form-7 id="118" title="Contacto oficial página de contacto" html_class="all-forms"]' );?>
        </div>
    </main>


<?php get_footer(); ?>
