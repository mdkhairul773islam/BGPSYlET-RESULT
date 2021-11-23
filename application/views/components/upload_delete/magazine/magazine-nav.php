
<div class="container-fluid" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		<?php if(ck_action("uploadDelete_menu","add_new_magazine")){ ?>
    		<a href="<?php echo site_url('upload_delete/magazine'); ?>" class="btn btn-default" id="add_new_magazine">
    			Add New
    		</a>
		<?php } ?>
		<?php if(ck_action("uploadDelete_menu","all_magazine")){ ?>	
    		<a href="<?php echo site_url('upload_delete/magazine/all_magazine_view'); ?>" class="btn btn-default" id="all_magazine">
    			All Magazine
    		</a>
		<?php } ?>
    </div>
</div>