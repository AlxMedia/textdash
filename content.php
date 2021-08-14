<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-type-list'); ?>>	
	
	<div class="type-list-inner group <?php if ( has_post_thumbnail() ): ?>has-thumbnail<?php endif; ?>">

		<div class="type-list-left">
			<a class="type-list-date" href="<?php the_permalink(); ?>">
				<span class="type-list-date-month"><?php the_time('M') ?></span>
				<span class="type-list-date-day"><?php the_time('d') ?></span>
				<span class="type-list-date-year"><?php the_time('Y') ?></span>
			</a>
		</div>

		<div class="type-list-right">
		
			<div class="type-list-right-inner">
				
				<div class="type-list-category"><?php the_category(' / '); ?></div>
				<h2 class="type-list-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				
				<?php if (get_theme_mod('excerpt-length','0') != '0'): ?>
					<div class="type-list-excerpt">
						<?php the_excerpt(); ?>
					</div>
				<?php endif; ?>
				
			</div>

			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) == 'on' ) ): ?>
				<a class="post-comments" href="<?php comments_link(); ?>"><span><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php endif; ?>

		</div>
	
	</div>

</article><!--/.post-->	