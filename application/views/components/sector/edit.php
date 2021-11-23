<style>
    .attendance tr th{
        text-align: center;
    }
    .attendance label{
        display: block;
    }
    .exam td{
        padding:  0 !important;
    }
    .exam input[type="text"], input[type="number"]{
        border: 1px solid transparent;
    }
    .td-width{
        width:  10%;
    }
</style>

<div class="container-fluid" ng-controller="EditExamCtrl">
    <div class="row">
        <?php echo $this->session->flashdata('confirmation'); ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Update Purpose</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php
                $attr = array("class" => "form-horizontal");
                echo form_open("payment/payment_sector/edit/" . $sectorInfo[0]->id , $attr);
                ?>

                <div class="form-group">
                    <label class="col-md-2 control-label">
                        Name
                        <span class="req">*</span>
                    </label>

                    <div class="col-md-5">
                        <input type="text" name="name" value="<?php echo str_replace("_"," ", $sectorInfo[0]->name);?>" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-2 control-label">
                        Amount
                        <span class="req">*</span>
                    </label>

                    <div class="col-md-5">
                        <input type="number"  value="<?php echo $sectorInfo[0]->amount;?>" name="amount" class="form-control" required style="border: 1px solid #ccc !important;">
                    </div>
                </div>


                <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" value="Save" name="update" class="btn btn-primary">
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>



