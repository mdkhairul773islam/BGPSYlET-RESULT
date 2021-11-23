<style>
    .show-btn{
        width: 70px;
        height: 35px;
        color: #c504052;
        border: 1px solid #c50405;
        background: #fff;
    }
    .show-btn:hover{
        background: #c50405;
        color: #fff;
    }
</style>

<div class="col-md-9">
    <div class="row">        
        <div class="single teacher_table clearfix">
        <!--pre><?php print_r($student_info);?></pre-->

        <h3>All Students</h3>

            <?php echo form_open('');?>

                <div class="form-group clearfix">
                    <label class="col-md-2 control-label">Session </label>
                    <div class="col-md-5">
                        <select name="search[session]" class="form-control">
                           <option value="">-- Select Session --</option>
                           <?php foreach ($session_list as $key => $value) { ?>
                           <option value="<?php echo $value->session; ?>"><?php echo $value->session; ?></option>
                           <?php } ?>
                       </select>
                    </div>
                </div>

                 <div class="form-group clearfix">
                    <label class="col-md-2 control-label">Class </label>
                    <div class="col-md-5">
                        <select name="search[class]" class="form-control">
                            <option value="">-- Select Class --</option>
                            <?php
                                foreach (config_item('classes') as $key => $value) {?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="col-md-2 control-label">Group</label>
                    <div class="col-md-5">
                        <select name="search[group]" class="form-control">
                            <option value="">-- Select Group --</option>
                            <?php
                                foreach (config_item('group') as $key => $value) {?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-xs-7" style="margin-bottom: 25px;">
                    <input class="pull-right show-btn" type="submit" value="Show" name="viewQuery" />
                </div>

            <?php echo form_close(); if ($student_info !=NULL) { ?>

            <table>
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Roll</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Session</th>
                        <th>Group</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                   foreach ($student_info as $key => $students) {
                       $info=$this->retrieve->read("registration",array('reg_id'=>$students->student_id));                   
                     ?>
                     <tr>
                        <td><?php echo ($key+1); ?></td>
                        <td><?php echo $students->roll; ?></td>
                        <td style="width: 80px;"><img src="<?php echo site_url('public/students/'.($info[0]->photo ? $info[0]->photo : "demo.png"));?>" width="80px" height="80px"></td>
                        <td><?php echo $info[0]->name; ?></td>
                        <td><?php echo $students->class; ?></td>
                        <td><?php echo $students->session; ?></td>
                        <td><?php echo str_replace("_"," ",$students->group);?></td>
                     </tr> 
                <?php } ?>                         
                </tbody>
            </table>
            <?php } ?>
        </div>
    </div>
</div>