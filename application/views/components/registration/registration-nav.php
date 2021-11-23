<div class="container-fluid none" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">
        <?php if(ck_action("registration_menu","student_registration")){ ?>
		<a href="<?php echo site_url('registration/registration/student_registration'); ?>" class="btn btn-default" id="student_registration">
			Student Registration
		</a>
		<?php } ?>
		
        <?php if(ck_action("registration_menu","all_registration")){ ?>
		<a href="<?php echo site_url('registration/registration/all_registration'); ?>" class="btn btn-default" id="all_registration">
			All Registration
		</a>
		<?php } ?>
		
        <?php if(ck_action("registration_menu","add-new")){ ?>
		<a href="<?php echo site_url('registration/registration'); ?>" class="btn btn-default" id="add-new">
			Add New
		</a>
		<?php } ?>
		
        <?php if(ck_action("registration_menu","all")){ ?>
		<a href="<?php echo site_url('registration/registration/allStudent'); ?>" class="btn btn-default" id="all">
			All Students
		</a>
		<?php } ?>
		
		<?php if(ck_action("registration_menu","up")){ ?>
        <a href="<?php echo site_url('admission/admission/upgrade_student'); ?>" class="btn btn-default" id="up">
			Upgrade Students
		</a>
		<?php } ?>
		
		<!--<?php if(ck_action("registration_menu","add")){ ?>
		<a href="<?php echo site_url('testimonial'); ?>" class="btn btn-default" id="add">
		    Testimonial Generator
		</a>
		<?php } ?>
		
		<?php if(ck_action("registration_menu","all_testomonial")){ ?>
		<a href="<?php echo site_url('testimonial/allView'); ?>" class="btn btn-default" id="all_testomonial">
			All Testimonials
		</a>
		<?php } ?>-->
    </div>
</div>