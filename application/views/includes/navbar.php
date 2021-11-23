<style>
    .active_item{
        background: rgba(46,46,46,1);
        color: #fff;
    }
</style>
<!-- NavBar Start -->
<div class="container container-custom">
    <div class="row mar-right">       
        <div class="container container-custom">
            <div class="row">
                <nav>
                    <ul id="nav" class="slimmenu">
                        <li id="home"><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li id="about"><a>About College</a>
                            <ul>
                                <li><a href="<?php echo site_url('home/page/at_a_glance'); ?>">At a Glance</a></li>
                                <li><a href="<?php echo site_url('home/page/future_plan'); ?>">Future Plan</a></li>
                                <li><a href="<?php echo site_url('home/page/college_history'); ?>">College History</a></li>
                                <li><a href="<?php echo site_url('home/page/success_story'); ?>">Success Story</a></li>
                                <li><a href="<?php echo site_url('home/page/college_achievement'); ?>">College Achievement</a></li>
                            </ul>
                        </li>
                        <li id="administration"><a>Administration</a>
                            <ul>
                               <li><a href="<?php echo site_url('home/page/academic_rules');?>">Academic Rules</a></li>
                               <li><a href="<?php echo site_url('home/page/post_information');?>">Post Information</a></li>
                            </ul>
                        </li>
                        <li id="academic"><a>Academic</a>
                            <ul>
                                 <li><a href="<?php echo site_url('home/staff'); ?>">Staff</a></li>
                                 <li><a href="<?php echo site_url('home/teacher'); ?>">Teacher</a></li>
                                 <li><a href="<?php echo site_url('home/Committee'); ?>">Committee</a></li>
                                 <li><a href="<?php echo site_url('home/showResult'); ?>">Show Result</a></li>
                                 <li><a href="<?php echo site_url('home/all_result'); ?>">Result</a></li>
			                     <li><a href="<?php echo site_url('home/academic_calendar');?>">Academic Calender</a></li>
                            </ul>
                        </li>
                         <li id="curriculums"><a>Co-Curriculums</a>
                            <ul>
                                <li><a href="<?php echo site_url('home/page/sports');?>">Sports</a></li>
                                <li><a href="<?php echo site_url('home/library');?>">Library</a></li>
                                <li><a href="<?php echo site_url('home/page/debate_club');?>">Club</a></li>
                                <li><a href="<?php echo site_url('home/page/physical_education');?>">Physical Education</a></li>
                            </ul>
                        </li>
                        <li id="facilities"><a>Facilities</a>
                            <ul>
                                <li><a href="<?php echo site_url('home/page/campus');?>">Campus</a></li>
                                <li><a href="<?php echo site_url('home/page/study_tour');?>">Study Tour</a></li>
                                <li><a href="<?php echo site_url('home/page/academic_facilites');?>">Academic Facilities</a></li>
                            </ul>
                        </li>
                         <li id="admission"><a>Admission</a>
                            <ul>
                                <li><a href="<?php echo site_url('home/page/admission_rules'); ?>">Admission Rules</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="<?php // echo site_url('home/search_admitted_student'); ?>">Student</a></li>-->
                        <li id="notice"><a href="<?php echo site_url('home/allNotice'); ?>">Notice</a></li>
                        <li id="gallery"><a>Gallery</a>
                          <ul>
                            <li><a href="<?php echo site_url('home/imageGallery'); ?>">Image Gallery</a></li>
                            <li><a href="<?php echo site_url('home/videoGallery'); ?>">Video Gallery</a></li>
                          </ul>
                        </li>

                        <li><a href="<?php echo site_url('access/users/login'); ?>">Login</a></li>

                        <li id="contact" class="contact"><a>Contact</a>
                          <ul>
                            <li><a href="<?php echo site_url('home/contact'); ?>">Contact Form</a></li>
                            <li><a href="<?php echo site_url('home/page/phone_book'); ?>">Phone Book</a></li>
                            <li><a href="<?php echo site_url('home/feedback'); ?>">Feedback</a></li>
                          </ul>
                        </li>
                        <li id="career"><a target='_blank' href="<?php echo site_url('home/page/career'); ?>">Career</a></li>
                        
                        <?php /* <li><a>Login</a>
            			  <ul>
        			        <li><a target="_blank" href="<?php echo site_url('home/show_result'); ?>">Show Result Old</a></li>
        			        <li><a href="<?php echo site_url('home/page/bncc'); ?>">BNCC</a></li>
        			        <li><a href="<?php echo site_url('home/Committee'); ?>">Committee</a></li>>
                            <li><a href="<?php echo site_url('home/page/publication'); ?>">Publication</a></li>
        			        <li><a href="<?php echo site_url('home/page/master_plan'); ?>">Master Plan</a></li>
                            <li><a href="<?php echo site_url('home/page/rover_scout');?>">Rover Scout</a></li>
                            <li><a href="<?php echo site_url('home/page/english_club');?>">English Club</a></li>
                            <li><a href="<?php echo site_url('home/page/science_club');?>">Science Club</a></li> 
                            <li><a href="<?php echo site_url('home/page/humaneties_club');?>">Humaneties Club</a></li> 
                            <li><a href="<?php echo site_url('home/page/business_club');?>">Business Club</a></li> 
                            <li><a href="<?php echo site_url('home/page/cultural_club');?>">Cultural Club</a></li>
                            <li><a href="<?php echo site_url('home/page/volunteer_alliance');?>">Volunteer Alliance</a></li>
                            <li><a href="<?php echo site_url('home/page/scholarship');?>">Scholarship</a></li>
                            <li><a href="<?php echo site_url('home/page/residential');?>">Residential</a></li>
                            li><a href="<?php echo site_url('online/regInfo'); ?>">Online Registration</a></li
        				    <li><a href="<?php echo site_url('access/subscriber/login'); ?>">Student Login</a></li>                                      
        			        <li><a href="<?php echo site_url('access/teachers/login'); ?>">Teacher Login</a></li> 
        			        <li><a href="<?php echo site_url('access/users/login'); ?>">Admin Login</a></li>                      
            			  </ul>
            			</li> */ ?>
                    </ul>
                </nav>                             
            </div>
        </div>
        <div style="margin-top:5px;"></div>
    </div>
</div>
<script>
    document.getElementById("<?php echo (!empty($active) ? $active : 'home' )?>").classList.add("active_item");
    document.getElementsByClassName("<?php echo (!empty($active) ? $active : '' )?>").classList.add("active_item");
</script>