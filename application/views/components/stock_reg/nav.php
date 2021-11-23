<div class="container-fluid none" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		
		<?php if(ck_action("stock_reg_menu","field")){ ?>	
    		<a href="<?php echo site_url('stock_reg/stock'); ?>" class="btn btn-default" id="field">
    			Field of Stock  
    		</a>
		<?php } ?>
		
		<?php if(ck_action("stock_reg_menu","room")){ ?>	
    		<a href="<?php echo site_url('stock_reg/stock/room'); ?>" class="btn btn-default" id="room">
    			Room No
    		</a>
    	<?php } ?>
    	
		<?php if(ck_action("stock_reg_menu","new")){ ?>	
    		<a href="<?php echo site_url('stock_reg/stock/new_stock_reg'); ?>" class="btn btn-default" id="new">
    			New Stock Regsister
    		</a>
		<?php } ?>
		
	  <?php if(ck_action("stock_reg_menu","all")){ ?>	
    		<a href="<?php echo site_url('stock_reg/stock/all_stock_reg'); ?>" class="btn btn-default" id="all">
    			All Stock Regsister
    		</a>
	  <?php } ?>	
    </div>
</div>