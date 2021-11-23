<style>
	@media print{
		aside, .none, input[type="checkbox"]{
			display: none !important;
		}
		nav{
			display: none;
		}
		.panel{
			border: 1px solid transparent;
			left: 0px;
			position: absolute;
			top: 0px;
			width: 100%;
		}
		.none{
			display: none;
		}
		.panel-heading{
			display: none;
		}

		.panel-footer{
			display: none;
		}
        .panel .hide{
            display: block !important;
        }
		.title{
			font-size: 25px;
		}
	}
</style>
<div class="container-fluid">
    <div class="row">
     <?php echo $confirmation; ?>
        <div class="panel panel-default none">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>All Student</h1>
                </div>
            </div>
            <div class="panel-body">
                <?php
                $attr=array("class"=>"form-horizontal");
                echo form_open('',$attr);
                ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Class <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="search[class]" ng-model="class" class="form-control" required>
                                <option value="">-- Select Class--</option>
                                <?php foreach(config_item('classes') as $key => $value){?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                                <option value="passed">Passed</option>
                            </select>
                        </div>
                    </div>

					<div class="form-group">
                        <label class="col-md-2 control-label">Group <span class="req"> &nbsp;</span></label>
                        <div class="col-md-5">
                            <select name="search[group]" class="form-control">
                                <option value="">-- Select Group --</option>
                                <option value="none">None</option>
                                <option value="science">Science</option>
                                <option value="humanities">Humanities</option>
                                <option value="business studies">Business Studies</option>
                            </select>
                        </div>
                    </div>


                 <div class="form-group">
                        <label class="col-md-2 control-label">Section<span class="req">&nbsp;</span></label>
                        <div class="col-md-5">
                            <select name="search[section]" class="form-control">
                                <option value="">-- Select Section--</option>
                                <?php foreach(config_item("section") as $key => $val){ ?>
                                <option value="<?php echo $val; ?>"> <?php echo $val; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Year/Session <span class="req">*</span></label>
                        
                        <div class="col-md-5" ng-if="class =='Eleven' || class =='Twelve' || class =='passed'">
                            <select name="search[session]" class="form-control" required>
                                <option value="">Select Session</option>
                                <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="col-md-5" ng-if="class !='Eleven' && class !='Twelve' && class !='passed'">
                            <select name="search[session]" class="form-control" required>
                                <option value="">Select Session</option>
                                <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

					<div class="form-group">
						<label class="col-md-2 control-label">Type <span class="req"></span></label>
						<div class="col-md-5">
							<select name="search[type]"  class="form-control">
								<option value="">-- Select Type --</option>
								 <?php foreach (config_item('type') as $key => $value) { ?>
                                   <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                 <?php } ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Student ID <span class="req"></span></label>
						<div class="col-md-5">
							<input type="text" name="search[student_id]" ng-model="reg_id" class="form-control" placeholder="Student ID">
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




        <!-- result -->
        <!--<pre><?php // print_r($result);?></pre> -->


         <?php
                $attr=array("class"=>"form-horizontal");
                echo form_open('',$attr);
                ?>


        <?php if($result != null){ ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">Show Result</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <div class="panel-body">

            <div class="row">
                    <div class="view-profile">
                        <div class="col-xs-2">
                            <figure class="pull-left">
                                <img class="img-responsive" src="<?php echo site_url('public/logo/logo.png'); ?>" style="width: 100px; height: 100px;" alt="">
                            </figure>
                        </div>

                        <div class="col-xs-8">
                            <div class="institute">
                                <h2 class="text-center title" style="margin-top: 10; font-weight: bold;">Border Guard Public School and College</h2>
                                <h3 class="text-center" style="margin: 0;">SYLHET</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="border-bottom: 1px solid #ccc;">

                <h3 class="text-center hide">All Students</h3>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tr>
                                <th><input type="checkbox" id="check_all" checked > SL</th>
                                <th>Student's Name</th>
                                 <th>Photo</th>
                                <th width="110">Roll</th>
                                 <th width="180">Group</th>
                                 <th width="110">Section</th>
                                <th>Year/Session</th>
                                <th>Class</th>
                            </tr>

                            <?php foreach($result as $key => $row){ ?>
                            <tr>
                                <?php $where = array("reg_id" => $row->student_id); $info = $this->action->read("registration", $where); ?>
                                <td> 
                                  <input type="checkbox" name="id[]" value="<?php echo $key; ?>" checked > &nbsp;&nbsp; <?php echo ($key + 1); ?> 
                                  <input type="hidden" name="student_id[]" value="<?php echo $row->student_id;?>"  >
                                </td>
                                <td> <?php echo $info[0]->name; ?> </td>
                                <td><img src="<?php echo site_url('public/students/'.$info[0]->photo); ?>" width="50px" height="50px"  alt="Photo Missing!"</td>
                                <td><input type="text" name="roll_no[]" value="<?php echo $row->roll;?>" class="form-control"></td>
                                <td>
                                     <select name="group[]" class="form-control">
                                        <option value="">-- Select Group --</option>
                                        <?php foreach(config_item("group") as $key => $val){ ?>
                                        <option <?php if($row->group == $key){ echo "selected"; } ?> value="<?php echo $key; ?>">
                                        <?php echo $val; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </td>
                                
                                <td>
                                    <select name="section[]" class="form-control">
                                        <option value="">-- Select Section--</option>
                                        <?php foreach(config_item("section") as $key => $val){ ?>
                                        <option <?php if($row->section == $val){ echo "selected"; } ?> value="<?php echo $val; ?>">
                                        <?php echo $val; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </td>
                                
                                <td class="num-center"> <?php echo $row->session; ?> </td>
                                <td> <?php echo $row->class; ?> </td>


                            </tr>
                            <?php } ?>
                        </table>
                    </div>


                    <div class="row none">
                        <div class="form-group">
                            <label class="col-md-2 control-label text-right">Class <span class="req">*</span></label>
                            <div class="col-md-4">
                                <select name="class" class="form-control" required ng-model="class" ng-init="class='';">
                                    <option value="" selected disabled>-- Select Class--</option>
                                    <?php
                                        foreach(config_item('classes') as $key => $value){?>
                                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php
                                        }
                                    ?>
                                            <option value="passed">Passed</option>
                                </select>
                            </div>
                        </div>
                        
                       <?php /*  <div class="form-group">
                            <label class="col-md-2 control-label">Group <span class="req"> *</span></label>
                            <div class="col-md-4">
                                <select name="group" class="form-control" required>
                                    <option value="">-- Select Group --</option>
                                    <?php foreach(config_item("group") as $key => $val){ ?>
                                    <option value="<?php echo $key; ?>">
                                    <?php echo $val; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                       </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label text-right">Section <span class="req">*</span></label>
                            <div class="col-md-4">
                                <select name="section" class="form-control" required>
                                    <option value="" selected disabled>-- Select Section--</option>
                                    <?php
                                        foreach(config_item('section') as $key => $value){?>
                                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div> */ ?>

                        <div class="form-group" ng-show="class !='Eleven' && class !='Twelve'">
                            <label class="col-md-2 control-label text-right">Year <span class="req">*</span></label>
                            <div class="col-md-4">
                                <select name="session" class="form-control">
                                       <option value="" selected disabled>Select Year</option>
                                        <?php for($i=2014; $i<=date("Y")+1; $i++){?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        
                          <div class="form-group" class="form-group" ng-show="class =='Eleven' || class =='Twelve'">
                            <label class="col-md-2 control-label text-right">Session <span class="req">*</span></label>
                            <div class="col-md-4">
                                <select name="session" class="form-control">
                                       <option value="" selected disabled>Select Session</option>
                                        <?php for($i=2014; $i<=date("Y")+1; $i++){?>
                                        <option value="<?php echo $i."-".($i+1); ?>"><?php echo $i."-".($i+1); ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                			<div class="col-md-6">
                				<input type="submit" value="Upgrade" name="up" class="btn btn-primary pull-right">
                			</div>
                        </div>

                    </div>

                </div>
            </div>
            <?php echo form_close();?>

            <div class="panel-footer">&nbsp;</div>
        </div>
        <?php } ?>

    </div>
</div>

<script type="text/javascript">
$("#check_all").on('change', function() {
    if($(this).is(":checked")==true){
        $('input[name="id[]"]').prop("checked",true);
    }else{
        $('input[name="id[]"]').prop("checked",false);
    }
});
</script>