    <?php
        $hero = get_field('hero');
        if( $hero ):?>
        <section class="hero">
            <article class="hero-bg" style="background: url('<?php echo $hero['hero_image']; ?>')">
                
                <div class="container">
                    <div class="hero-text">
                        <h2 class="hero-title"><?php echo $hero['titulo_area_hero']; ?></h2>
                        <p class="hero-description"><?php echo $hero['contenido_area_hero']; ?></p>
                    </div>
                </div>
                
            </article>
        </section>
    <?php endif; ?>