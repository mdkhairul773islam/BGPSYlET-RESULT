<style>
	.req{
		color:  #f00;
	}
	.marks-table td{
		padding: 0 !important;
	}
	.marks-table input[type="number"], .marks-table input[type="text"]{
		border-radius: 0;
		border: 1px solid transparent !important;
	}
</style>


<!-- student panel start -->
<div class="col-md-12">

	<div class="row" style="margin:0px -16px 7px -15px;">
		<nav>
		     <ul id="nav" class="slimmenu" style="padding-left:0;">
		     	<li><a href="<?php echo site_url('teacherPanel/dashboard'); ?>">Home</a></li>                                
		        <li><a href="<?php echo site_url('teacherPanel/setMarksC'); ?>">Set Marks</a></li>

		        <li><a href="<?php echo site_url('access/teachers/logout'); ?>">Logout</a></li>
		     </ul>
		</nav>
	</div>
        
        
    <div class="row single search">

        <h3 align="center">Set Marks</h3>

		
		<!-- marks generate -->
        <form action="" class="form-horizontal">
        	
        	<div class="form-group">
                <label class="col-md-2 control-label">Exam Name <span class="req">*</span></label>
                <div class="col-md-5">
                    <select name="exam_name" class="form-control" required>
                       <option value="">-- Select Exam --</option>
                       <option value="Exam_Name">Exam Name</option>
                   </select>
                </div>
            </div>

            <div class="form-group">
            	<label class="col-md-2 control-label">Class <span class="req">*</span></label>
            	<div class="col-md-5">
            		<select name="class" class="form-control" required>
            			<option value="">-- Select Class --</option>
            			<?php 
            				foreach (config_item('classes') as $key => $value) {?>
            					<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
            				<?php	
            				}
            			?>
            		</select>
            	</div>
            </div>

            <div class="form-group">
            	<label class="col-md-2 control-label">Subject <span class="req">*</span></label>
            	<div class="col-md-5">
            		<select name="subject" class="form-control" required>
            			<option value="">-- Select Class --</option>
            			<?php 
            				foreach (config_item('subject') as $key => $value) {?>
            					<optgroup label="Class <?php echo $key; ?>">
									<?php 
										foreach ($value as $skey => $svalue){?>
											<option value="<?php echo $skey; ?>"><?php echo $svalue; ?></option>
										<?php
										}
									?>
            					</optgroup>
            				<?php	
            				}
            			?>
            		</select>
            	</div>
            </div>

            <div class="form-group">
            	<label class="col-md-2 control-label">Subject Type <span class="req">*</span></label>
            	<div class="col-md-5">
            		<select name="subject" class="form-control" required>
	                   <option value="compulsory" selected>Compulsory</option>
	                   <option value="optional">Optional</option>
            		</select>
            	</div>
            </div>

            <div class="col-xs-7" style="margin-bottom: 25px;">
                <input class="pull-right show-btn" type="submit" value="Generate" name="viewQuery" />
            </div>

        </form>

        <br>



        <!-- marks input table -->
        <table class="table table-bordered marks-table">
        	<tr>
        		<th style="width: 50px;">SL</th>
        		<th style="min-width: 150px;">Roll</th>
        		<th>Written</th>
        		<th>Objective</th>
        		<th>Practical</th>
        		<th>Total Marks</th>
        		<th>Grade Point</th>
        		<th>Letter Grade</th>
        	</tr>
        	<tr>
        		<td>1</td>
        		<td>568</td>
        		<td><input type="number" name="written" max="100" min="0" value="0" class="form-control"></td>
        		<td><input type="number" name="objective" max="100" min="0" value="0" class="form-control"></td>
        		<td><input type="number" name="practical" max="100" min="0" value="0" class="form-control"></td>
        		<td><input type="text" value="100" class="form-control" readonly></td>
        		<td><input type="text" value="4.5" class="form-control" readonly></td>
        		<td><input type="text" value="A" class="form-control" readonly></td>

        	</tr>
        </table>
      

		    	
    </div>
</div>
<!-- student panel end -->

