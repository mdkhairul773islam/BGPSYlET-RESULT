<style>
    @media print{
        aside,nav,.none,.panel-heading,.panel-footer {display: none !important;}
        .panel {
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .panel .hide {display: block !important;}
        .title {font-size: 25px;}
    }
</style>

<div class="container-fluid">
    <div class="row">   
    <?php echo $this->session->flashdata("confirmation"); ?>
        <div class="panel panel-default none">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>All Testimonials</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php
                    $attr=array("class"=>"form-horizontal");
                    echo form_open("",$attr);
                ?>
                <div class="form-group">
                    <label class="col-md-2 control-label">Student Roll </label>
                    <div class="col-md-5">
                        <input type="text" name="roll" class="form-control">
                    </div>
                    <div class="col-md-1">
                        <input type="submit" name="search" value="Search" class="btn btn-primary">
                    </div>
                </div>                  
               
                <?php echo form_close(); ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title ">
                    <h1 class="pull-left">Show Result</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i>Print</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-xs-12">
                <!--<img class="img-responsive" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">-->
                <hr style="border-bottom: 1px solid #ccc;">
                <h4 class="hide text-center" style="margin: 0px 0 20px 0;">All testimonials</h4>
                </div>
                
                <table class="table table-bordered">
                    <tr>
                        <th class="num-center">SL</th>
                        <th class="num-center">Roll</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th class="num-center">Date</th>                        
                        <th width="80px" class="none">Action</th>
                    </tr>
                    <?php foreach($students as $key => $testimonial){ ?>
                        <tr>
                        <td class="num-center"><?php echo($key+1); ?></td>
                        <td class="num-center"><?php echo $testimonial->roll; ?></td>
                        <td><?php echo $testimonial->name; ?></td>
                        <td><?php echo $testimonial->year; ?></td>                       
                        <td class="num-center"><?php echo $testimonial->date; ?></td>
                        <td class="none">
                            <a target="_blank" class="btn btn-primary" href="<?php echo site_url('testimonial/certificate_show/'.$testimonial->roll);?>">View</i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

