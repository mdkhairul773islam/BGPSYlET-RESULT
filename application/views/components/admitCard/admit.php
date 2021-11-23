<style>
    .student-table{
        width: 100%;
        margin-bottom: 15px;
    }
    .student-table tr th{
        width:60px;
        border:0 !important;
    }
    .student-table tr td{
        padding: 2px 0;
        text-align:left !important;
        border:0 !important;
    }

    .instruction ul li{
        padding-left: 15px;
        margin-bottom: 10px;
    }
    .instruction ul li i{
        font-size: 8px;
    }
    .brack{
        border:1px solid #000;
    }
    .student-table {
        font-family: "Times New Roman", Times, serif;
    }
    .title {font-family: "Algerian Condensed", Times, serif;}
    @media print {
        .admitArea {
            width: 40% !important;
            height: 50vh;
        }
        .admitArea + div {margin: 0;}
        aside,nav,.none,.panel-heading,.panel-footer {display: none !important;}
        .panel {
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .panel .hide {display: block !important;}
        .admit_card {
            border: 1px solid transparent;
            position: relative;
            height: 100vh;
            width: 100%;
            margin-top: -60px;
        
        }
        .title {font-size: 25px;}
        .col-sm-6 {
            width: 50% !important;
            float: left;
        }
    }
</style>

<div class="container-fluid">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Admit Card</h1>
                </div>
            </div>

            <div class="panel-body none">
                <?php
	                $attr=array('class'=>'form-horizontal');
	                echo form_open('',$attr);
                ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Class <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="search[class]" ng-model="class" class="form-control" required>
                                <option value="">Select Class</option>
                                <?php foreach (config_item('classes') as $key => $value) {?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Session <span class="req">*</span></label>
                        <div class="col-md-5">
                            <div ng-if="class =='Eleven' || class =='Twelve'">
                                <select name="search[session]" class="form-control" required>
                                    <option value="">-- Select Year/Session --</option>
                                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                    <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div ng-if="class !='Eleven' && class !='Twelve'">
                                <select name="search[session]" class="form-control" required>
                                    <option value="">-- Select Year/Session --</option>
                                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Section <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="search[section]" class="form-control" required>
                              <option value="">Select Section</option>
                              <?php foreach (config_item('section') as  $value) {?>
                                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="col-md-2 control-label">Payment Year <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="year" class="form-control" required>
                                <option value="" selected disabled>-- Select Year --</option>
                                <?php for ($i=2016; $i <= date('Y')+2 ; $i++) { ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
						<label class="col-md-2 control-label">Student ID <span class="req"></span></label>
						<div class="col-md-5">
							<input type="text" name="search[student_id]" ng-model="student_id" class="form-control" placeholder="Student ID">
						</div>
					</div>
					
                    <div class="form-group">
                        <label class="col-md-2 control-label">Exam Name <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="exem_name" required>
                        </div>
                    </div> 

                    <div class="col-md-7">
                        <div class="btn-group pull-right">
                            <input type="submit" name="viewQuery" value="Show" class="btn btn-primary">
                        </div>
                    </div> 
                <?php echo form_close(); ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>

        <div class="panel panel-default admit_card">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">Show Result</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()">
                        <i class="fa fa-print"></i> Print
                    </a>
                </div>
            </div>

            <div class="panel-body">
                <div class="row" style="overflow: auto;">
<?php if($student_info!=NULL){foreach($student_info as $key=>$admit){
        $paymentMonths = $futureMonths = array();
        $months = array('January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December');
            for($i = date('m')+1; $i<=12;$i++){
                $futureMonths[] = date('F', mktime(0, 0, 0, $i, 12));
            }
            $where = array(
                "year"       => $_POST['year'],
                "student_id" => $admit->student_id,
                "status"     => "approved",
                "trash"      => 0
            );
            $paymentInfo = $this->action->readGroupBy("payment","month",$where);
            if($paymentInfo != NULL){
                foreach($paymentInfo as $sl=>$val){
                  $paymentMonths[$sl] = $val->month;
                }
                $months = array_diff($months,$paymentMonths);
            }else{
              $months = $months;
            }
            $months = array_diff($months,$futureMonths);
          
            if(count($months) >=  0){ 
    // this code write for print brack purpose  
    $index = $key+1;
    if($index == 1){echo "<div class='col-sm-12'><div class='row'>";}
 ?>
        <style>
            .admit-card-new-style {
                width: 45%;
                height: 49vh;
                border: 2px solid #000;
                float: left;
                margin: 2%;
            }
            .admit-card-new-style table {width: 100%;}
            .admit-card-new-style table tr td {padding: 1px 10px;}
            .admit-card-new-style table tr td .top-distance {
                margin-top: 50px;
                display: block;
            }
            .admit-card-new-style table tr td img {
                width: 100px; 
                display: block; 
                margin: 25px auto 0;
            }
            @media print {
                body {margin: 0; padding: 0;}
                .panel-body {padding-top: 0;}
                .admit-card-new-style {
                    width: 48%;
                    margin: 2% 2% 2% 0;
                    height: 42vh; 
                    page-break-before : always;
                    page-break-inside : avoid;
                }
            }
        </style>
        <div class="admit-card-new-style">
            <table>
                <tr>
                    <td colspan="2" class="text-center">
                        <h3>Border Guard Public School & College</h3>
                        <h5>SYLHET</h5>
                        <h3 style="font-weight: bold; margin-top: 0;">Admit Card</h3>
                        <h5 style="margin-bottom: 20px;"><?php echo $this->input->post('exem_name'); ?></h5>
                    </td>
                </tr>
                <tr>
                    <td><b>SID:</b> <?php echo $admit->student_id;?></td>
                    <td><b>CID:</b> <?php echo $admit->sid;?></td>
                </tr>
                <tr>
                    <td><b>Name:</b> <?php echo $admit->name;?></td>
                    <td><b>Section:</b> <?php echo $admit->section; ?></td>
                </tr>
                <tr>
                    <td><b>Class:</b> <?php echo $admit->class; ?></td>
                    <td><b>Roll:</b> <?php echo $admit->roll; ?></td>
                </tr>
                <tr>
                    <td class="text-center"><i class="top-distance">Guide Teacher</i></td>
                    <td class="text-center">
                        <img src="<?php echo base_url('public/img/hs.jpg');?>" alt="Sign Not Found !">
                        <i>Principal</i>
                    </td>
                </tr>
            </table>
        </div>
        <?php 
            if($key == count($student_info)){echo '</div></div>';}
            if($index % 6 == 0){echo  "</div></div><br class='brack'/><div class='col-sm-12'><div class='row'>";}
            } }  } ?>
            </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

