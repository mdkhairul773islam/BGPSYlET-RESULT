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
    echo form_open('stock_reg/stock/update_cost/'.$stock[0]->id, $attribute);
    ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Edit Cost</h1>
                </div>
            </div>

            <div class="panel-body no-padding">
                <!-- Print banner -->
                <img class="img-responsive print-banner hide" src="<?php echo site_url('public/img/banner.png'); ?>">

                <div class="no-title">&nbsp;</div>

                <!-- left side -->
                <div class="col-md-9">                                
                    

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Item Name </label>
                            <div class="col-md-7">
                                <select name="item" class="form-control">
                                  <?php foreach ($stock_field as $key => $value) {?>
                                      <option <?php if($stock[0]->stock_field == str_replace(" ","_",$value->stock_field)){ echo "selected"; }?> value="<?php echo str_replace(" ","_",$value->stock_field); ?>"><?php echo $value->stock_field; ?></option>
                                  <?php } ?>                             
                                 </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Room No  </label>
                            <div class="col-md-7">
                                <select name="room_no" class="form-control">
                                  <?php foreach ($roomList as $key => $value) {?>
                                      <option <?php if($stock[0]->room_no == $value->room){ echo "selected"; }?> value="<?php echo str_replace(" ","_",$value->room); ?>"><?php echo $value->room; ?></option>
                                  <?php } ?>                             
                                 </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Quantity </label>
                            <div class="col-md-7">
                                <input type="text" name="quantity" class="form-control" value="<?php echo $stock[0]->quantity; ?>" placeholder="BDT">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Description </label>
                            <div class="col-md-7">
                               <textarea name="remarks" class="form-control" cols="30" rows="4" placeholder="Enter Description"><?php echo $stock[0]->description; ?></textarea>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-7">
                                <div class="btn-group pull-right">
                                    <input class="btn btn-primary" type="submit" name="" value="Update">
                                    <input class="btn btn-danger" type="reset" value="Clear">
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




