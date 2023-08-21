<section class="content">
    <?php while(have_posts()) : the_post( );?>
    <article>
        <?php the_post_thumbnail('page-thumbnail', ['class' => 'page-image' ]) ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
        <?php the_content(); ?>
    </article>
    <?php endwhile; ?>
</section>