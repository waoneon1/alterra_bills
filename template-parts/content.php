<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alterra_bill
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="c-single-page d-flex align-items-center">
	    <div class="container">
	        <div class="c-single-page__txt float-md-right">
	            <?php the_title( '<h2>', '</h2>' ); ?>
	            <!-- <p>Digital Infrastructure </p> -->
	        </div>
	    </div>
	</header>

	<div class="c-single-page__wrapper aboutus-wrapper" style="margin-top: 50px;">

        <!-- About Alterra -->
        <div class="c-single-page__content d-md-flex align-items-md-center" data-aos="fade-up">
            <div class="container clearfix">
				<div class="c-typhography">
					<?php the_content() ?>
				</div>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
