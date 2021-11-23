<style>
    .new_controll_pad_right{
        padding-right: 0;
    }
    .new_controll_height{
        max-height: 500px;
        overflow: hidden;
    }
    .new_ul_controll li{
        width: 19%;
        text-align: center;
        padding: 15px 10px;
        display: inline-block;
    }
    .new_ul_controll li a{
        color: #222;
        font-style: normal;
    }
    .new_ul_controll li a:hover{
        color: #C50405;
    }
    .new_ul_controll li a span{
        display: block;
        padding: 8px 0;
    }
    @media screen and (min-width: 992px){
        .mt-mdUp-5 {margin-top: 5px;}
    }
    @media screen and (max-width: 768px){
        .new_ul_custom{display: none;}
    }
    .result_btn a {margin-top: 5px !important;}
    .mq {display: block !important;}
</style>

<div class="col-md-9">
    <div class="row">
        <!-- President speech -->
        <div class="col-md-6 col-sm-6 col-xs-6 custom-sm new_controll_pad_right" style="margin-top:0;">
            <div class="width-speech row new_controll_height">
                <div class="speech">
                    <h3 style="font-size: 16px;"> Chairman's Speech </h3>                 
                    <p>
                        <img class="img-responsive" src="<?php echo site_url($pr_speech[0]->speech_path); ?>">
                        <?php echo $pr_speech[0]->speech_speech;?>
                    </p>
                </div>
            </div>  
        </div>

        <div class="col-md-6 col-sm-6 col-xs-6 custom-sm"  style="margin-top:0;">
            <div class="width-speech row new_controll_height">
                <div class="speech">
                    <h3 style="font-size: 16px;">Co-Chairman's Speech</h3>                 
                    <p>
                        <img class="img-responsive" src="<?php echo site_url($gb_speech[0]->speech_path); ?>">
                        <?php echo view_more($gb_speech[0]->speech_speech,70,base_url('home/gbmember_speech'))?>
                    </p>
                </div>
            </div>  
        </div>

        <!-- GB Member speech -->
        <div class="col-md-12 col-sm-12 col-xs-12 custom-sm new_ul_custom">
            <div class="width-speech row">
                <div class="speech">
                    <h3 style="margin-left:0;font-size: 16px;">More About Us</h3>                 
                    <ul class="new_ul_controll">
                        <li><a href="<?php echo site_url('home/page/at_a_glance'); ?>">
                            <i class="fa fa-globe fa-3x"></i>
                            <br>
                            <span>At a Glance</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/page/college_history'); ?>">
                            <i class="fa fa-history fa-3x"></i>
                            <br>
                            <span>College History</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/page/college_achievement'); ?>">
                            <i class="fa fa-trophy fa-3x"></i>
                            <br>
                            <span>Achievement</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/Committee'); ?>">
                            <i class="fa fa-users fa-3x"></i>
                            <br>
                            <span>Committee</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/page/academic_rules');?>">
                            <i class="fa fa-gavel fa-3x"></i>
                            <br>
                            <span>Academic Rules</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/teacher'); ?>">
                            <i class="fa fa-user-plus fa-3x"></i>
                            <br>
                            <span>Teacher</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/all_result'); ?>">
                            <i class="fa fa-file-text-o fa-3x"></i>
                            <br>
                            <span>Result</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/page/sports');?>">
                            <i class="fa fa-futbol-o fa-3x"></i>
                            <br>
                            <span>Sports</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/page/library');?>">
                            <i class="fa fa-book fa-3x"></i>
                            <br>
                            <span>Library</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/page/campus');?>">
                            <i class="fa fa-university fa-3x"></i>
                            <br>
                            <span>Campus</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/page/admission_rules'); ?>">
                            <i class="fa fa-file-text fa-3x"></i>
                            <br>
                            <span>Admission</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/imageGallery'); ?>">
                            <i class="fa fa-picture-o fa-3x"></i>
                            <br>
                            <span>Gallery</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/search_admitted_student'); ?>">
                            <i class="fa fa-male fa-3x"></i>
                            <br>
                            <span>Student</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/allNotice'); ?>">
                            <i class="fa fa-list-alt fa-3x"></i>
                            <br>
                            <span>Notice</span>
                        </a></li>

                        <li><a href="<?php echo site_url('home/contact'); ?>">
                            <i class="fa fa-envelope-o fa-3x"></i>
                            <br>
                            <span>Contact</span>
                        </a></li>
                    </ul>
                </div>
            </div>  
        </div>    
    </div>   
</div>

