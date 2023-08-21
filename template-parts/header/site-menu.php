<?php
                wp_nav_menu([
                    'theme_location'  => 'principal',
                    'container'       => 'nav',
                    'container_id'    => 'main-menu',
                    'container_class' => 'navi',
                    'menu_id'         => false,
                    'menu_class'      => 'main-navi',
                    'depth'           => 2,
                ]);
            ?>
            <i class="fa fa-bars lanzador" aria-hidden="true"></i>