<style>
    @page {margin: 10px;}
    .table_header h3 {margin: 0 0 5px;}
    .table_header {
        margin-bottom: 15px;
        text-align: center;
        color: #000;
        padding-top: 20px;
    }
    .table_header img {max-width: 80px;}
    .signature_box {
        justify-content: space-between;
        align-items: center;
        display: flex;
        margin-top: 45px;
    }
    .signature_box h5 {
        border-top: 2px dashed #000;
        display: inline-block;
        padding-top: 5px;
        color: #000;
    }
</style>
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
                        echo form_open("subject/subject/addSubjectName",$attr);
                        ?>

                            

                            <div class="form-group ">
                                <label class="col-md-4 control-label">Subject Name <span class="req">*</span></label>
                                <div class="col-md-8">
                                    <input type="text"  name="name" placeholder="enter name" class="form-control" required>
                                </div>
                            </div>
							
						
						</div>						
						
					</div>

                    <div class="row">
						<div class="col-md-7">
							<div class="btn-group pull-right">
								<input type="submit" value="Save" name="save" class="btn btn-primary">
							</div>
						</div>
					</div>  

                    <?php echo form_close(); ?>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

<!--all subject name-->
<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">

            <div class="panel-heading">
                <div class="panal-header-title">
                   <h1 class="pull-left">All Subject Name</h1>
                   <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th colspan="3" class="text-center">All Subject Name</th>
                        </tr>
                        <tr>
                            <th width="100">SL</th>
                            <th>Name</th>
                            <th width="200" class="none">Action</th>
                        </tr>
                        
                        <?php if(!empty($all)){ foreach($all as $key => $row){ ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td class="none">
                                <a href="<?php echo site_url('subject/subject/editSubjectName/'.$row->id); ?>" class="btn btn-warning">Edit</a>
                                <a onclick="return confirm('Are you sure to delete this Data');" href="<?php echo site_url('subject/subject/deleteSubjectName/'.$row->id); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php }} ?>
                        
                    </table>
                       

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>