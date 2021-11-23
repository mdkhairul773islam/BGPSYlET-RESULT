<div class="container-fluid" ng-controller="allSubjectCtrl">
    <div class="row">
        <?php echo $this->session->flashdata('confirmation');?>
        <div class="panel panel-default none">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>All Subjects</h1>
                </div>
            </div>

            <div class="panel-body">
                <form ng-submit="allsubjectFn()">
                    <div class="row">
                        <div class="col-md-3">
    					    <div class="form-group">
                                <select  ng-model="search.class" class="form-control">
                                    <option value="">Select Class</option>
        						    <?php foreach(config_item('classes') as $key => $value){?>
    								<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
        							<?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
    					    <div class="form-group">
                                <select ng-model="search.group" class="form-control">
                                    <option value="">Select Group</option>
                                    <?php foreach(config_item('group') as $key => $value){?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php } ?>                                        
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                               <select ng-model="search.subject_type" class="form-control">
                                   <option value="">Select Type</option>
                                   <option value="compulsory">Compulsory</option>
                                   <option value="optional">Optional</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="submit" value="Show" name="viewQuery" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>

        <div class="panel panel-default" ng-hide="active" ng-init="active=true">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">Show Result</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()">
                        <i class="fa fa-print"></i> Print
                    </a>
                </div>
            </div>

            <div class="panel-body">
                <!-- Print banner -->
                <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                
                <input type="text" ng-model="searchText" placeholder="Search Here..." style="width:300px;" class="form-control none"> <hr class="none" />       
                <h3 class="text-center hide">All Subjects</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="num-center">Sl</th>
                            <th style="cursor:pointer;" ng-click="sortField='subject_name'; reverse = !reverse;">Subject Name<span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th>Paper</th>
                            <th class="num-center">Subject Code</th>
                            <th>Subject Type</th>
                            <th>Group</th>
                            <th class="num-center" style="cursor:pointer;" ng-click="sortField='written'; reverse = !reverse;">Written<span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th class="num-center" style="cursor:pointer;" ng-click="sortField='objective'; reverse = !reverse;">Objective<span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th class="num-center" style="cursor:pointer;" ng-click="sortField='practical'; reverse = !reverse;">Practical<span class="pull-right"><i class="fa fa-sort" aria-hidden="true"></i></span></th>
                            <th class="num-center">Assignment</th>
                            <th class="num-center">Cleanliness</th>
                            <th class="none">Action</th>
                        </tr>
                        
                        <tr ng-repeat="subject in allSubjects|filter:searchText|orderBy:sortField:reverse">
                            <td class="num-center">{{($index+1)}}</td>
                            <td>{{subject.subject_name}}</td>
                            <td>{{subject.paper}}</td>
                            <td class="num-center">{{subject.subject_code}}</td>
                            <td>{{subject.subject_type}}</td>
                            <td>{{subject.group}}</td>
                            <td class="num-center">{{subject.written}}</td>
                            <td class="num-center">{{subject.objective}}</td>
                            <td class="num-center">{{subject.practical}}</td>
                            <td class="num-center">{{subject.assignment}}</td>
                            <td class="num-center">{{subject.cleanliness}}</td>
                            <!-- <td><?php //if(ck_action('subject_menu', 'edit')){echo 'ok';}else{echo 'no';} ?></td> -->
                            <td class="none" style="width: 150px;">
                                <a class="btn btn-warning"
                                    href="<?php echo base_url('subject/subject/editSubject')?>/{{subject.id}}">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this Data');" 
                                    href="<?php echo base_url('subject/subject/deleteSubject')?>/{{subject.id}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>