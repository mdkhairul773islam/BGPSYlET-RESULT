<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default" ng-controller="studentValidity">
            
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Student Validity Date</h1>
                </div>
            </div>

            <div class="panel-body" ng-cloak>
        		<?php
        		    echo $this->session->flashdata('confirmation');
	        		$attr=array(
						"class"=>"form-horizontal"
	        		);
	        		echo form_open_multipart('', $attr);
        		?>

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
            	<?php echo form_close(); ?>
			        
	        </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>