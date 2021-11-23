<div class="container-fluid">
    <div class="row">
        <?php 
            $social_links = json_decode($theme_data[0]->social_links,true);
        ?>

        <div class="panel panel-default">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Social Links</h1>
                </div>
            </div>

            <div class="panel-body">
	        		
        		<?php
	        		$attr=array(
						"class"=>"form-horizontal"
	        		);
	        		echo form_open_multipart('theme/theme/social_icon', $attr);
        		?>

				<div class="form-group">
                    <label class="col-md-3 control-label">Facebook</label>
                    
                    <div class="col-md-5">
                    	<input type="text" value="<?php echo isset($social_links['facebook']) ? $social_links['facebook'] : ''; ?>" name="facebook" class="col-md-5 form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Twitter</label>
                    
                    <div class="col-md-5">
                    	<input type="text" value="<?php echo isset($social_links['twitter']) ? $social_links['twitter'] : ''; ?>" name="twitter" class="form-control">
                	</div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Google++</label>
                    
                    <div class="col-md-5">
                    	<input type="text" value="<?php echo isset($social_links['google']) ? $social_links['google'] : ''; ?>" name="google" class="form-control">
                	</div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Instagram</label>
                    
                    <div class="col-md-5">
                    	<input type="text" value="<?php echo isset($social_links['instagran']) ? $social_links['instagran'] : ''; ?>" name="instagran" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Pinterest</label>
                    
                    <div class="col-md-5">
                    	<input type="text" value="<?php echo isset($social_links['pinterest']) ? $social_links['pinterest'] : ''; ?>" name="pinterest" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Youtube</label>
                    
                    <div class="col-md-5">
                    	<input type="text" value="<?php echo isset($social_links['utube']) ? $social_links['utube'] : ''; ?>" name="utube" class="form-control">
                	</div>
                </div>
		                   
                <div class="col-md-8">
                    <div class="btn-group pull-right">
                        <input type="submit" value="Save" name="submit_contact" class="btn btn-primary">
                    </div>
                </div>
            	<?php echo form_close(); ?>
			        
	        </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>