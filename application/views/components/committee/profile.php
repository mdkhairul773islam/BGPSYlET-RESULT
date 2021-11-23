
<style>
    @media print{
        aside{
            display: none !important;
        }
        nav{
            display: none;
        }
        .none{
            display: none;
        }
        .panel{
            border: 1px solid transparent;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
        }
        .panel-heading{
            display: none;
        }
        .panel-footer{
            display: none;
        }
        .hide{
            display: block !important;
        }
        .title{
            font-size: 25px;
        }
    }

</style>

<div class="container-fluid">
    <div class="row">
    <?php //echo "<pre>"; print_r($member_info); echo "</pre>"; ?>
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title">
                    <h1 class="pull-left">Profile View</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <div class="panel-body">
               
                <div class="row">

                    <div class="view-profile">
                        <div class="col-xs-2">
                            <figure class="pull-left">
                                <img class="img-responsive" src="<?php echo site_url('public/logo/logo.png'); ?>" style="width: 100px; height: 100px;" alt="">
                            </figure>
                        </div>

                        <div class="col-xs-8">
                            <div class="institute">
                                <h2 class="text-center title" style="margin-top: 10; font-weight: bold;">Border Guard Public School and College</h2>
                                <h3 class="text-center" style="margin: 0;">MYMENSINGH</h3>
                            </div>
                        </div>
                                
                        <div class="col-xs-2">
                            <figure class="pull-right">
                                <img class="img-responsive" src="<?php echo site_url($member_info[0]->member_photo); ?>" style="width: 100px; height: 100px;" alt="Photo not found!" class="img-responsive">
                            </figure>
                        </div>

                    </div>

                </div>

                <hr style="border-bottom: 1px solid #ccc;">

                <div class="row">

                    <h3 class="hide text-center" style="margin: 0 0 20px 0;">Committee Member Information</h3>
            
                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Full Name</label>
                        <div class="col-xs-6">
                            <p><?php echo $member_info[0]->member_full_name; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Post</label>
                        <div class="col-xs-6">
                            <p><?php echo $member_info[0]->member_post; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Year</label>
                        <div class="col-xs-6">
                            <p><?php echo $member_info[0]->member_year_from."-".$member_info[0]->member_year_to; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Mobile Number</label>
                        <div class="col-xs-6">
                            <p><?php echo $member_info[0]->member_mobile_number; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Address</label>
                        <div class="col-xs-6">
                            <p><?php echo $member_info[0]->member_address; ?></p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

