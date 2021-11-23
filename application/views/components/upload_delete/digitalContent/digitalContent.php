<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation; ?>
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>Digital Content</h1>
                </div>
            </div>

            <div class="panel-body">

                <?php
                    $attr=array("class"=>"form-horizontal");
                    echo form_open_multipart('',$attr);
                ?>
        
                    <div class="form-group">
                        <label class="col-md-2 control-label">Teacher <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select class="form-control" name="teacher_id">
                                <option value="">--Select A Teacher--</option>
                                <?php if($employees) foreach($employees as $key=>$value){ ?>
                                <option value="<?=($value->id)?>"><?=($value->employee_name)?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Title <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="dc_title" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Class <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="dc_class" class="form-control" required>
                                <option value="">-- Select class --</option>
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
                        <label class="col-md-2 control-label">Group <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="dc_group" class="form-control" required>
                                <option value="">-- Select group --</option>
                                <?php
                                    foreach (config_item('group') as $key => $value) {?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="col-md-2 control-label">Subject <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="dc_subject" class="form-control" required>
                                <option value="">-- Select Subject --</option>
                                <?php 
                                    foreach (config_item('subject') as $key => $value) {?>
                                        <optgroup label="Class <?php echo $key; ?>">
                                            <?php 
                                                foreach ($value as $skey => $svalue){?>
                                                    <option value="<?php echo $svalue; ?>"><?php echo $svalue; 1?></option>
                                                <?php 
                                                } 
                                            ?>
                                        </optgroup>
                                    <?php
                                        # code...
                                    }
                                ?>
                            </select>
                        </div>
                    </div>  
                    
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Attach File ('.ppt/.pptx/.pdf ') <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input id="input-test" type="file" name="attachFile" required class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
                        </div>
                    </div> 

                    <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" name="dc_submit" value="Save" class="btn btn-primary">
                    </div>
                    </div>
                    

                <?php echo form_close(); ?>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

