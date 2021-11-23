<div class="col-md-9">
    <div class="row">  
        <!-- single notice section -->
		
		<div class="single">
			<h3>Academic Calendar</h3>

			<?php foreach ($ad_calender as $key => $calender) { ?>
			<h4 style="margin: 0;"><?php echo $calender->ad_calender_title; ?></h4>
			<p>Published Date:&nbsp;<small><?php echo $calender->ad_calender_date; ?></small></p>						
			<a href="<?php echo base_url($calender->ad_calender_attachment); ?>" download >Download</a>
			<p>..................................................</p>
			<?php } ?>							
			
		</div>

    </div>
</div>