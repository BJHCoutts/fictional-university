<?php get_header(); ?>
<h1>single.php test</h1>
<?php 
	while(have_posts()) {
		the_post(); ?>
		<section>
			<h2>			
					<?php the_title(); ?>
			</h2>
			<p><?php the_content(); ?></p>
		</section>
		<?php
	}
?>
<?php	get_footer(); ?>