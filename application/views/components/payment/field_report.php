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
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Field of Payment</label>
                        <div class="col-md-6">
                            <select name="search[field]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                <option value="" selected disabled>-- Select Field --</option>
                                <?php
                                if ($allfields != null) {
                                    foreach($allfields as $key => $value){?>
                                    <option value="<?php echo $value->field_name; ?>"><?php echo $value->field_name; ?></option>
                                    <?php
                                } }
                                ?>                             
                            </select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Month</label>
                        <div class="col-md-6">
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
                        <label for="" class="col-md-3 control-label">Year</label>
                        <div class="col-md-6">
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
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <input class="btn btn-primary" type="submit" name="show" value="Search">
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
                    <h1>All Fields of Payment</h1>
                </div>
                <a class="pull-right none" href="" style="margin-top: 0px; font-size: 14px;" onclick="window.print()">
                    <i class="fa fa-print"></i> Print
                </a>
            </div>

            <div class="panel-body">
                <!-- Print banner -->
                <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                
                <span class="hide print-time"><?php echo filter($this->data['name']) . ' | ' . date('Y, F j  h:i a'); ?></span>

                <table class="table table-bordered">
                    <tr>
                        <th class="num-center">SL</th>
                        <th>Field Name</th>
                        <th class="num-center">Amount</th>
                        
                    </tr>
                    <?php
                        $total = 0;
                        foreach ($records as $key => $value) {
                           
                    ?>
                    <tr>
                        <td class="num-center"><?php echo $key + 1; ?></td>
                        <td><?php echo $value->field; ?></td>
                        
                        <td class="num-center">
                            <?php
                                
                                $where = array('field' => $value->field,'status'=> 'approved' );
                                $total_paid = $this->action->read_total('payment','amount',$where);
                                echo $total_paid[0]->amount;
                            ?>
                        </td>
                        
                    </tr>
                    <?php $total += $total_paid[0]->amount; } ?>
                    <tr>
                        <th colspan="2"><span class="pull-right">Total</span> </th>
                        <th><center><?php echo $total; ?> TK </center></th>
                    </tr>
                </table>
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

