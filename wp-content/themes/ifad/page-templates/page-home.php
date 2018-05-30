<?php
/**
 * Template Name: Template Home
 * Created by PhpStorm.
 * User: Matteo
 * Date: 29/05/2018
 * Time: 13.02
 */

get_header();
?>

    <div id="primary" class="content-area container-fluid">

        <main id="main" class="site-main row">
            <div class="col-sm-8">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
            <div class="cal-sm-4">
                <?php get_sidebar()?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
