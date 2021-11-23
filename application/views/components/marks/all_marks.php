<style>
	.attendance tr th{
		text-align: center;
	}
	.attendance label{
		display: block;
	}

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
		.box-width{
			width: 50%;
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
        .hide{
            display: block !important;
        }
        .title{
            font-size:  25px;
        }
	}

</style>
<div class="container-fluid" ng-controller="AllMarksCtrl">
    <div class="row">
        <div class="panel panel-default none">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>All Marks</h1>
                </div>
            </div>

            <div class="panel-body">
                <form method="post" ng-submit="getMarksFn()" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Exam Name <span class="req">*</span></label>
                            <div class="col-md-5">
                                <select name="exam_id" ng-model="search.exam_id" class="form-control" required>
                                    <option value="" selected> -- Select Exam Name -- </option>
                                    <?php if($exam != null){ foreach($exam as $row){ ?>
                                    <option value="<?php echo $row->exam_id; ?>">
                                        <?php echo $row->title; ?>
                                    </option>
                                    <?php }} ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Class <span class="req">*</span></label>
                            <div class="col-md-5">
                                <select name="class" ng-model="search.class" class="form-control" required >
                                    <option value="">-- Select Class --</option>
                                    <?php foreach(config_item('classes') as $key => $value){ ?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" ng-init="search.year='<?php echo date('Y'); ?>'">
                            <label class="col-md-2 control-label">Year/Session<span class="req">*</span></label>
                            
                            <!--<div class="col-md-5" >
                                <select class="form-control" name="year" ng-model="search.year" required>
                                   <?php foreach ($session_list as $key => $value) { ?>
                                   <option value="<?php echo $value->session; ?>"><?php echo $value->session; ?></option>
                                   <?php } ?>  
			                    </select>
                            </div>-->
                            
                            <div class="col-md-5" ng-if="search.class =='Eleven' || search.class =='Twelve'">
                                <select name="year" ng-model="search.year" class="form-control" required>
                                    <option value="">--Select Session--</option>
                                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                    <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="col-md-5" ng-if="search.class !='Eleven' && search.class !='Twelve'">
                                <select name="year" ng-model="search.year" class="form-control" required>
                                    <option value="">--Select Session--</option>
                                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Subject Name <span class="req">*</span></label>
                            <div class="col-md-5">
                                <select name="subject_name" ng-model="search.subject_name" class="form-control" required>
                                <?php foreach ($allSubject as $key => $value) { ?>
                                        <option value="<?php echo $value->name; ?>">
                                            <?php echo $value->name; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

			            <div class="form-group ">
	                        <label class="col-md-2 control-label">Paper </label>
	                        <div class="col-md-5">
	                            <select name="paper" ng-model="paper" class="form-control">
	                                <option value="" selected>-- Select Paper --</option>
	                                <option value="">None</option>
	                                <option value="1st">1st Paper</option>
	                                <option value="2nd">2nd Paper</option>
	                            </select>
	                        </div>
	                    </div>

    	                <div class="form-group ">
                            <label class="col-md-2 control-label">Section <span class="req">*</span></label>
    
                            <div class="col-md-5">
                                <select name="section" ng-model="search.section" class="form-control" required>
                                    <option value="" selected>-- Select Section--</option>
    								<?php foreach(config_item('section') as $value){ ?>
                 					<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                 					<?php } ?>
                                </select>
                            </div>
    	                </div>

                        <div class="col-md-7">
                            <div class="btn-group pull-right">
                                <input type="submit" value="Show" name="show" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>

            <div class="panel-footer">&nbsp;</div>
        </div>







        <div class="panel panel-default" ng-init="active=true" ng-hide="active" ng-cloak>
        	<div class="panel-heading">
        		 <div class="panal-header-title">
	                    <h1 class="pull-left">Show Result</h1>
	                    <!--a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a-->
	                </div>
        	</div>

        	<div class="panel-body">
                <!-- Print banner -->
                <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                
                <table class="table table-bordered">
                    <tr>
                        <th>date</th>
                        <th ng-click="sort='roll'; reverse=!reverse;">Student ID <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                        <th>Subject Name</th>
                        <th ng-click="sort='objective'; reverse=!reverse;">Objective <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                        <th ng-click="sort='written'; reverse=!reverse;">Written <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                        <th ng-click="sort='practical'; reverse=!reverse;">Practical <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                        <th ng-click="sort='total'; reverse=!reverse;">Total Marks <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                        <th ng-click="sort='point'; reverse=!reverse;">Grade Point <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                        <th>Letter Grade </th>
                        <th>Action</th>
                    </tr>

                    <tr ng-repeat="mark in marks | orderBy:sort:reverse">
                        <td>{{ mark.date }}</td>
                        <td>{{ mark.student_id }}</td>
                        <td>{{ mark.subject }}</td>
                        <td>{{ mark.objective }}</td>
                        <td>{{ mark.written }}</td>
                        <td>{{ mark.practical }}</td>
                        <td>{{ mark.total }}</td>
                        <td>{{ mark.point }}</td>
                        <td>{{ mark.letter }}</td>
                        <td style="width: 50px;">
                            <a class="btn btn-warning" href="<?php echo base_url('marks/marks/editMarks?id={{mark.id}}')?>"><i class="fa fa-pencil-square-o"></i></a>
                        </td>
                    </tr>
                </table>
        	</div>

        	<div class="panel-footer">&nbsp;</div>
        </div>

    </div>
</div>
