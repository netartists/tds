<?php /* Static Name: Social Links */ ?>
<h4><?php echo __('Follow Us', CURRENT_THEME); ?></h4>
<ul class="social">
	<?php
		$social_networks = array("facebook", "twitter", "linkedin");
		for($i=0, $array_lenght=count($social_networks); $i<$array_lenght; $i++){
			if(of_get_option($social_networks[$i]) != "") {
				echo '<li class="'.$social_networks[$i].'"><a href="'.of_get_option($social_networks[$i]).'" title="'.$social_networks[$i].'"><i class="icon-'.$social_networks[$i].'"></i><span>'.$social_networks[$i].'</span></a></li>';
			}
		}
	?>
</ul>