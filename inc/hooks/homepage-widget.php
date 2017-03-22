<?php
if ( ! function_exists( 'clean_biz_widget_section' ) ) :
    /**
     *
     * @since clean-biz 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function clean_biz_widget_section() {
        ?>
        <!-- Main Content section -->
        <section class="wrapper wrap-main-content">
            <div class="container">
                <div class="row">
                    <!-- Main-panel Content -->
                    <?php dynamic_sidebar( 'homepage-main-section' ); ?>
                </div>
            </div>
        </section>
        <?php
    }
endif;
add_action( 'clean_biz_action_front_page', 'clean_biz_widget_section', 95 );