<?php /* Static Name: Search */ ?>
<!-- BEGIN SEARCH FORM -->
<?php if ( of_get_option('g_search_box_id') == 'yes') { ?>
	<div class="search-form search-form__h hidden-phone clearfix">
		<form id="search-header" class="navbar-form pull-right" method="get" action="<?php echo home_url(); ?>/" accept-charset="utf-8">
			<input type="text" name="s" placeholder="<?php echo __('Search', CURRENT_THEME); ?>" class="search-form_it">
			<button type="submit" class="btn btn-success search-form_is">
	            <i class="icon-search"></i>
	        </button>
		</form>
	</div>
<?php } ?>
<!-- END SEARCH FORM -->