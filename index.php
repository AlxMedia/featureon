<?php get_header(); ?>

<div id="subheader" class="group">
	<?php get_template_part('inc/page-title'); ?>	
	<div class="featured-posts group">
		<?php get_template_part('inc/featured'); ?>
		<?php get_template_part('inc/highlight'); ?>
	</div>	
</div><!--/#subheader-->

<div id="page">
	<div class="container">
		<div class="main">
			<div class="main-inner group">
			
				<div class="content">
					<div class="pad group">
							
						<?php get_template_part('inc/front-widgets-top'); ?>
						
						<?php if ( have_posts() ) : ?>
							
							<?php if ( get_theme_mod('blog-layout','blog-standard') == 'blog-grid' ) : ?>
								
								<div class="post-grid group">
									<?php $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post(); ?>
										<?php get_template_part('content-grid'); ?>
									<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>
								</div><!--/.post-grid-->
								
							<?php elseif ( get_theme_mod('blog-layout','blog-standard') == 'blog-list' ) : ?>
								
								<?php while ( have_posts() ): the_post(); ?>
									<?php get_template_part('content-list'); ?>
								<?php endwhile; ?>
								
							<?php else: ?>
							
								<?php while ( have_posts() ): the_post(); ?>
									<?php get_template_part('content'); ?>
								<?php endwhile; ?>
								
							<?php endif; ?>
							
							<?php get_template_part('inc/front-widgets-bottom'); ?>
							<?php get_template_part('inc/pagination'); ?>
							
						<?php endif; ?>
						
					</div><!--/.pad-->
				</div><!--/.content-->

				<?php get_sidebar(); ?>

			</div><!--/.main-inner-->
		</div><!--/.main-->			
	</div><!--/.container-->
</div><!--/#page-->

<?php get_footer(); ?>