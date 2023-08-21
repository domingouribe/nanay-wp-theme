<section class="mision">
            <?php while (have_posts(  )): the_post();?>
            <?php
                $home_mision = get_field('home_page');
                if($home_mision):?>
                
                
                <div class="home-mision-content">
                <img src="<?php echo $home_mision['imagen_mision_home'] ?>" alt="<?php $home_mision['alt']; ?>" class="mision-image">
                <div class="mision-content">
                    <h4><?php echo $home_mision['titulo_mision_home'] ?></h4>
                    <?php echo $home_mision['texto_mision_home']; ?>
                </div>
                <div class="contacto-rapido">
                        <h4>Contacto rápido</h4>
                        <p>Solicita una llamada de nuestros abogados para una conversación más directa y rápida. Solo indícanos tu nombre y número de teléfono y te contactaremos a la brevedad</p> 
                        <?php echo do_shortcode( '[contact-form-7 id="82" title="Contacto rápido" html_id="home-form" html_class="all-forms"] ' ); ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </section>