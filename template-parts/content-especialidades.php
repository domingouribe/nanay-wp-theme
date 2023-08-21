<section class="content-blog">
    <?php while(have_posts()) : the_post( );?>
    <article>
        <?php the_post_thumbnail('post', ['class' => 'blog-image' ]) ?>
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