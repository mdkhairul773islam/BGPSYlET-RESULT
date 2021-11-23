<style>
    @media print{
        aside{
            display: none !important;
        }
        nav{
            display: none;
        }
        .panel{
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .none{
            display: none;
        }
        .panel-heading{
            display: none;
        }
        
        .panel-footer{
            display: none;
        }
        .panel .hide{
            display: block !important;
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
    <?php //echo "<pre>"; print_r($info); echo "</pre>"; ?>
    <?php echo $confirmation; ?>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">Show Member</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <h3 class="text-center hide">All Committee Member</h3>

            <div class="panel-body">
                
                <table class="table table-bordered">
                    <tr>
                        <th class="num-center">#</th>
                        <th class="num-center">Date</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Post</th>
                        <th class="num-center">Mobile Number</th>
                        <th class="num-center">Year</th>
                        <th class="none">Action</th>
                    </tr>
                    <?php 
                        foreach ($member_info as $key => $member) { ?>
                    <tr>
                        <td class="num-center"> <?php echo $key+1; ?> </td>
                        <td class="num-center"> <?php echo $member->member_date; ?> </td>
                        <td> <img src="<?php echo base_url($member->member_photo); ?>" width="50px" height="50px" alt=""></td>
                        <td> <?php echo $member->member_full_name; ?> </td>
                        <td> <?php echo ucfirst($member->member_post); ?> </td>
                        <td class="num-center"> <?php echo $member->member_mobile_number; ?> </td>
                        <td class="num-center"> <?php echo $member->member_year_from; ?>-<?php echo $member->member_year_to; ?> </td>
                        <td class="none" style="width: 216px;">
                            <a class="btn btn-info" href="<?php echo site_url('committee/committee/member_profile');?>?id=<?php echo $member->id; ?>"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-warning" href="<?php echo site_url('committee/committee/edit_member') ;?>?id=<?php echo $member->id; ?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-danger" onclick="return confirm('This Data will delete permanently');" href="?delete_token=<?php echo $member->id;?> & img_url=<?php echo $member->member_photo;?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                
                </table>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

