<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />

<div class="container-fluid">
    <div class="row">
        <?php echo $this->session->flashdata('confirmation');?>
        <div class="panel panel-default">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Edit Subject</h1>
                </div>
            </div>

            <div class="panel-body">
                    
                    <div class="row">
                    
                        <div class="col-md-7">

                        <?php                        
                          $attr=array("class"=>"form-horizontal");
                          echo form_open("subject/subject_validation/update/".$subject[0]->id , $attr);
                        ?>

                            <div class="form-group ">
                                <label class="col-md-4 control-label">Class <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                    <select name="class" class="form-control">
                                        <option value="">-- Select Class --</option>                                        
                                        <?php 
                                            foreach(config_item('classes') as $key => $value){?>
                                                <option <?php if($subject[0]->class==$key){echo "selected";}?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <label class="col-md-4 control-label">Group <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                   <select name="group" class="form-control">
                                        <option value="">-- Select Group --</option>
                                        <?php 
                                            foreach(config_item('group') as $key => $value){?>
                                                <option <?php if($subject[0]->group==$key){echo "selected";}?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                            <?php 
                                            }
                                        ?>
                                   </select>
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <label class="col-md-4 control-label">Subject Name <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                    <select name="subject_name" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required>
                                        <option selected disabled>--select subject--</option>
                                        <?php if(!empty($subName)){ foreach ($subName as $key => $value) { ?>
                                            <option <?php if($subject[0]->subject==$value->name){echo "selected";}?>  value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php }} ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="col-md-4 control-label">Paper <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                    <select name="paper" class="form-control" >
                                        <option value="None" <?php if($subject[0]->paper == "None"){echo "selected";} ?>>None</option>
                                        <option value="1st" <?php if($subject[0]->paper == "1st"){echo "selected";} ?>>1st Part</option>
                                        <option value="2nd" <?php if($subject[0]->paper == "2nd"){echo "selected";} ?>>2nd Part</option>
                                    </select>
                                </div>
                            </div>

                             <div class="form-group ">
                                <label class="col-md-4 control-label">Subject Code <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="<?php echo $subject[0]->subject_code;?>" name="subject_code" >
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <label class="col-md-4 control-label">Subject Type <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                   <select name="subject_type" class="form-control">
                                       <option value="">-- Select Type --</option>
                                       <option <?php if($subject[0]->subject_type=="compulsory") { echo "selected";} ?> value="compulsory">Compulsory</option>
                                       <option <?php if($subject[0]->subject_type=="optional") { echo "selected";} ?> value="optional">Optional</option>
                                   </select>
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <label class="col-md-4 control-label">Written <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                    <input type="number" max="100" min="0"  name="written" value="<?php echo $subject[0]->written;?>" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <label class="col-md-4 control-label">Objective <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                    <input class="form-control" type="number" max="100" min="0" value="<?php echo $subject[0]->objective;?>" name="objective">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="col-md-4 control-label">Practical <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                    <input type="number" max="100" min="0"  name="practical" value="<?php echo $subject[0]->practical;?>" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <label class="col-md-4 control-label">Assignment <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                    <input type="number" max="100" min="0" value="<?php echo $subject[0]->assignment;?>" name="assignment" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <label class="col-md-4 control-label">Cleanliness/Project <span class="req">&nbsp;</span></label>
                                <div class="col-md-8">
                                    <input type="number" max="100" min="0" value="<?php echo $subject[0]->cleanliness;?>" name="cleanliness" class="form-control">
                                </div>
                            </div>

                        </div>                       

                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="btn-group pull-right">
                                <input type="submit" value="Update" name="student_submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>  

                    <?php echo form_close(); ?>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
