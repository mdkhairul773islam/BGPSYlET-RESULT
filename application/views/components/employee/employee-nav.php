
<div class="container-fluid none" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">
		<?php if(ck_action("employee_menu","add-new")){ ?>	
    		<a href="<?php echo site_url('employee/employee'); ?>" class="btn btn-default" id="add-new">
    			Add Employee
    		</a>
    	 <?php } ?>	
        
        <?php if(ck_action("employee_menu","all")){ ?>	
    		<a href="<?php echo site_url('employee/employee/show_employee'); ?>" class="btn btn-default" id="all">
    			 All Employee
    		</a>
		<?php } ?>
        
        <?php if(ck_action("employee_menu","attendance")){ ?>	
    		<a href="<?php echo site_url('employee/attendance'); ?>" class="btn btn-default" id="attendance">
    			 Employee Attendance
    		</a>
		<?php } ?>	
    </div>
</div>
