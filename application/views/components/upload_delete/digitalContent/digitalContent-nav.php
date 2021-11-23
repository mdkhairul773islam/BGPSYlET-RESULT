
<div class="container-fluid" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		<?php if(ck_action("uploadDelete_menu","add_new_content")){ ?>
    		<a href="<?php echo site_url('upload_delete/digitalContent'); ?>" class="btn btn-default" id="add_new_content">
    			Add New
    		</a>
		<?php } ?>
		<?php if(ck_action("uploadDelete_menu","all_content")){ ?>	
    		<a href="<?php echo site_url('upload_delete/digitalContent/all_digitalContent_view'); ?>" class="btn btn-default" id="all_content">
    			All Digital Content
    		</a>
    	<?php } ?>	
    </div>
</div>