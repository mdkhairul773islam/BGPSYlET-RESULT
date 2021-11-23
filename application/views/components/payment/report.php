<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />


<style>
    @media print{
        aside, nav, .none, .panel-heading, .panel-footer{
            display: none !important;
        }
        .panel{
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .hide{
            display: block !important;
        }
        .block-hide{
            display: none;
        }
    }
</style>


<div class="container-fluid block-hide">
    <div class="row">
    <?php echo $this->session->flashdata('confirmation'); ?>

    <!-- horizontal form -->
    <?php
    $attribute = array(
        'name' => '',
        'class' => 'form-horizontal',
        'id' => ''
    );
    echo form_open('', $attribute);
    ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Search By</h1>
                </div>
            </div>

            <div class="panel-body no-padding">
                <div class="no-title">&nbsp;</div>

                <div class="col-md-12">
                    <!-- left side -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Class</label>
                            <div class="col-md-7">
                                <select name="search[class]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                  <option value="" selected disabled>-- Select Class --</option>
                                  <?php
                                      foreach(config_item('classes') as $key => $value){?>
                                          <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                      <?php
                                      }
                                  ?>                             
                                 </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Section</label>
                            <div class="col-md-7">
                                <select name="search[section]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                  <option value="" selected disabled>-- Select Section--</option>
                                  <?php
                                      foreach(config_item('section') as $key => $value){?>
                                          <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                      <?php
                                      }
                                  ?>                            
                                 </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Type</label>
                            <div class="col-md-7">
                                <select name="search[type]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                  <option value="" selected disabled>-- Select Type--</option>
                                  <?php foreach (config_item('type') as $key => $value) { ?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                  <?php } ?>
                                 </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">ID</label>
                            <div class="col-md-7">
                                <input type="text" name="search[student_id]"  class="form-control" placeholder="Type Student ID">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2">Invoice No</label>
                            <div class="col-md-7">
                                <input type="text" name="search[invoice_no]" class="form-control" placeholder="Type Invoice No">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="col-md-2">Guardian Mobile</label>
                            <div class="col-md-7">
                                <input type="text" name="search[guardian_mobile]" class="form-control" placeholder="Type Guardian Mobile No">
                            </div>
                        </div>
                    </div>

                    <!-- right side -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Year</label>
                            <div class="col-md-7">
                                <select name="search[year]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                  <option value="" selected disabled>-- Select Year --</option>
                                  <?php 
                                      for ($i=2016; $i <= date('Y')+2 ; $i++) { ?>
                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                  <?php } ?>                           
                                 </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Month</label>
                            <div class="col-md-7">
                                <select name="search[month]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                   <option value="" selected disabled>-- Select Month --</option>
                                    <?php 
                                        foreach(config_item('months') as $key => $value){ ?>
                                        <option value="<?php echo $value; ?>"> <?php echo $value; ?> </option>
                                    <?php } ?>                  
                                 </select> 
                            </div>
                        </div>   
                    
                        <div class="form-group">
                            <label class="col-md-2 control-label">Form</label>
                            <div class="input-group date col-md-7" id="datetimepickerFrom">
                                <input type="text" name="date[from]" placeholder="From" class="form-control" >
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>   

                        <div class="form-group">
                            <label class="col-md-2 control-label">To</label>
                            <div class="input-group date col-md-7" id="datetimepickerTo">
                                <input type="text" name="date[to]" placeholder="To" class="form-control" >
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="col-md-2">Status</label>
                            <div class="col-md-7">
                                <select name="search[status]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                    <option value="" selected disabled>-- Select Status --</option>
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approve</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-7">
                                <div class="btn-group pull-right">
                                    <input class="btn btn-primary" type="submit" name="show" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>

<?php if($records != null) {?>

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading none">
                <div class="panal-header-title pull-left">
                    <h1>All Payment</h1>
                </div>
                <a href="#" class="pull-right none" style="margin-top: 0px; font-size: 14px;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
            </div>

            <div class="panel-body">
                <!-- Print banner -->
                <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                
                <span class="hide print-time"><?php echo filter($this->data['name']) . ' | ' . date('Y, F j  h:i a'); ?></span>
            <?php    if($show_search_data){  ?>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Invoice No</th>
                        <th>Name</th>
                        <th>Guardian Mobile</th>
                        <th>ID</th>
                        <th>Roll</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Type</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Amount</th>
                        <th class="none">Action</th>
                    </tr>
                    <?php
                        $total = 0;
                        foreach ($records as $key => $value) {
                            $where = array('student_id' => $value->student_id);
                            $joincond = "admission.student_id = registration.reg_id";
                            $studentInfo = $this->action->joinAndRead('admission','registration',$joincond,$where);
                    ?>
                    <tr>
                        <td class="num-center"><?php echo $key + 1; ?></td>
                        <td class="num-center"><?php echo $value->date; ?></td>
                        <td class="num-center"><?php echo $value->invoice_no; ?></td>
                        <td><?php echo($studentInfo)? filter($studentInfo[0]->name):"Not Find"; ?></td>
                        <td class="num-center"><?php echo $value->guardian_mobile; ?></td>
                        <td class="num-center"><?php echo $value->student_id; ?></td>
                        <td class="num-center"><?php echo($studentInfo)? $studentInfo[0]->roll:"Not Found"; ?></td>
                        <td><?php echo($studentInfo)? $studentInfo[0]->class:"Not Found"; ?></td>
                        <td><?php echo($studentInfo)? $studentInfo[0]->section:"Not Found"; ?></td>
                        <td><?php echo($studentInfo)? strtoupper($studentInfo[0]->type):"Not Found"; ?></td>
                        <td class="num-center"><?php echo $value->year; ?></td>
                        <td><?php echo $value->month; ?></td>
                        <td class="num-center">
                            <?php
                                $where = array(
                                    'student_id' => $value->student_id,
                                    'year'       => $value->year,
                                    'month'      => $value->month
                                );
                                $total_paid = $this->action->read_total('payment','amount',$where);
                                echo $total_paid[0]->amount;
                            ?>
                        </td>
                        <td class="none">
                            
                            <a title="View" class="btn btn-info" target="_blank_" href="<?php echo site_url('payment/payment_singleView?invoice_no='.$value->invoice_no); ?>">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                           
                            
                            
                            <a title="Edit" class="btn btn-primary" target="_blank_" href="<?php echo site_url('payment/payment_edit?invoice_no='.$value->invoice_no); ?>">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <?php $status = $value->status;  ?>
                            <?php if($status == 'pending' ){  ?>
                            <a title="Click to Approve" class="btn btn-warning" onclick="return confirm('Are you sure want to Approve this payment?');" href="<?php echo site_url('payment/receieve_payment/payment_approve?invoice_no='.$value->invoice_no); ?>">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                            <?php }  ?>
                             <?php if($status == 'approved' ){  ?>
                            <a title="Approved" class="btn btn-success">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                             <?php }  ?>
                            <a title="Click to Disapprove" class="btn btn-info" onclick="return confirm('Are you sure want to Disapprove this payment?');" href="<?php echo site_url('payment/receieve_payment/payment_disapprove?invoice_no='.$value->invoice_no); ?>">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </a>
                            <a title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this Payment?');" href="<?php echo site_url('payment/receieve_payment/delete_payment?invoice_no='.$value->invoice_no); ?>" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                        </td>
                        
                    </tr>
                    <?php $total += $total_paid[0]->amount; } ?>
                    <tr>
                        <th colspan="12"><span class="pull-right">Total</span> </th>
                        <th colspan="2" class="block-hide"><?php echo $total; ?> TK</th>
                    </tr>
                </table>
                </div>
                <?php }  ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
<?php } ?>


<script>
     $('#datetimepickerFrom').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#datetimepickerTo').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

