<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation; ?>

        <div class="panel panel-default">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>All Feedbacks</h1>
                </div>
            </div>

            <div class="panel-body">
                
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                <?php foreach ($feedbackInfo as $key => $value) { ?>
                    <tr>
                        <td><?php echo $key+1; ?> </td>
                        <td><?php echo $value->date; ?> </td>
                        <td><?php echo $value->name; ?></td>
                        <td><?php echo $value->mobile; ?></td>
                        <td><?php echo $value->subject; ?></td>

                        <td style="width: 160px;">
                            <a class="btn btn-info" href="<?php echo base_url('feedback/feedback/view')?>?id=<?php echo $value->id; ?>"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');" href="?id=<?php echo $value->id; ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </table>

            </div>
            <div class="panel-footer">&nbsp;</div>

        </div>
    </div>
</div>

