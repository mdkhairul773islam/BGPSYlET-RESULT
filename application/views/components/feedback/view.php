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
		.panel-heading{
			display: none;
		}
		
		.panel-footer{
			display: none;
		}
        .panel .hide{
            display: block !important;
        }
	}
</style>



<div class="container-fluid">
    <div class="row">
<?php //echo "<pre>"; print_r($student_info); echo "</pre>";?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">View Feedback</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <div class="panel-body">
              
            	<div class="row">

                <h3 class="hide text-center" style="margin: 0 0 15px 0;">View Feedback</h3>
            
                    <div class="col-md-12 no-padding">
                        <label class="control-label col-sm-3">Date</label>
                        <div class="col-sm-9">
                            <p><?php echo $feedbackInfo[0]->date; ?></p>
                        </div>
                    </div>

                    <div class="col-md-12 no-padding">
                        <label class="control-label col-sm-3">Name</label>
                        <div class="col-sm-9">
                            <p><?php echo $feedbackInfo[0]->name; ?></p>
                        </div>
                    </div>                    

                    <div class="col-md-12 no-padding">
                        <label class="control-label col-sm-3">Mobile</label>
                        <div class="col-sm-9">
                            <p><?php echo $feedbackInfo[0]->mobile; ?></p>
                        </div>
                    </div>
                    
                    <div class="col-md-12 no-padding">
                        <label class="control-label col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <p><?php echo $feedbackInfo[0]->email; ?></p>
                        </div>
                    </div>
                    
                    <div class="col-md-12 no-padding">
                        <label class="control-label col-sm-3">Subject</label>
                        <div class="col-sm-9">
                            <p><?php echo $feedbackInfo[0]->subject; ?></p>
                        </div>
                    </div>

                    <div class="col-md-12 no-padding">
                        <label class="control-label col-sm-3">Feedback / Advice </label>
                        <div class="col-sm-9">
                            <p><?php echo $feedbackInfo[0]->feedback; ?></p>
                        </div>
                    </div>

                </div>
     
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>


