<style>
    @media print{
        aside {display: none !important;}
        nav {display: none;}
        .panel {
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .none {display: none;}
        .panel-heading {display: none;}
        .panel-footer {display: none;}
        .panel .hide {display: block !important;}
        .title {font-size: 25px;}
    }
    .drop {width: 400px;}
    .sortlist {
        padding: 5px 15px;
        margin: 0 auto;
        width: 100%;
        max-height: 80vh;
        overflow: auto;
    }
    .sortlist li {
        color: #333;
        border: 1px solid #ddd;
        display: block;
        padding: 4px 6px;
        margin-bottom: 3px;
        border-radius: 3px;
        background: #eee;
        cursor: move;
    }
    #sort_show {
        margin-left: 15px;
        cursor: pointer;
    }
    #sort_show:hover{color: #333;}
</style>

<div class="container-fluid">
    <div class="row">
    <!-- <pre> <?php // print_r($info); ?> </pre> -->
    <?php echo $confirmation; ?>
        <div class="panel panel-default none">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1> All Employee </h1>
                </div>
            </div>

            <div class="panel-body">
                <?php $attr=array("class"=>"form-horizontal");
                echo form_open("",$attr);?>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Type <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="type" class="form-control" id="teacher_type" required>
                                <option value="">Select Employee Type</option>
                                <option value="teacher">Teacher</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="btn-group pull-right">
                            <input type="submit" name="type_query" value="Show" class="btn btn-primary">
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
        
        <?php if($info!= null){ ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title ">
                    <h1 class="pull-left">Show Result</h1>
                    <span id="sort_show" title="Rearrange">
                        <i class="fa fa-th-list fa-2x" aria-hidden="true"></i>
                    </span>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()">
                        <i class="fa fa-print"></i>Print
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <!-- Print banner -->
                <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                <hr class="hide" style="border-bottom: 1px solid #ccc;">
                <h4 class="hide text-center" style="margin: -10px 0 20px 0;">All Employees</h4>

                <div class="table-responsive">
                    <table class="table table-bordered" style="margin-top: 20px;">
                        <tr>
                            <th class="num-center">Sl</th>
                            <th class="num-center">Date</th>
                            <th class="num-center">CI ID</th>
                            <th>Name</th>
                            <!--<th class="num-center">ID</th>-->
                            <th>Photo</th>
                            <th>Type</th>
                            <th>Designation</th>
                            <th class="num-center">Mobile Number</th>
                            <th>Status</th>
                            <th class="none">Action</th>
                        </tr>
                        <?php foreach ($info as $key => $emp_info) {
                        
                        ?>
                           
                        <tr>
                            <td class="num-center"> <?php echo $key+1; ?> </td>
                            <td class="num-center"> <?php echo $emp_info->employee_joining?> </td>
                            <td class="num-center"> <?php echo $emp_info->ac_id; ?> </td>
                            <td> <?php echo filter($emp_info->employee_name);?> </td>
                            <td> <img src="<?php echo base_url($emp_info->employee_photo); ?>" width="50px" height="50px" alt=""></td>
                            <td> <?php echo filter($emp_info->employee_type);?> </td>
                            <td> <?php echo filter($emp_info->employee_designation);?></td>
                            <td class="num-center"> <?php echo $emp_info->employee_mobile?> </td>
                            <td><?php echo filter($emp_info->job_status);?> </td>
                            <td class="none" style="width: 160px;">
                                <a  class="btn btn-primary" 
                                    href="<?php echo site_url('employee/employee/profile'); ?>?id=<?php echo $emp_info->id; ?>">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a  class="btn btn-warning" 
                                    href="<?php echo site_url('employee/employee/edit_employee') ;?>?id=<?php echo $emp_info->id; ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a  class="btn btn-danger" 
                                    onclick="return confirm('Are you sure to delete this data?');" 
                                    href="<?php echo site_url('employee/employee/show_employee') ;?>?delete_token=<?php echo $emp_info->id; ?>&img_url=<?php echo $emp_info->employee_photo; ?>">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
        <?php } ?>
    </div>
</div>

<div id="lb_content" >
    <div class="crop-panel" >
        <div class="crop-body">
            <div class="crop-content drop">
                <span class="close-btn" onclick="lb_hide();" >X</span>
                <ul id="sortable" class="sortlist">
                <?php foreach ($info as $key => $emp_info) {
                    $img_url=$emp_name=$mobile=$status=null;
                    if ($emp_info->employee_type=="teacher"){
                        $emp_name=$emp_info->name;
                    }
                    elseif($emp_info->employee_type=="staff"){
                        $emp_name=$emp_info->employee_name;
                    }

                 ?>
                    <li id="id<?php echo $key+1;?>" data-mainid="<?php echo $emp_info->id; ?>" data-position="<?php echo $emp_info->position; ?>" ><?php echo $emp_name;?></li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url('private/plugins/mf_lightbox.js');?>"></script>
<script>
    $(document).ready(function(){
        //Light Box show Start
        $("#sort_show").on('click', function(event) {
            lb_show();
        });
        
        //Drag and drop Start here
        $( function() {
        $("#sortable").disableSelection();
            (function($) {
                var sortObj = {};
    
                $('#sortable').sortable({
                    cursor: "move",
                    distance: 5,
                    opacity: 0.8,
                    stop: function(e, ui) {
                        $.map($(this).find('li'), function(el) {
                            var index = parseInt($(el).index()) + 1;
                            sortObj[$("#"+el.id).data('mainid')] = index;
                        });
                        var final_data=JSON.stringify(sortObj);
                        $.ajax({
                            type: "POST",
                            url: "<?php echo site_url('employee/employee/ajax_employee_sort'); ?>",
                            data: {finaldata:final_data}
                        }).done(function(response){
                            console.log(response);
                        });
                    }
                });
            })(jQuery);
        });
    });
</script>
