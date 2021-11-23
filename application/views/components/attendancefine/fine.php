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
    .req {color: #f10; font-weight: bold;}
</style>
<?php echo $this->session->flashdata('confirmation'); ?>
<div class="panel panel-default none">
    <div class="panel-heading">
        <div class="panal-header-title pull-left">
            <h1>Set Fine</h1>
        </div>
    </div>

    <div class="panel-body">
        <!-- horizontal form -->
        <?php $attribute = array('class' => 'form-horizontal' );
            echo form_open('', $attribute);
        ?>

        <!-- <div class="form-group">
            <label for="" class="col-md-2 control-label">Year <span class="req">*</span></label>
            <div class="col-md-5">
                <input type="text" name="year" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-md-2 control-label">Month <span class="req">*</span></label>
            <div class="col-md-5">
                <input type="text" name="month" class="form-control" required>
            </div>
        </div> -->

        <div class="form-group">
            <label for="" class="col-md-2 control-label">Class <span class="req">*</span></label>
            <div class="col-md-5">
                <select name="class" class="form-control" required>
                    <option value="" selected disabled>Select</option>
                    <?php foreach (config_item('classes') as $value) { ?>
                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-md-2 control-label">Fine <span class="req">*</span></label>
            <div class="col-md-5">
                <input type="number" name="fine" class="form-control" step="any" required>
            </div>
        </div>

        <div class="col-md-7">
            <div class="btn-group pull-right">
                <input class="btn btn-primary" type="submit" name="save" value="Save">
            </div>    
        </div>
        <?php echo form_close(); ?>
    </div>
    <div class="panel-footer">&nbsp;</div>
</div>

<?php if($allFines != NULL) { ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panal-header-title">
            <h1 class="pull-left">Class Wise Fine List</h1>
            <a href="#" class="pull-right" style="margin-top: 0px; font-size: 14px;" onclick="window.print()">
                <i class="fa fa-print"></i> Print
            </a>
        </div>
    </div>

    <div class="panel-body">

        <!-- Print banner -->
        <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">

        <table class="table table-bordered">
            <tr>
                <th width="60" class="num-center">SL</th>
                <th>Class</th>
                <th width="140" class="num-center">Fine</th>
            </tr>
            <?php foreach($allFines as $key => $value){?>
            <tr>
                <td class="num-center"><?php echo $key+1; ?></td>
                <td><?php echo filter($value->class);?></td>
                <td class="num-center"><?php echo $value->fine; ?></td>
            </tr>
            <?php }?>

        </table>
    </div>
    <div class="panel-footer">&nbsp;</div>
<?php } ?>
</div>
