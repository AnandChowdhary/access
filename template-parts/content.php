<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Access
 */

?>


 
  	  <?php if(get_the_category()[0]->name == "Projects"){ ?>
  <?php if (catch_that_image()) { ?>
<a href="<?php echo get_permalink(); ?>" style="margin-bottom: 20px; display: block"><img alt="" src="<?php echo catch_that_image(); ?>"></a>
  <?php } ?>
  <?php } ?>
  

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  
  <header class="entry-header">
	  
	  
	  
	  <h2 class="entry-title"><a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	  
	  
	  
<?php if ( 'post' === get_post_type() ) : ?>
	  <?php if(get_the_category()[0]->name != "Projects"){ ?>
			<?php access_posted_on(); ?>
	 <!-- .entry-meta --><?php } ?>
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div><div class="entry-content">
		<?php the_excerpt(); ?>
	 
  	  <?php if(get_the_category()[0]->name != "Projects") { ?>
	  <p><a href="<?php echo get_permalink(); ?>">Continue Reading &rarr;</a></p>
	  <?php } else { ?>
	  	  <p><a href="<?php echo get_permalink(); ?>">View Project &rarr;</a></p>
	  <?php } ?>  
	  
	</div><!-- .entry-content -->

</article><!-- #post-## -->
