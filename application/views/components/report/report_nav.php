<div class="container-fluid none" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		
	<?php if(ck_action("report_menu","cost")){ ?>	
		<a href="<?php echo site_url('report/cost_report'); ?>" class="btn btn-default" id="cost">
			Cost Report
		</a>
    <?php } ?>    
        
        
    <?php if(ck_action("report_menu","balance")){ ?>				
		<a href="<?php echo site_url('report/balance_report'); ?>" class="btn btn-default" id="balance">
			Balance Sheet
		</a>
	<?php } ?>
	
    </div>
</div>