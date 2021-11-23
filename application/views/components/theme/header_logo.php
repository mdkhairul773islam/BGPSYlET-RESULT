<div class="container-fluid">
    <div class="row">
    	<?php echo $this->session->flashdata('confirmation'); ?>
        <?php 
            $header_logo=json_decode($theme_data[0]->header_logo,true);
        ?>

        <div class="panel panel-default">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Header Logo</h1>
                </div>
            </div>

            <div class="panel-body">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="col-md-4">
			        		<figure>
			        			<img style="width: 180px; height: 150px; margin: 5px;" src="<?php echo site_url($header_logo['logo']); ?>" alt="Image not found!">
			        			<figcaption></figcaption>
			        		</figure>
			        	</div>


			        	<div class="col-md-6">
			        		<?php
				        		$attr=array(
									"class"=>"form-horizontal"
				        		);
				        		echo form_open_multipart('', $attr);
			        		?>
        					
		            		<div class="form-group">
							    <label class=" control-label" style="line-height: 4;">Logo</label>
							    <input id="input-test" type="file" name="attachFile" class="form-control file" data-show-preview="false" data-show-upload="false" required data-show-remove="false">
							</div>
					                   
		                    <div class="row">
			                    <div class="btn-group pull-right">
			                        <input type="submit" value="Save" name="submit_logo" class="btn btn-primary">
			                    </div>
		                    </div>
		                	<?php echo form_close(); ?>
			        	</div>

	        		</div>
	        	</div>   
	        </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>