<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="footer-logo"><?php 
	if(of_get_option('footer_logo')) { ?>
		<img src="<?php echo of_get_option('footer_logo') ?>">
	<?php } else {
		bloginfo('name'); 
	}
	?></a>
	<?php $myfooter_text = apply_filters( 'cherry_text_translate', of_get_option('footer_text'), 'footer_text' ); ?>
	<?php if($myfooter_text){?>
		<p class="desc"><?php echo of_get_option('footer_text'); ?></p>
	<?php } else { ?>
		<p class="desc">&copy; <?php echo date('Y'); ?>. <span><a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php echo theme_locals("privacy_policy"); ?></a></span></p>
	<?php } ?>
</div>