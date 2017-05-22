<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
	<header class="post-header">
		<?php if(is_sticky()) : ?>
			<h5 class="post-label"><?php echo theme_locals("featured");?></h5>
		<?php endif; ?>
		<h2 class="post-title"><?php if(!is_singular()) : ?><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php endif; ?><?php the_title(); ?><?php if(!is_singular()) : ?></a><?php endif; ?></h2>
	</header>
	<div class="post-thumb clearfix">
			<?php get_template_part('includes/post-formats/post-thumb'); ?>
		<div class="clear"></div>
	</div>
	<!-- Post Content -->
	<div class="post_content">
		<?php the_content(''); ?>
		<div class="clear"></div>
	</div>
	<!-- //Post Content -->
	<?php get_template_part('includes/post-formats/post-meta'); ?>
</article><!--//.post__holder-->