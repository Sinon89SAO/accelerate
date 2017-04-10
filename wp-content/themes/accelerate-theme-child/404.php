<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="main-content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'Accelerate' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'Oops, I screwed up and you discovered my fatal flaw.', 'Accelerate' ); ?></h2>
					<p><?php _e( 'Well, we are not all perfect, but we try.  Can you try this again or maybe visit our <a title="Our Site" href="http://localhost/accelerate/"><span>Home Page</span></a> to start fresh?  We will do better next time.', 'Accelerate' ); ?></p>


				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
