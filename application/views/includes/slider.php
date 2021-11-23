
<!-- slideshow -->
<div class="container">
	<div class="row">
		<div id="wowslider-container1" style="height: 350px !important;">
			<div class="ws_images" style="height: 350px !important;">
				<ul>
					<?php foreach ($slider_data as $key => $value) { ?>
					<li><img src="<?php echo base_url($value->slider_path)?>" alt="" title="" id="wows1_<?php echo $key?>"/></li>
					<?php } ?>
				</ul>
			</div>
			<div class="ws_shadow"></div>
		</div>	
	</div>
</div>