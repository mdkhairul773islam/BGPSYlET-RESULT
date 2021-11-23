<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />

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
        echo form_open('stock_reg/stock/add_new_stock', $attribute);
        ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>New Stock Register</h1>
                </div>
            </div>

            <div class="panel-body no-padding">
                <div class="no-title">&nbsp;</div>
                <!-- left side -->
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Item</label>
                        <div class="col-md-7">
                            <select name="item" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                <option value="" selected disabled>Select Item Name</option>
                                <?php foreach ($stock_fields as $key => $value) {?>
                                <option value="<?php echo $value->stock_field; ?>"><?php echo $value->stock_field; ?></option>
                                <?php } ?>                             
                            </select> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Room No</label>
                        <div class="col-md-7">
                            <select name="room_no" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                <option value="" selected disabled>Select Room No</option>
                                <?php foreach ($room_no as $key => $value) {?>
                                <option value="<?php echo $value->room; ?>"><?php echo $value->room; ?></option>
                                <?php } ?>                             
                            </select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Quantity </label>
                        <div class="col-md-7">
                            <input type="number" name="quantity" class="form-control" min="0" placeholder="Enter Item Quantity">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Remarks </label>
                        <div class="col-md-7">
                           <textarea name="remarks" class="form-control" cols="30" rows="4" placeholder="Enter Remarks"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-7">
                            <div class="btn-group pull-right">
                                <input class="btn btn-primary" type="submit" name="save" value="Save">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>