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
    }
</style>

<div class="container-fluid">
    <div class="row">

        <div class="panel panel-default none">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>Montly Payment History</h1>
                </div>
            </div>

            <div class="panel-body">

                <!--blockquote class="form-head">

                    <h4>Montly Payment History</h4>

                    <ol style="font-size: 14px;">
                        <li>1 . Fill all this fields and press <mark>Show</mark> button</li>
                    </ol>

                </blockquote>
                
                <hr-->

                <form action="" class="form-horizontal">

                    <div class="form-group">
                        <label class="col-md-2 control-label">Class <span class="req">*</span></label>

                        <div class="col-md-5">
                            <select name="class" class="form-control" required>
                                 <option value="">-- Select class --</option>
                                <option value="Eleven">Eleven</option>
                                <option value="Twelve">Twelve</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Select Year <span class="req">*</span></label>

                        <div class="col-md-5">
                            <select name="year" class="form-control" required>
                                <option value="">-- Select Year --</option>
                                <?php
                                 for($i=date("Y")-2; $i<=date("Y")+10;$i++)
                                 {
                                    ?>
                                     <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php
                                 }
                                 ?>      
                            </select>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="col-md-2 control-label">Select Month <span class="req">*</span></label>

                        <div class="col-md-5">
                            <select name="month" class="form-control" required>
                                <option value="">-- Select Month --</option>
                                <?php
                                    $month = array('1'=>'January', '2'=>'February', '3'=>'March', '4'=>'April', '5'=>'May', '6'=>'June', '7'=>'July', '8'=>'August', '9'=>'September', '10'=>'October', '11'=>'November', '12'=>'December');
                                        foreach($month as $key => $opt){
                                        echo '<option value="'.($key).'">'.$opt.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div> 


                    <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" value="Show" class="btn btn-primary">
                    </div>
                    </div> 

                </form>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>

        <div class="panel panel-default">  
            
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">Show Result</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <h3 class="text-center hide">Montly Payment History</h3>

            <div class="panel-body">
                 <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Roll</th>
                        <th>Class</th>
                        <th>Year</th>
                        <th>Amount</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>2016-07-20</td>
                        <td>2016-152-51</td>
                        <td>Class 5</td>
                        <td>2016</td>
                        <td>1000</td>
                    </tr>
                </table>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

