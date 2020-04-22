<h1><?php bloginfo("name"); ?></h1>
<?php 
	while(have_posts()) {
		the_post(); ?>
		<section>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
		<hr>
		</section>
		<?php
	}
?>

<h1> 

</h1>
