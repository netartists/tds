<?php
/**
* Template Name: Testimonials
*/

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page-testi.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
						<?php get_template_part("static/static-title"); ?>
					</div>
				</div>
				<div class="row">
					<div class="span12">
						<?php if (have_posts()) : while (have_posts()) : the_post();
							$content = get_the_content();
							if (!empty($content)) { ?>
								<div id="page-content"><?php the_content(); ?></div>
							<?php }
						endwhile; endif; ?>
					</div>
					<div class="<?php echo cherry_get_layout_class( 'content' ); ?> <?php echo of_get_option('blog_sidebar_pos'); ?>" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-testi.php">
						<?php get_template_part("loop/loop-testi"); ?>
					</div>
					<div class="<?php echo cherry_get_layout_class( 'sidebar' ); ?> sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>