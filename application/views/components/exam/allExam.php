<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default none">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>All Exam</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php $attr=array("class" => "form-horizontal");
                    echo form_open("", $attr);?>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Exam Name <span class="req">*</span></label>
                            <div class="col-md-5">
                                <select name="exam" class="form-control" required>
                    				<option value="">-- Select Exam--</option>
                    				<?php foreach ($exam as $key => $value) { ?>
                    				  <option value="<?php echo $value->exam_id;?>"><?php echo $value->title;?></option>
                    				<?php } ?>
                    			</select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="btn-group pull-right">
                                <input type="submit" value="Show" name="show" class="btn btn-primary">
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
        
        <?php if($result != null){ ?>
        <div class="panel panel-default">
        	<div class="panel-heading">
        		 <div class="panal-header-title">
                    <h1 class="pull-left">Show Result</h1>
                </div>
        	</div>
        	
        	<div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="40">SL</th>
                        <th>Exam Name</th>
                        <th>Exam Start At</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach($result as $key => $row){ ?>
                    <tr>
                        <td><?php echo ($key + 1); ?></td>
                        <td><?php echo $row->title; ?></td>
                        <td><?php echo $row->date; ?></td>
                        <td><?php echo $row->class; ?></td>

                        <td style="width: 155px;">
                            <a class="btn btn-info" href="<?php echo base_url('exam/exam/details?q='.$row->exam_id."&&class=".$row->class); ?>"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-warning" href="<?php echo base_url('exam/exam/editExam?q='.$row->exam_id."&&class=".$row->class)?>"><i class="fa fa-pencil-square-o"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                
                </table>
        	</div>
        	<div class="panel-footer">&nbsp;</div>
        </div>
        <?php } ?>
    </div>
</div>