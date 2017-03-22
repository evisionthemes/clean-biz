<?php
/**
 * The template for displaying home page.
 * @package clean-biz
 */
global $clean_biz_customizer_all_values;
get_header();
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
    }
else{
	if (
		($clean_biz_customizer_all_values['clean-biz-feature-slider-enable'] != 1 ) &&
		($clean_biz_customizer_all_values['clean-biz-home-about-enable'] != 1 ) &&
		($clean_biz_customizer_all_values['clean-biz-callback-enable'] != 1 ) &&
		($clean_biz_customizer_all_values['clean-biz-home-portfolio-enable'] != 1 ) &&
		($clean_biz_customizer_all_values['clean-biz-home-service-enable'] != 1 ) &&
		($clean_biz_customizer_all_values['clean-biz-home-team-enable'] != 1 ) &&
		($clean_biz_customizer_all_values['clean-biz-home-testimonial-enable'] != 1 ) &&
		($clean_biz_customizer_all_values['clean-biz-home-blog-enable'] != 1 ) 
		) {
		if ( current_user_can( 'edit_theme_options' ) ) { ?>
			<section class="wrapper display-info">
				<div class="container">
				<?php echo sprintf(
					esc_html__( "All Section are based on page and post. Atleast enable slider or blog Sections from customizer example for </br> slider: Home/Front Main Slider -> Setting Options -> Enable. likewise to other sections </br> %s, add widget as well on <b>Home/Front Page Widget</b>", 'clean-biz' ),
					'<a class="button" href="' . esc_url( admin_url( 'customize.php' ) ) . '">' . esc_html__( 'click here', 'clean-biz' ) . '</a>'
					); ?>
				</div>
			</section>
		<?php }	
	}
	else{
	/**
	 * clean_biz_action_front_page hook
	 * @since clean-biz 1.0.0
	 *
	 * @hooked clean_biz_action_front_page -  10
	 * @sub_hooked clean_biz_action_front_page -  30
	 */
	do_action( 'clean_biz_action_front_page' );	
	}
}
get_footer();