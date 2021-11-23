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
    echo form_open_multipart('', $attribute);
    ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Search Cost</h1>
                </div>
            </div>

            <div class="panel-body no-padding">
                <div class="no-title">&nbsp;</div>

                <!-- left side -->
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Year</label>
                        <div class="col-md-7">
                            <select name="year" class="form-control">
                                <option value="" selected disabled>&nbsp;</option>
                                <?php for($start=2018;$start<=date('Y');$start++) { ?>
                                <option value="<?php echo $start; ?>"><?php echo $start; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-7">
                            <div class="btn-group pull-right">
                                <input class="btn btn-primary" type="submit" name="show" value="Show">
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



<?php if(count($resultset) > 0) { ?>
<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading none">
                <div class="panal-header-title pull-left">
                    <h1>Cost Report</h1>
                </div>

                <a href="#" class="pull-right none" style="margin-top: 0px; font-size: 14px;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
            </div>

            <div class="panel-body">
                <!-- Print banner -->
                <!-- img class="img-responsive print-banner hide" src="<?php //echo site_url('public/img/banner.jpg'); ?>" --> 
                
                <div class="view-profile" style="margin-bottom: 20px; height: 100px;">
                    <!--<div class="col-xs-2">
                        <figure class="pull-left">
                            <img class="img-responsive" src="<?php echo site_url('public/logo/logo.png'); ?>" style="width: 100px; height: 100px;" alt="">
                        </figure>
                    </div>-->
    
                    <div class="col-xs-12">
                        <!--<div class="institute">-->
                            <!--<h2 class="text-center title" style="margin-top: 10; font-weight: bold;">Border Guard Public School and College</h2>
                            <h3 class="text-center" style="margin: 0;">MYMENSINGH</h3>-->
                            

                        <!--</div>-->
                        <img class="img-responsive" src="<?php echo site_url($banner[0]->path); ?>" style="width: 100%;" alt="">
                    </div>
                 </div>

                <h3 class="hide text-center">Yearly Expenditure <?php echo date('Y'); ?></h3>

                <span class="hide print-time text-center" style="margin-bottom: 5px;"><?php echo filter($this->data['name']) . ' | ' . date('Y, F j  h:i a'); ?></span>

                <table class="table table-bordered">
                    <tr>
                        <th class="num-center">SL</th>
                        <th>Field</th>
                        <th class="num-center">Jan</th>
                        <th class="num-center">Feb</th>
                        <th class="num-center">Mar</th>
                        <th class="num-center">Apr</th>
                        <th class="num-center">May</th>
                        <th class="num-center">Jun</th>
                        <th class="num-center">Jul</th>
                        <th class="num-center">Aug</th>
                        <th class="num-center">Sep</th>
                        <th class="num-center">Oct</th>
                        <th class="num-center">Nov</th>
                        <th class="num-center">Dec</th>
                        <th class="num-center">Total</th>
                    </tr>

                    <?php 
                    $sum = 0.00;
                    $allMonths = config_item('months');
                    foreach ($resultset as $row) { 
                    ?>
                    <tr>
                        <th class="num-center"><?php echo $row['sl']; ?></th>
                        <th><?php echo filter($row['field']); ?></th>
                        <?php 
                        foreach ($row['details'] as $month) { 
                            foreach ($allMonths as $value) {
                                if($month['month'] == $value) {
                                    $key = strtolower($value);
                                    $totalRec[$key] += $month['amount'];
                                }
                            }
                        ?>
                        <td class="num-center"><?php echo $month['amount']; ?></td>
                        <?php } ?>
                        
                        <td class="num-center"><?php echo $row['total'];$sum += $row['total']; ?></td>
                    </tr>
                    <?php } ?>

                    <tr>
                        <th class="num-center" colspan="2" class="text-right">Total</th>
                        <?php foreach ($totalRec as $key => $value) { ?>
                        <th  class="num-center"><?php echo $value; ?></th>
                        <?php } ?>

                        <th class="num-center"><?php echo $sum; ?></th>
                    </tr>
                </table>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
<?php } ?>

