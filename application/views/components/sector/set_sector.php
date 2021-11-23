<div class="container-fluid">
    <div class="row">
        <?php echo $this->session->flashdata('confirmation'); ?>

        <div class="panel panel-default" ng-controller="setSectorCtrl" ng-cloak>
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Set Purpose </h1>
                </div>
            </div>

            <div class="panel-body">
                <?php
                $attr = array("class" => "form-horizontal");
                echo form_open("", $attr);
                ?>

                <div class="form-group">
                    <label class="col-md-2 control-label">
                       Class Name
                        <span class="req">*</span>
                    </label>

                    <div class="col-md-5">    
                    <select name="class" class="form-control" ng-change="set_sector(class)" ng-init="class=''" ng-model="class"  required>
                        <option value="">-- Select Class --</option>                                        
                        <?php 
                            foreach(config_item('classes') as $key => $value){?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php
                            }
                        ?>
                    </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-2 control-label">
                       Purpose Names
                        <span class="req">*</span>
                    </label>
                    <div class="col-md-5">
                        <ul>
                        	<li ng-repeat="(key,row) in sectors">
                        	    <input type="checkbox" name="name[]" id="sector{{row.id}}"  ng-checked="isChecked(purpose[key],row.name)" value="{{row.name}}" > 
                        	    <label for="sector{{row.id}}">&nbsp;{{row.name | textBeautify }}</label>
                        	</li>
                        </ul>
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
       
    </div>
</div>
