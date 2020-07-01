<?php
/**
 * The template for my homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<h1 class="has-text-align-left"><strong>Hi, I’m Jenna.<br>I love building websites.</strong></h1>
			<?php while ( have_posts() ): the_post(); ?>
				<?php the_content(); ?>
				<div class="social-btns">
					<a href="https://twitter.com/" class="soc-icon tw"><span class="screen-reader-text">Twitter</span></a>
					<a href="https://facebook.com/" class="soc-icon fb"><span class="screen-reader-text">Facebook</span></a>
					<a href="https://www.linkedin.com/in/jenna-ryan-j1e2n3n4a5/" class="soc-icon ln"><span class="screen-reader-text">LinkedIn</span></a>
					<a href="https://github.com/JennaRy" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
					<a href="https://instagram.com/" class="soc-icon in"><span class="screen-reader-text">Instagram</span></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>