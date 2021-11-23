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
    echo form_open_multipart('', $attribute);
    ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Search Stock Register</h1>
                </div>
            </div>

            <div class="panel-body no-padding">
                <div class="no-title">&nbsp;</div>

                <!-- left side -->
                <div class="col-md-9"> 

                        <div class="form-group">
                            <label for="" class="col-md-3 control-label">Item Name </label>
                            <div class="col-md-7">
                                <select name="search[stock_field]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                  <option value="">-- Select Option --</option>
                                   <?php foreach ($stock_field as $key => $value) {?>
                                     <option value="<?php echo $value->stock_field; ?>"><?php echo $value->stock_field; ?></option>
                                   <?php } ?>                                 
                                 </select> 
                            </div>
                        </div>                               
                    
                        <?php /* ?>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Form</label>
                            <div class="input-group date col-md-7" id="datetimepickerFrom">
                                <input type="text" name="date[from]" placeholder="From" class="form-control" >
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>   

                        <div class="form-group">
                            <label class="col-md-3 control-label">To</label>
                            <div class="input-group date col-md-7" id="datetimepickerTo">
                                <input type="text" name="date[to]" placeholder="To" class="form-control" >
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>  
                        
                        <?php */ ?>

                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-7">
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

<?php if($stock_reg != NULL) {?>

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading none">
                <div class="panal-header-title pull-left">
                    <h1>All Stocks</h1>
                </div>
                <a href="#" class="pull-right none" style="margin-top: 0px; font-size: 14px;" onclick="window.print()">
                    <i class="fa fa-print"></i> Print
                </a>
            </div>

            <div class="panel-body">
                
                <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                <hr class="hide" style="border-bottom: 1px solid #ccc;">

                <span class="hide print-time"><?php echo filter($this->data['name']) . ' | ' . date('Y, F j  h:i a'); ?></span>

                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <!-- <th>Date</th> -->
                        <th>Item Name</th>
                        <th>Room No</th>
                        <th>Quantity </th>
                        <th>Remarks </th>
                        <th class="block-hide" width="115">Action</th>
                    </tr>
                    <?php
                        $total=0;
                        foreach ($stock_reg as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <!-- <td><?php echo $value->date; ?></td> -->
                        <td><?php echo filter($value->stock_field); ?></td>
                        <td><?php echo $value->room_no; ?></td>
                        <td><?php echo $value->quantity; ?></td>
                        <td><?php echo $value->description; ?></td>
                        <td class="none text-center " style="width: 110px;">
                            
                            <?php //if(ck_action('cost_menu', 'edit')){ ?>
                            <a title="edit" class="btn btn-warning" href="<?php echo site_url('stock_reg/stock/edit/'.$value->id);?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <?php //} ?>
                            
                            <?php //if(ck_action('cost_menu', 'delete')){ ?>
                            <a title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this Stock?');" href="<?php echo site_url('stock_reg/stock/delete_stock/'.$value->id);?>" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <?php //} ?>
                        </td>
                    </tr>
                    <?php $total+=$value->quantity; } ?>
                    <tr>
                        <th colspan="3"><span class="pull-right">Total</span> </th>
                        <th ><?php echo $total; ?></th>
                        <th>&nbsp;</th>
                        <th class="block-hide">&nbsp;</th>
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

