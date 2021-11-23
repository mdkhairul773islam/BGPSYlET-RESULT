<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />
<style>
    @media print{
        aside, nav, .none, .panel-heading, .panel-footer, .block-hide {display: none !important;}
        .panel{
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .hide{display: block !important;}
    }
</style>
<div class="container-fluid block-hide">
    <div class="row">
    <?php echo $this->session->flashdata('confirmation'); ?>
    <!-- horizontal form -->
    <?php
        $attribute = array('name' => '','class' => 'form-horizontal','id' => '');
        echo form_open('library/library/store', $attribute);
    ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Add New Book</h1>
                </div>
            </div>

            <div class="panel-body no-padding">
                <div class="no-title">&nbsp;</div>
                <!-- left side -->
                <div class="col-md-9">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Collect Date<span class="req">*</span></label>
                        <div class="input-group date col-md-7" id="datetimepicker1">
                            <input type="text" name="collect_date" class="form-control" value="<?php echo date("Y-m-d"); ?>" required>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Book Name</label>
                        <div class="col-md-7">
                            <input type="text" name="book_name" class="form-control" placeholder="Enter Book Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Author Name</label>
                        <div class="col-md-7">
                            <input type="text" name="author_name" class="form-control" placeholder="Enter Author Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Publication</label>
                        <div class="col-md-7">
                            <input type="text" name="publication" class="form-control" placeholder="Enter Publication Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Type</label>
                        <div class="col-md-7">
                            <input type="text" name="type" class="form-control" placeholder="Enter Type">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Remark </label>
                        <div class="col-md-7">
                           <textarea name="remark" class="form-control" cols="30" rows="4" placeholder="Enter Remark"></textarea>
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <label for="" class="col-md-3 control-label">Rack No</label>
                        <div class="col-md-7">
                            <input type="text" name="rack_no" class="form-control" placeholder="Enter Rack No">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Shelf No</label>
                        <div class="col-md-7">
                            <input type="text" name="shelf_no" class="form-control" placeholder="Enter Shelf No">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Quantity </label>
                        <div class="col-md-7">
                            <input type="number" name="quantity" class="form-control" placeholder="0.00" min="0">
                        </div>
                    </div>-->

                    <div class="form-group">
                        <div class="col-md-10">
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