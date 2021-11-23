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
        .title{
            font-size: 25px;
        }
    }
</style>

<div class="container-fluid">
    <div class="row" ng-controller="allTestimonialController">   
    <?php echo $this->session->flashdata("confirmation"); ?>
        <div class="panel panel-default none">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1><?php echo caption('All_testimonials'); ?></h1>
                </div>
            </div>

            <div class="panel-body">
                <?php
                    $attr=array("class"=>"form-horizontal");
                    echo form_open("",$attr);
                ?>

                <div class="form-group">
                    <label class="col-md-2 control-label"><?php echo caption('Student_ID'); ?> <span class="req">*</span></label>
                    <div class="col-md-5">
                        <input type="text" name="student_id" ng-keyup="getTCinfoFn()" ng-model="student_id" class="form-control">
                    </div>
                </div>                  
               
                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>



        <div class="panel panel-default" ng-hide="active" ng-init="active=true;" ng-cloak>
            <div class="panel-heading">
                <div class="panal-header-title ">
                    <h1 class="pull-left"><?php echo caption('Show_Result'); ?></h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> <?php echo caption('Print'); ?></a>
                </div>
            </div>


            <div class="panel-body">
                <div class="col-xs-2">
            		<figure class="pull-left">
            			<img class="img-responsive" src="<?php echo site_url('public/logo/logo.png'); ?>" style="width: 100px; height: 100px;" alt="">
            		</figure>
            	</div>

            	<div class="col-xs-10">
					<div class="institute">
						<h2 class="text-center title" style="margin-top: 10; font-weight: bold;">Border Guard Public School and College</h2>
                        <h3 class="text-center" style="margin: 0;">MYMENSINGH</h3>
					</div>
				</div>

                <div class="col-xs-12">
                <hr style="border-bottom: 1px solid #ccc;">
                <h4 class="hide text-center" style="margin: 0px 0 20px 0;"><?php echo caption('All_testimonials'); ?></h4>
                </div>
                
                <table class="table table-bordered">
                    <tr>
                        <th class="num-center"><?php echo caption('SL'); ?></th>
                        <th class="num-center"><?php echo caption('Student_ID'); ?></th>
                        <th><?php echo caption('Students_Name'); ?></th>
                        <th><?php echo caption('Class'); ?></th>
                        <th class="num-center"><?php echo caption('Date'); ?></th>                        
                        <th class="none"><?php echo caption('Action'); ?></th>
                    </tr>
                
                    <tr ng-repeat="tc in tcInfo">
                        <td class="num-center">{{$index+1}}</td>
                        <td class="num-center">{{tc.student_id}}</td>
                        <td>{{tc.name}}</td>
                        <td>{{tc.class}}</td>                       
                        <td class="num-center">{{tc.datetime}}</td>
                        <td class="none" style="width: 165px;">
                            
                            <a target="_blank" class="btn btn-primary" href="<?php echo site_url('testimonial/certificate/{{tc.student_id}}');?>">প্রশংসাপত্র</i></a>
                            <?php if(ck_action('testimonial', 'view')){ ?>
                            <a target="_blank" class="btn btn-primary" href="<?php echo site_url('testimonial/profile/{{tc.student_id}}');?>">প্রত্যয়ন পত্র</a>
                            <?php } ?>
                            <?php if(ck_action('testimonial', 'edit')){ ?>
                            <a class="btn btn-warning" href="<?php echo site_url('testimonial/edit/{{tc.student_id}}') ;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <?php } ?>
                            
                            <?php if(ck_action('testimonial', 'delete')){ ?>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure want to delete this Testimonial?');" href="<?php echo site_url('testimonial/deleteTC/{{tc.student_id}}');?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <?php } ?>
                        </td>
                    </tr>
                </table>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

