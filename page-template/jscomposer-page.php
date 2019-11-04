<?php /*Template Name: Visual Composer*/ ?>
<?php get_header() ?>
<section id="page">
	<div class="content-wrap">
		<div class="container">			
			<?php if ( have_posts() ) :?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ) ?>
				<?php endwhile;?>	
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif;?>
		</div>
	</div>
</section>
<?php get_footer() ?>