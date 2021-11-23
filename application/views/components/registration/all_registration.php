<div class="container-fluid">
    <div class="row">
        <?php echo $this->session->flashdata('confirmation');?>

        <div class="panel panel-default none">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>All Registration</h1>
                </div>
            </div>
            <div class="panel-body">
                <?php
                    $attr = array("class" => "");
                    echo form_open("", $attr);
                ?>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="search[study_class]" class="form-control">
                                <option selected disabled>Select Class</option>
                                <?php foreach(config_item('classes') as $key => $value){?>
                                <option value="<?php echo $key; ?>"> <?php echo $value; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="search[study_section]" class="form-control">
                                <option selected disabled>Select Section</option>
                                <?php foreach(config_item('section') as $value){ ?>
                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="search[study_group]" class="form-control">
                                <option selected disabled>Select Group</option>
                                <?php foreach(config_item('group') as $key => $value){ ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="btn-group">
                            <input type="submit" value="Show" name="show" class="btn btn-primary">
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>

    <?php if(!empty($result)) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">All Registration</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()">
                        <i class="fa fa-print"></i> Print
                    </a>
                </div>
            </div>

            <div class="panel-body">
                <h3 class="text-center hide">All Ragistration</h3>
                <table class="table table-bordered">
                    <tr>
                        <th width="5%">SL</th>
                        <th width="25%">Student</th>
                        <th width="10%">Photo</th>
                        <th width="25%">Address</th>
                        <th width="24%">Institute Info</th>
                        <th class="none" width="11%">Action</th>
                    </tr>
                    <?php foreach($result as $key => $value){ ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td>
                                <strong>Bangla:</strong> <?php echo (!empty($value->name_bn)) ? $value->name_bn : ""; ?> <br />
                                <strong>English:</strong> <?php echo (!empty($value->name_en)) ? $value->name_en : ""; ?> <br />
                                <strong>Birth Card:</strong> <?php echo (!empty($value->birth_no)) ? $value->birth_no : ""; ?> <br />
                                <strong>Birthday:</strong> <?php echo (!empty($value->dob)) ? $value->dob : ""; ?> <br />
                                <strong>Birth Place:</strong> <?php echo (!empty($value->birth_place)) ? $value->birth_place : ""; ?> <br />
                            </td>
                            <td>
                                <?php if(!empty($value->student_photo)){ ?>
                                    <img src="<?php echo site_url($value->student_photo); ?>" class="img-thumbnail" alt="..." >
                                <?php } ?>
                                <?php if(!empty($value->student_sign)){ ?>
                                <img src="<?php echo site_url($value->student_sign); ?>" class="img-thumbnail" alt="..." >
                                <?php } ?>
                                <?php /* if(!empty($value->guardian_sign)){ ?>
                                <img src="<?php echo site_url($value->guardian_sign); ?>" class="img-thumbnail" alt="..." >
                                <?php } */  ?>
                            </td>
                            <td>
                                <?php echo (!empty($value->present_holding_no)) ? $value->present_holding_no : ""; ?>, 
                                <?php echo (!empty($value->present_mouza)) ? $value->present_mouza : ""; ?>, 
                                <?php echo (!empty($value->present_word_no)) ? $value->present_word_no : ""; ?>, 
                                <?php echo (!empty($value->present_village)) ? $value->present_village : ""; ?>
                                <?php /* ?>
                                <?php echo $value->present_post_code; ?>, 
                                <?php echo $value->present_post_office; ?>, 
                                <?php echo $value->present_union; ?>, 
                                <?php echo $value->present_city_corporation; ?>, 
                                <?php echo $value->present_pourashava; ?>, 
                                <?php echo $value->present_upazila; ?>, 
                                <?php echo $value->present_district; ?>, 
                                <?php echo $value->present_division; ?>
                                <?php echo $value->nationality; ?>
                                <?php */ ?>
                            </td>
                            <td>
                                <strong>Name:</strong> <?php echo (!empty($value->institute_name)) ? $value->institute_name : ""; ?> <br />
                                <strong>Address:</strong>
                                    <?php echo (!empty($value->institute_upazila)) ? $value->institute_upazila : ""; ?>, 
                                    <?php echo (!empty($value->institute_district)) ? $value->institute_district : ""; ?>, 
                                    <?php echo (!empty($value->institute_division)) ? $value->institute_division : ""; ?>, 
                                    <?php echo (!empty($value->institute_pourashava)) ? $value->institute_pourashava : ""; ?>, 
                                    <?php echo (!empty($value->institute_city_corporation)) ? $value->institute_city_corporation : ""; ?>
                            </td>
                            <td class="none">
                                <a  target="_blank" class="btn btn-primary" title="View" style="margin-bottom: 8px;"
                                    href="<?php echo base_url('registration/registration/regi_profile').'/'.$value->id; ?>">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a  target="_blank" class="btn btn-warning" title="Edit" style="margin-bottom: 8px;"
                                    href="<?php echo base_url('registration/registration/edit_registration').'/'.$value->id; ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <?php /* if($value->status != "admitted"){ ?>
                                <a  target="_blank" class="btn btn-info" title="Admission" style="margin-bottom: 8px;"
                                    href="<?php echo base_url('registration/registration/admission').'/'.$value->id;  ?>" >
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                                <?php } */ ?>
                                <a  class="btn btn-danger" title="Delete" style="margin-bottom: 8px;"
                                    onclick="return confirm('Are you sure to delete this Data?');"
                                    href="<?php echo base_url('registration/registration/trash').'/'.$value->id; ?>">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
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