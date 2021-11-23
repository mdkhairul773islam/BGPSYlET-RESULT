<style>
    .table .btn {padding: 5px 10px !important;}
    .table tr th {cursor: pointer;}
    .table tr th,
    .table tr td {
        padding: 8px 6px;
        font-size: 13px;
    }
	@media print{
		aside, nav, .panel-heading, .panel-footer, .none {display: none !important;}
		.panel{
			border: 1px solid transparent;
			left: 0px;
			position: absolute;
			top: 0px;
			width: 100%;
		}
        .hide {display: block !important;}
	}
</style>
<div class="container-fluid" ng-controller="ShowAllStudentCtrl" ng-cloak>
    <div class="row">
    <?php echo $this->session->flashdata('confirmation');?>

        <div class="panel panel-default none">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>All Student</h1>
                </div>
            </div>

            <div class="panel-body">
                <form ng-submit="getAllStudentsFn()">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="class" ng-model="class" class="form-control">
                                    <option value="">Select Class</option>
                                    <?php foreach(config_item('classes') as $key => $value){ ?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group" ng-if="class =='Eleven' || class =='Twelve'">
                                <select name="session" class="form-control">
                                    <option value="">Select Session</option>
                                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                    <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group" ng-if="class !='Eleven' && class !='Twelve'">
                                <select name="session" class="form-control">
                                    <option value="">Select Session</option>
                                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="section" ng-model="section" class="form-control">
                                    <option value="">Select Section</option>
                                    <?php foreach(config_item('section') as $key => $value){ ?>
                                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="group" ng-model="group" class="form-control">
                                    <option value="">Select Group</option>
                                    <option value="none">None</option>
                                    <option value="Science">Science</option>
                                    <option value="Humanities">Humanities</option>
                                    <option value="Business-Studies">Business Studies</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
						    <div class="form-group">
								<select name="type" ng-model="type" class="form-control">
								    <option value="">Select Type</option>
								    <?php foreach (config_item('type') as $key => $value) { ?>
								    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php } ?>
								</select>
							</div>
						</div>
						
						<div class="col-md-3">
						    <div class="form-group">
								<input type="text" name="reg_id" ng-model="reg_id" class="form-control" placeholder="Student ID">
							</div>
						</div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="submit" value="Show" name="viewQuery" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
        
        <div ng-cloak class="panel panel-default"  ng-hide="active" ng-init="active=true">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">All Students</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()">
                        <i class="fa fa-print"></i> Print
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <img class="img-responsive" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                <hr style="border-bottom: 1px solid #ccc;" class="none">
                <input type="text" ng-model="searchText" placeholder="Search Here.." class="form-control none" style="width: 250px !important;">
                <hr style="border-bottom: 1px solid #ccc;">
                <h3 class="text-center hide">All Student</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th ng-click="sortField='id'; reverse = !reverse;">Sl<span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th>Photo</th>
                            <th ng-click="sortField='student_id'; reverse = !reverse;"> Student's ID <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th ng-click="sortField='student_id'; reverse = !reverse;">Roll No <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th ng-click="sortField='first_name'; reverse = !reverse;">Student's Name <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th ng-click="sortField='student_mobile'; reverse = !reverse;">Mobile <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th style="width: 130px;" ng-click="sortField='father_name'; reverse = !reverse;">Father's Name <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th ng-click="sortField='class'; reverse = !reverse;">Class <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th ng-click="sortField='section'; reverse = !reverse;">Section <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th ng-click="sortField='group'; reverse = !reverse;">Group <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th ng-click="sortField='session'; reverse = !reverse;">Year/ Session <span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th class="none" width="130" >Action</th>
                        </tr>
                        
                        <tr ng-repeat="student in allStudents | filter:searchText | orderBy:sortField:reverse">
                            <td class="num-center">{{$index+1}}</td>
                            <td><img ng-src="<?php echo site_url('public/students');?>/{{student.photo}}" width="40px" height="40px" style="object-fit: cover;" alt=""></td>
                            <td>{{student.student_id}}</td>
                            <td>{{student.roll}}</td>
                            <td>{{student.name}}</td>
                            <td>{{student.student_mobile}}</td>
                            <td>{{student.father_name}}</td>
                            <td>{{student.class}}</td>
                            <td>{{student.section}}</td>
                            <td>{{student.group}}</td>
                            <td>{{student.session}}</td>
                            <td class="none">
                                <a class="btn btn-info" href="<?php echo base_url('registration/registration/profile')?>/{{student.student_id}}"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-warning" href="<?php echo base_url('registration/registration/editStudent')?>/{{student.student_id}}"><i class="fa fa-pencil-square-o"></i></a>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this Data?');" href="<?php echo base_url('registration/registration/deleteStudent')?>/{{student.student_id}}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
