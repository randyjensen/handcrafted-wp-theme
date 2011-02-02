<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>
		<div id="secondary" class="widget-area">
			<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>

				<aside id="search" class="widget widget_search" role="complementary">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget" role="complementary">
					<h2 class="widget-title"><?php _e( 'Archives', 'themename' ); ?></h2>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget" role="complementary">
					<h2 class="widget-title"><?php _e( 'Meta', 'themename' ); ?></h2>
					<ul>
						<?php wp_register(); ?>
						<aside role="complementary"><?php wp_loginout(); ?></aside>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->