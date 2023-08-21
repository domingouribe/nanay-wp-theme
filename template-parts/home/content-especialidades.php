<section class="especialidades">
                <?php $args = array(
                    'post_type' => 'especialidades',
                    'showposts' => 4                
                );
                $especialidades = new WP_Query($args);
                while($especialidades->have_posts(  )): $especialidades->the_post();
                ?>

                <div class="especialidad">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'especialidad', array('class' => 'home-especialidad') ); ?></a>
                    <div class="wrap">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt() ?>
                        <a href="<?php the_permalink(); ?>" class="more-button">Leer más</a>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(  );?>
                
            </section>