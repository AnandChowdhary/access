<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Access
 */

get_header(); ?>

<div id="primary" class="content-area<?php if(get_the_category()[0]->name == "Projects"){echo " projects-post";} ?>">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

?>
		  
		  
		  
		  
		  <div class="category-info">
			<strong><?php echo get_the_category()[0]->name; ?></strong><br><span><?php echo get_the_category()[0]->description; ?></span>
</div>

		  
		  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  
  
  
	<header class="entry-header">
<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

if ( 'post' === get_post_type() ) : ?>
	  <?php if(get_the_category()[0]->name != "Projects"){ ?><p>
			<?php access_posted_on(); ?>
	  </p><!-- .entry-meta --><?php } ?>
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div><div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'access' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'access' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## --><?php

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
