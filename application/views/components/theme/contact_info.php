<div class="container-fluid">
    <div class="row">
    	<?php echo $this->session->flashdata('confirmation'); ?>
        <?php 
            $contact_info = json_decode($theme_data[0]->contact_info,true);
        ?>

        <!--div class="panel panel-default" ng-controller="studentValidity">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Student Validity Date</h1>
                </div>
            </div>

            <div class="panel-body" ng-cloak>
	        		
        		<?php /*
	        		$attr=array(
						"class"=>"form-horizontal"
	        		);
	        		echo form_open_multipart('theme/theme/validity', $attr);
        		*/?>

				<div class="form-group">
                    <label class="col-md-3 control-label">Institute Type</label>
                    <div class="col-md-5">
                    	<select name="class" ng-model="studentClass" class="form-control" ng-change="getStudentFn()">
                            <option disabled>--select type--</option>
                            <option value="Six">School</option>
                            <option value="Eleven">College</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Date</label>
                    
                    <div class="col-md-5">
                    	<input type="text" value="{{validity}}" name="validity" class="form-control">
                	</div>
                </div>
		                   
                <div class="col-md-8">
                    <div class="btn-group pull-right">
                        <input type="submit" value="Save" name="save" class="btn btn-primary">
                    </div>
                </div>
            	<?php //echo form_close(); ?>
			        
	        </div>

            <div class="panel-footer">&nbsp;</div>
        </div-->



        <div class="panel panel-default">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Contact Info</h1>
                </div>
            </div>

            <div class="panel-body">
                    
                <?php
                    $attr=array(
                        "class"=>"form-horizontal"
                    );
                    echo form_open_multipart('theme/theme/contact_info', $attr);
                ?>

                <div class="form-group">
                    <label class="col-md-3 control-label">Site Name</label>
                    
                    <div class="col-md-5">
                        <input type="text" value="<?php echo isset($contact_info['site_name']) ? $contact_info['site_name'] : ''; ?>" name="site_name" class="col-md-5 form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Address</label>
                    
                    <div class="col-md-5">
                        <input type="text" value="<?php echo isset($contact_info['address']) ? $contact_info['address'] : ''; ?>" name="address" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Mobile One</label>
                    
                    <div class="col-md-5">
                        <input type="text" value="<?php echo isset($contact_info['mobile1']) ? $contact_info['mobile1'] : ''; ?>" name="mobile1" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label">Mobile Two</label>
                    
                    <div class="col-md-5">
                        <input type="text" value="<?php echo isset($contact_info['mobile2']) ? $contact_info['mobile2'] : ''; ?>" name="mobile2" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Email One</label>
                    
                    <div class="col-md-5">
                        <input type="text" value="<?php echo isset($contact_info['email1']) ? $contact_info['email1'] : ''; ?>" name="email1" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label">Email Two</label>
                    
                    <div class="col-md-5">
                        <input type="text" value="<?php echo isset($contact_info['email2']) ? $contact_info['email2'] : ''; ?>" name="email2" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Website</label>
                    
                    <div class="col-md-5">
                        <input type="text" value="<?php echo isset($contact_info['website']) ? $contact_info['website'] : ''; ?>" name="website" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Copy right</label>
                    
                    <div class="col-md-5">
                        <input type="text" value="<?php echo isset($contact_info['copy_right']) ? $contact_info['copy_right'] : ''; ?>" name="copy_right" class="form-control">
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