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
        
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title">
                    <div class="pull-left">
                      <label class="btn2"><?php echo caption('Check_All'); ?> &nbsp; <input type="checkbox" name="" id="check-all"/></label>
                      <button form="trash-form" name="restore_all" class="btn1" id="restore-all"><i class="fa fa-undo" aria-hidden="true"></i></button>
                      <button form="trash-form" name="delete_all" class="btn1" id="delete-all"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </div>
                    <h1 class="pull-right"><?php echo caption('Trash'); ?></h1>
                </div>
            </div>


            <div class="panel-body">
                    
                <table class="table table-bordered">
                    <tr>
                        <th><?php echo caption('SL'); ?></th>
                        <th><?php echo caption('Student_ID'); ?></th>
                        <th><?php echo caption('Students_Name'); ?></th>
                        <th><?php echo caption('Class'); ?></th>
                        <th><?php echo caption('Roll'); ?></th>
                        <th><?php echo caption('registration'); ?></th>
                        <th><?php echo caption('GPA'); ?></th>
                        <th><?php echo caption('Date'); ?></th>                        
                        <th class="none"><?php echo caption('Action'); ?></th>
                    </tr>
                
                    <tr ng-repeat="tc in tcInfo">
                        <td>1</td>
                        <td>student id</td>
                        <td>tc name</td>
                        <td>tc class</td>
                        <td>tc roll</td>
                        <td>tc reg</td> 
                         <td>tc gpa</td>                        
                        <td>tc datetime</td>
                        <td class="none" style="width: 130px; text-align: center;">
                            <a class="btn btn-primary" href="<?php echo base_url('')?>" title="restore"><i class="fa fa-undo" aria-hidden="true"></i></a>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this Data?');" href="<?php echo base_url('')?>" title="trash"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </table>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

