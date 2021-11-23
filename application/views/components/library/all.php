<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />
<style>
    @media print {
        aside, nav, .none, .panel-heading, .panel-footer, .block-hide {display: none !important;}
        .panel {
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .hide {display: block !important;}
    }
</style>
<div class="container-fluid block-hide">
    <div class="row">
    <?php echo $this->session->flashdata('confirmation'); ?>
    <!-- horizontal form -->
    <?php
        $attribute = array('name' => '','class' => 'form-horizontal','id' => '');
        echo form_open_multipart('', $attribute);
    ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Search Book</h1>
                </div>
            </div>

            <div class="panel-body no-padding">
                <div class="no-title">&nbsp;</div>
                <!-- left side -->
                <div class="col-md-9">
                    
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Book Name</label>
                        <div class="col-md-7">
                            <select name="search[book_name]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                <option value="">-- Select book --</option>
                                <?php foreach ($books as $book) {?>
                                <option value="<?php echo $book->name; ?>"><?php echo $book->name; ?></option>
                                <?php } ?>                                 
                             </select> 
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Author Name</label>
                        <div class="col-md-7">
                            <select name="search[author_name]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                <option value="">-- Select Option --</option>
                                <?php foreach ($authors as $value) {?>
                                <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                <?php } ?>                                 
                             </select> 
                        </div>
                    </div>
                
                    
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Publication</label>
                        <div class="col-md-7">
                            <select name="search[publication]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                <option value="">-- Select Option --</option>
                                <?php foreach ($publications as $value) {?>
                                <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                <?php } ?>                                 
                             </select> 
                        </div>
                    </div>
                
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

                    <div class="form-group">
                        <div class="col-md-10">
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
<?php if($all_book != NULL) {?>
<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading none">
                <div class="panal-header-title pull-left">
                    <h1>All Books</h1>
                </div>
                <a href="#" class="pull-right none" style="margin-top: 0px; font-size: 14px;" onclick="window.print()">
                    <i class="fa fa-print"></i> Print
                </a>
            </div>

            <div class="panel-body">
                <!-- Print banner -->
                <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                
                <hr class="hide" style="border-bottom: 1px solid #ccc;">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Collect Date</th>
                        <th>Book Name</th>
                        <th>Author Name</th>
                        <th>Publication</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th class="none" width="115">Action</th>
                    </tr>
                    <?php if(!empty($all_book)){ foreach ($all_book as $key => $value) { ?>
                    <tr>
                        <th><?php echo $key + 1; ?></th>
                        <th><?php echo $value->collect_date; ?></th>
                        <th><?php echo $value->book_name; ?></th>
                        <th><?php echo $value->author_name; ?></th>
                        <th><?php echo $value->publication; ?></th>
                        <th><?php echo $value->type; ?></th>
                        <th><?php echo $value->status; ?></th>
                        <td class="none text-center">
                            <a title="edit" class="btn btn-warning" href="<?php echo site_url('library/library/edit/'.$value->id);?>" >
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this Book?');"
                                href="<?php echo site_url('library/library/delete/'.$value->id);?>" >
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <?php }} ?>
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