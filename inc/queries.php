<?php 


function nanay_lista_into_pros(){ ?>
    <?php 
        $args = array(
            'post_type' => 'profesionales',
            'post_per_page' => 6,
            'order' => 'ASC'
        );
        $profesionales = new WP_QUERY($args);
        while($profesionales->have_posts()): $profesionales->the_post();?>
        <article class="card-profesional">
            
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_post_thumbnail('post'); ?>
            <?php the_content(); ?>
            <?php the_field('instagram') ?>


        </article>
        
        <?php endwhile; wp_reset_postdata(); ?>

<?php
}

