<style>
.new_footer table{color:rgba(255,255,255,0.8); margin: 25px 0;}
.new_footer table i{margin:8px;}
.new_footer_bottom img{width:175px;}
.new_footer_bottom table{width:100%;}
.new_footer_bottom table tr td a{padding:3px 0;color:rgba(255,255,255,0.4);display:block;}
.new_footer_bottom2{background:#1C1C1C;}
ul.new_bottom_social{width: 104px; margin: 0 auto;}
ul.new_bottom_social li{float:left;margin-right:2px;}
ul.new_bottom_social li a{width:50px;height:50px;display:block;background:#161616;text-align:center;line-height:50px}
ul.new_bottom_social li a.fb:hover{background:#3B5998;}
ul.new_bottom_social li a.tw:hover{background:#00ACED;}
ul.new_bottom_social li a.yo:hover{background:#BB0000;}
ul.new_bottom_social li a.fl:hover{background:#FF0084;}
</style>

</div>
</div> 
</div>
<?php
    $theme_data = $this->action->read('theme');
    $footer_logo = json_decode($theme_data[0]->footer_logo,true);
    $address = json_decode($theme_data[0]->contact_info,true);
    $copy_right = json_decode($theme_data[0]->contact_info,true);
    $email = json_decode($theme_data[0]->contact_info,true);
    $mobile = json_decode($theme_data[0]->contact_info,true);
    $social_link = json_decode($theme_data[0]->social_links,true);
?>
<!-- footer -->
<div class="footer-wrapper">
    <div class="container">
        <div class="row new_footer">
            <div class="new_div111 clearfix" style="background:#161616;width:100%;">
                <div class="col-md-4">
                    <table>
                        <tr>
                            <td>
                                <i class="fa fa-map-marker fa-3x"></i> 
                                <span style="position:absolute;top:40px;left:60px;"></span>
                            </td>
                            <td style="padding-left:25px;">
                                <b>Visit Us</b> <br><?php echo $address['address'];?>
                            </td>
                        </tr>
                    </table>
                    <div style="width:1px;height:50px;background:rgba(255,255,255,0.1);position:absolute;top:25px;right:0;"></div>
                </div>                
                <div class="col-md-4">
                    <table>
                        <tr>
                            <td>
                                <i class="fa fa-envelope-o fa-3x"></i>
                                <span style="position:absolute;top:40px;left:80px;"></span>
                            </td>
                            <td style="padding-left:25px;"><b>Email Us</b> <?php echo $email['email1'];?><br><?php echo $email['email2'];?></td>
                        </tr>
                    </table>
                    <div style="width:1px;height:50px;background:rgba(255,255,255,0.1);position:absolute;top:25px;right:0;"></div>   
                </div>
                <div class="col-md-4">
                    <table>
                        <tr>
                            <td>
                                <i class="fa fa-phone fa-2x"></i>
                                <span style="position:absolute;top:40px;left:60px;"></span>
                            </td>
                            <td style="padding-left:25px;"><b>Call Us</b> <?php echo $mobile['mobile1'];?><br><?php echo $mobile['mobile2'];?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>        
</div>

<div class="footer-wrapper" style="padding-bottom:0px;padding-top:0px;">
    <div class="container">
        <div class="row new_footer">
            <div style="width:100%;" class="new_footer_bottom">
                <div class="col-md-4">
                    <img style="width: 175px;" src="<?php echo site_url($footer_logo['logo']);?>" />
                </div>
                <div class="col-md-4">
                    <table>
                        <tr>
                            <td colspan="2"><b style="padding-bottom:10px;display:block;">More Links</b></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo site_url('home/page/at_a_glance'); ?>">At a Glance</a></td>
                            <td><a href="<?php echo site_url('home/page/academic_rules');?>">Academic Rules</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo site_url('home/page/scholarship');?>">Scholarship</a></td>
                            <td><a href="<?php echo site_url('home/page/residential');?>">Residential</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo site_url('home/page/admission_rules');?>">Admission Rules</a></td>
                            <td><a href="<?php echo site_url('home/search_admitted_student'); ?>">Student</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo site_url('home/allNotice'); ?>">Notice</a></td>
                            <td><a href="<?php echo site_url('home/contact'); ?>">Contact</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <table>
                        <tr>
                            <td colspan="2"><b style="padding-bottom:10px;display:block;">Download</b></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="http://www.ebook.gov.bd/">e-Book</a></td>
                            <td><a href="<?php echo site_url('home/all_result'); ?>">Result</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo site_url('home/leave_list'); ?>">Leave Lists</a></td>
                            <td><a href="<?php echo site_url('home/class_routine'); ?>">Class Routine</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo site_url('home/digital_content'); ?>">Digital Content</a></td>
                            <td><a href="<?php echo site_url('home/academic_calendar'); ?>">Academic Calendar</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo site_url('home/syllabus')?>">Syllabus</a></td>
                            <td><a href="<?php echo site_url('home/magazin')?>">Magazine</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>        
</div>

<div class="footer-wrapper-bottom">
    <!--div class="footer-border-top"></div>
    <div class="footer-border-bottom"></div-->
    <div class="col-md-12 new_footer_bottom2">
        <div class="row">
            <div class="col-md-5 new_footer_bottom2">
                <p>&copy; <?php echo $copy_right['copy_right'];?></p>  
                <i style="height:30px;width:100%;display:block;"></i> 
            </div>
            <div class="col-md-2 new_footer_bottom2">
                <ul class="new_bottom_social" style="padding-top: 18px;">
                    <li><a href="<?php echo $social_link['facebook'];?>" class="fb" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $social_link['utube'];?>" class="yo" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div> 
            <div class="col-md-5 new_footer_bottom2 new_footer_bottom3">
                <p><span>
                    Developed by <a href="http://freelanceitlab.com" target="_blank">Freelance iT Lab</a>
                </span></p>
            </div>          
        </div>
    </div>
</div>

<!-- wow slider -->
     <script src="<?php echo site_url('public/js/wowslider.js');?>"></script>
     <script src="<?php echo site_url('public/js/wow.script.js');?>"></script>
 <!--Wow slider-->
<!-- script -->
<script type="text/javascript" src="<?php echo site_url('public/js/responsiveslides.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('public/js/bootstrap.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('public/js/jasny-bootstrap.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('public/plugins/ligntboxMaster/js/lightbox.js'); ?>"></script>
<script>
    $(function() {
        // Slideshow 1
        $("#slider1").responsiveSlides({
            speed: 800
        });
    });
</script>

<!-- marquee plugin start -->
<script src='<?php echo site_url('public/js/jquery.marquee.js'); ?>'></script>
<script>
    $(function() {
        $('.marquee').marquee({
            pauseOnHover: true,
            duration: 0
        });
    });
</script>
<!-- marquee plugin end -->

 <!-- responsive menu -->
    <script src="<?php echo site_url('public/js/ready.js');?>"></script>
    <script src="<?php echo site_url('public/js/selectnav.min.js');?>"></script>
    <script>
        domready(function () {
            selectnav('nav');
        })
    </script>
 <!-- responsive menu -->


     
</body>
</html>