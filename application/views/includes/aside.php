<style>
    a:hover, a:visited, a:active, a:focus, a {
        text-decoration: none;
        outline: none !important;
    }
    .marquee p {margin-bottom: 0;}
    .pannel-custom h3 a {
        display: inline-block;
        color: #fff;
        width: 100%;
    }
    .pannel-custom .marquee {border: none;}
</style>
<!-- aside -->
<div class="col-md-3 col-sm-12 custom-sm">
    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-6 custom-sm">
            <div class="row">
                <div class="pannel-custom mt-mdUp-5">
                    <h3><a target="blank" href="<?php echo site_url('home/result_one2five'); ?>" title="Show Result">Primary School Result</a></h3>
                </div>
                <div class="pannel-custom mt-mdUp-5">
                    <h3><a target="blank" href="<?php echo site_url('home/result_six2ten'); ?>" title="Show Result">High School Result</a></h3>
                </div>
                <div class="pannel-custom mt-mdUp-5">
                    <h3><a target="blank" href="<?php echo site_url('home/showResult'); ?>" title="Show Result">Result</a></h3>
                </div>
                <div class="pannel-custom">
                    <h3>Notice</h3>
                    <div class="marquee ver" data-direction='up' data-duration='2500' data-pauseOnHover="true" style="height:330px;margin-bottom:3px;">
                        <ul>
                           <?php foreach ($latest_notice as $key => $notice) { ?>
                            <li>
                                <a href="<?php echo site_url('home/notice'); ?>?id=<?php echo $notice->id ?>" target="_blank">
                                   <?php echo $notice->notice_title; ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		
    	<div class="col-md-12 col-sm-6 col-xs-6 custom-sm">
            <div class="row">
                <div class="pannel-custom">
                    <h3>Important Links</h3>
                    <ul>                      
                        <li><a href="http://www.nctb.gov.bd/" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;NCTB</a></li>                                         
                        <li><a href="https://sylhetboard.gov.bd/" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;Sylhet Education Board</a></li>
                        <li><a href="http://www.educationboardresults.gov.bd" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;Education Board Result</a></li>
                        <li><a href="https://www.teachers.gov.bd/" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;Shikkhok Bataon</a></li>
                        <li><a href="http://www.shikkhok.com/" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;Shikkhok.COm</a></li>
                        <li><a href="http://www.bangladesh.gov.bd/" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;National Web Portal</a></li>                      
                        <li><a href="http://www.moedu.gov.bd" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;Ministry of Education</a></li>
                        <!--li><a href="http://www.ndub.edu.bd" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;Notre Dame University</a></li-->
                        <li><a href="http://www.sylhet.gov.bd/" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;Sylhet District</a></li>          
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-6 col-xs-6 custom-sm">
            <div class="row">
                <div class="pannel-custom">
                    <h3>Visitors</h3>
                    <ul>                      
						<li>Current User : <span><strong><?php echo $current_visitor;?></strong></span></li>
						<li>Total Visitors : <span><strong><?php echo count($total_visitor);?></strong></span></li>			                              
					    <li>Todays Visitors : <span><strong><?php echo count($todays_visitor);?></strong></span></li>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>

