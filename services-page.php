<?php
/**
 * Template Name: Static Page Services Template
 * Template Page Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package daktari
 */

get_header();
?>
		<div id="primary" class="content-area container">
            <div class="row">
                <div class="col-md-8">
                    <main id="main" class="site-main">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            
                            get_template_part( 'template-parts/content', get_post_type() );

                            // the_post_navigation();

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </main><!-- #main -->
                    
                </div><!-- .col-md-8 -->
                <div class="col-md-4">
                    <div class="service-menu-widget">
                        <?php get_sidebar('services-offered'); ?>
                    </div>
                </div><!-- .col-md-8 -->
            </div><!-- .row -->
		</div><!-- #primary -->
		<?php get_footer();
