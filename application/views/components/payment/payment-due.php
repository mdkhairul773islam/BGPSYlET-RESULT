<style>
    @media print{
        aside, nav, .none, .panel-heading, .panel-footer { display: none !important; }
        .panel {
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .hide{display: block !important;}
        .panel-body {height: 96vh;}
    }
    .title {font-family: "Algerian Condensed", Times, serif;}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default ">
            <div class="panel-heading none">
                <div class="panal-header-title">
                    <h1 class="pull-left">Payment Due</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <div class="panel-body none">
                <?php echo form_open(); ?>
                
                <div class="row">
                    <div class="col-md-4">
                        <select name="student_id" class="form-control select2">
                            <option value="" selected>-- Select Student --</option>
                            <?php
                            if(!empty($allStudent)){
                                foreach($allStudent as $option){
                                    echo '<option value="'.$option->reg_id.'">'. $option->reg_id .' - '. $option->name .'</option>';
                                }
                            } ?>
                        </select>
                    </div>
                    
                    <div class="col-md-3">
                        <select name="year" class="form-control">
                            <option value="" selected>-- Select Year --</option>
                            <?php 
                                for($i = (date('Y') + 1); $i >= 2019; $i--){
                                    echo '<option value="'.$i.'" '.($i == date('Y') ? "selected" : "").'>'. $i .'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="submit" name="show" value="Search" class="btn btn-primary">
                    </div>
                </div>
                
                <?php echo form_close(); ?>
            </div>
            
            <hr class="none" style="margin: 5px">

            <div class="panel-body" style="font-family:'Times New Roman';">
                
                <div class="row banner">
                    <!--<div class=" col-xs-12" style="">
                        <img src="<?php //echo base_url($banner[0]->path);?>" >
                    </div>-->
                </div>
                
                <?php if(!empty($result['info'])) { ?>
                <div class="row">
                    <div class="col-xs-6">
                        <p>Name: <?php echo $result['info']->name; ?></p>
                        <p>Class: <?php echo $result['info']->class; ?> </p>
                        <p>Secion: <?php echo $result['info']->section; ?> </p>
                    </div>
                    
                    <div class="col-xs-6">
                        <p>Session: <?php echo $result['info']->session; ?> </p>
                        <p>Type: <?php echo $result['info']->type; ?> </p>
                        <p>SID: <?php echo $result['info']->student_id; ?> </p>
                    </div>
                </div>
                <?php } ?>
                
                <?php if(!empty($result['records'])) { ?>
                <table class="table table-bordered">
                    <tr>
                        <th width="30">Sl</th>
                        <th>Field of Payment</th>
                        <th>Month</th>
                        <th>Amount <small>(Tk)</small></th>
                        <th>Paid <small>(Tk)</small></th>
                        <th>Due <small>(Tk)</small></th>
                    </tr>
                    
                    <?php 
                    $totalAmount = $totalPaid = 0;
                    foreach($result['records'] as $key => $row){
                        $totalAmount += $row['amount'];
                        $totalPaid   += $row['paid'];
                    ?>
                    <tr>
                        <td><?php echo ++$key; ?></td>
                        <td><?php echo filter($row['field_name']); ?></td>
                        <td><?php echo filter($row['month']); ?></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td><?php echo $row['paid']; ?></td>
                        <td><?php echo $row['due']; ?></td>
                    </tr>
                    <?php } ?>
                    
                    <tr>
                        <th colspan="3" class="text-right">Total</th>
                        <th><?php echo $totalAmount; ?> <small>(Tk)</small></th>
                        <th><?php echo $totalPaid; ?> <small>(Tk)</small></th>
                        <th><?php echo ($totalAmount - $totalPaid); ?> <small>(Tk)</small></th>
                    </tr>
                </table>
                <?php } ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<script type="text/javascript">
    $(".select2").select2();
</script>