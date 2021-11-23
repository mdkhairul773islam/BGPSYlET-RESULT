<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation; ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>Result</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php $attr=array("class"=>"form-horizontal" );
                echo form_open_multipart("",$attr); ?>
                <div class="form-group">
                    <label class="col-md-2 control-label">Class <span class="req">*</span></label>
                    <div class="col-md-5">
                        <select name="result_class" class="form-control" required>
                            <option value="">Select class</option>
                            <?php
                                foreach (config_item('classes') as $key => $value) {?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-md-2 control-label">Exam Name <span class="req">*</span></label>
                    <div class="col-md-5">
                        <select name="exam_name" class="form-control" required>
                            <option value="">Select item</option>
                            <option value="Weekly_Exam">Weekly Exam</option>
                            <option value="Monthly_Exam">Monthly Exam</option>
                            <option value="Model_Test">Model Test</option>
                            <option value="Year_Final">Year Final</option>
                        </select>
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-md-2 control-label">Attach File ('.pdf ') <span class="req">*</span></label>
                    <div class="col-md-5">
                        <input id="input-test" type="file" name="attachFile" required class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
                    </div>
                </div> 

                <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" name="result_submit" value="Upload" class="btn btn-primary">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

