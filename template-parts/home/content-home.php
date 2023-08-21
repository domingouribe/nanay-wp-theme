    <?php
        $home = get_field('home');
        if( $home ):?>
        <section class="home-content">
            <div class="container">
                <div class="about">
                    <h2 class="title-style center-text">Quiénes somos</h2>
                        <article>
                            <img src="<?php echo esc_url($home['imagen_quienes_somos']); ?>" alt="<?php echo esc_attr($home['alt']); ?>" />
                            <div class="area-text">
                                <?php echo $home['quienes_somos']; ?>
                            </div>
                        </article>
                </div>

                <div class="mission">
                    <h2 class="title-style center-text">Misión</h2>
                        <article>
                            <div class="area-text">
                                <?php echo $home['nuestra_mision']; ?>
                            </div>
                            <img src="<?php echo esc_url($home['imagen_nuestra_mision']); ?>" alt="<?php echo esc_attr($home['alt']); ?>" />
                        </article>
                </div>

                <div class="avision">
                    <h2 class="title-style center-text">Visión</h2>
                        <article>
                            <img src="<?php echo esc_url($home['imagen_nuestra_vision']); ?>" alt="<?php echo esc_attr($home['alt']); ?>" />
                            <div class="area-text">
                                <?php echo $home['nuestra_vision']; ?>
                            </div>
                        </article>
                </div>
            </div>
        </section>
    <?php endif; ?>