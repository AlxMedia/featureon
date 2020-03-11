<div class="page-title group">
	<div class="container pad">
	
	<?php if ( is_home() ) : ?>
		<h2><strong><?php echo magazinertwo_blog_title(); ?></strong></h2>
		
	<?php elseif ( is_single() ): ?>
		<h2><strong><?php the_category(' <span>/</span> '); ?></strong></h2>
		
	<?php elseif ( is_page() ): ?>
		<h2><strong><?php the_title(); ?></strong></h2>

	<?php elseif ( is_search() ): ?>
		<h1><strong>
			<?php if ( have_posts() ): ?><i class="fas fa-search"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="fas fa-exclamation-circle"></i><?php endif; ?>
			<?php $search_results=$wp_query->found_posts;
				if ($search_results==1) {
					echo $search_results.' '.esc_html__('Search result','magazinertwo');
				} else {
					echo $search_results.' '.esc_html__('Search results','magazinertwo');
				}
			?>
		</strong></h1>
		
	<?php elseif ( is_404() ): ?>
		<h1><strong><i class="fas fa-exclamation-circle"></i><?php esc_html_e('Error 404.','magazinertwo'); ?> <span><?php esc_html_e('Page not found!','magazinertwo'); ?></span></strong></h1>
		
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h1><strong><i class="far fa-user"></i><?php esc_html_e('Author:','magazinertwo'); ?> <span><?php echo $author->display_name;?></span></strong></h1>
		
	<?php elseif ( is_category() ): ?>
		<h1><strong><?php echo single_cat_title('', false); ?></strong></h1>

	<?php elseif ( is_tag() ): ?>
		<h1><strong><i class="fas fa-tags"></i><?php esc_html_e('Tagged:','magazinertwo'); ?> <span><?php echo single_tag_title('', false); ?></span></strong></h1>
		
	<?php elseif ( is_day() ): ?>
		<h1><strong><i class="far fa-calendar"></i><?php esc_html_e('Daily Archive:','magazinertwo'); ?> <span><?php echo esc_html( get_the_time('F j, Y') ); ?></span></strong></h1>
		
	<?php elseif ( is_month() ): ?>
		<h1><strong><i class="far fa-calendar"></i><?php esc_html_e('Monthly Archive:','magazinertwo'); ?> <span><?php echo esc_html( get_the_time('F Y') ); ?></span></strong></h1>
			
	<?php elseif ( is_year() ): ?>
		<h1><strong><i class="far fa-calendar"></i><?php esc_html_e('Yearly Archive:','magazinertwo'); ?> <span><?php echo esc_html( get_the_time('Y') ); ?></span></strong></h1>
	
	<?php else: ?>
		<h2><strong><?php the_title(); ?></strong></h2>
	
	<?php endif; ?>
	
	</div>
</div><!--/.page-title-->