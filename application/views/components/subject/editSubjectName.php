<div class="container-fluid">
    <div class="row">
        <?php echo $this->session->flashdata('confirmation'); ?>
        <div class="panel panel-default">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Add Subject Name</h1>
                </div>
            </div>

            <div class="panel-body">
                    
                    <div class="row">
					
						<div class="col-md-7">

                        <?php
                        $attr=array("class"=>"form-horizontal");
                        echo form_open("subject/subject/editSubjectName/{$subName[0]->id}",$attr);
                        ?>

                            

                            <div class="form-group ">
                                <label class="col-md-4 control-label">Subject Name <span class="req">*</span></label>
                                <div class="col-md-8">
                                    <input type="text"  name="name" value="<?php echo $subName[0]->name; ?>" class="form-control" required>
                                </div>
                            </div>
							
						
						</div>						
						
					</div>

                    <div class="row">
						<div class="col-md-7">
							<div class="btn-group pull-right">
								<input type="submit" value="Update" name="update" class="btn btn-primary">
							</div>
						</div>
					</div>  

                    <?php echo form_close(); ?>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
