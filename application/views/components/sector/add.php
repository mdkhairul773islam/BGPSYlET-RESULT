<div class="container-fluid">
    <div class="row">
        <?php echo $this->session->flashdata('confirmation'); ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Add New Purpose</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php
                $attr = array("class" => "form-horizontal");
                echo form_open("", $attr);
                ?>

                <div class="form-group">
                    <label class="col-md-2 control-label">
                        Name
                        <span class="req">*</span>
                    </label>

                    <div class="col-md-5">
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-2 control-label">
                        Amount
                        <span class="req">*</span>
                    </label>

                    <div class="col-md-5">
                        <input type="number" name="amount" class="form-control" required>
                    </div>
                </div>


                <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" value="Save" name="add" class="btn btn-primary">
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>

        <?php if($sectorInfo != null){ ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>All Purpose</h1>
                </div>
            </div>

            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="50">SL</th>
                        <th>Name </th>
                        <th>Amount</th>
                        <th width="120">Action</th>
                    </tr>

                    <?php foreach($sectorInfo as $key => $row) { ?>
                    <tr>
                        <td><?php echo ($key + 1); ?></td>
                        <td><?php echo  ucwords(str_replace("_"," ", $row->name)); ?></td>
                        <td><?php echo $row->amount; ?></td>
                        <td>
                            <a href="<?php echo site_url('payment/payment_sector/edit/' . $row->id); ?>" class="btn btn-info">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>

                            <a href="<?php echo site_url('payment/payment_sector/delete?id=' . $row->id); ?>" onclick="return confirm('Are You Sure Want to Delete this Sector?');" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
        <?php } ?>
    </div>
</div>
