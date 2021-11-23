<?php
    $theme_data   = $this->action->read('theme');
    $footer_logo  = json_decode($theme_data[0]->footer_logo,true);
    $contact_info = json_decode($theme_data[0]->contact_info,true);
    $social_link  = json_decode($theme_data[0]->social_links,true);
    $login_img    = json_decode($theme_data[0]->login_img,true);
    $favicon      = json_decode($theme_data[0]->favicon,true);
    $header_logo  = json_decode($theme_data[0]->header_logo,true);
?>
<style>
    .contact_info {
        justify-content: center;
        display: flex;
        width: 100%;
        flex-wrap: wrap;
    }
    .contact_info .info_box {
        width: calc(33.3333% - 10px);
        border: 1px solid #ccc;
        margin: 5px;
    }
    .contact_info .info_box .title {
        border-bottom: 1px solid #ccc;
        display: flex;
        align-items: center;
    }
    .contact_info .info_box .title h5 {
        font-weight: 600;
        padding: 12px;
        margin: 0;
        color: #000;
        font-size: 15px;
    }
    .contact_info .info_box .title i {
        border-right: 1px solid #ccc;
        font-size: 38px;
        width: 56px;
        height: 56px;
        line-height: 56px;
        text-align: center;
    }
    .contact_info .info_box .title i.fa-envelope-o {font-size: 36px;}
    .contact_info .info_box p {
        text-align: left;
        min-height: 70px;
        margin: 0;
        padding: 12px;
    }
    @media screen and (max-width: 768px) {
        .contact_info .info_box {width: calc(50% - 10px);}
    }
    @media screen and (max-width: 576px) {
        .contact_info .info_box {width: calc(100% - 10px);}
    }
</style>
<div class="col-md-9">
    <div class="row">
        <div class="single clearfix">
            <div class="contact_info">
                <div class="info_box">
                    <div class="title">
                        <i class="fa fa-map-marker"></i>
                        <h5>Location Of Campus</h5>
                    </div>
                    <p><?php echo $contact_info['address'];?></p>
                </div>
                
                <div class="info_box">
                    <div class="title">
                        <i class="fa fa-envelope-o"></i>
                        <h5>Email Us</h5>
                    </div>
                    <p><?php echo $contact_info['email1'];?>, <?php echo $contact_info['email2'];?></p>
                </div>
                
                <div class="info_box">
                    <div class="title">
                        <i class="fa fa-envelope-o"></i>
                        <h5>Contact Phone</h5>
                    </div>
                    <p><?php echo $contact_info['mobile1'].', ';?> <?php echo $contact_info['mobile2'];?></p>
                </div>
                
                <div class="info_box">
                    <div class="title">
                        <i class="fa fa-envelope-o"></i>
                        <h5>Website</h5>
                    </div>
                    <p><a href="<?php echo $contact_info['website']; ?>"><?php echo $contact_info['website']; ?></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php echo $message; ?>
        <div class="single clearfix">
            <!-- contact -->  
            <div style="width:100%;height:300px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.6915152627603!2d91.84164052155229!3d24.913795747319664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505542e7c30f6d%3A0x221bb02a2fd7f22d!2sBorder%20Guard%20Public%20School%20%26%20College%2C%20Brahmman%20Sashan%20Rd%2C%20Sylhet!5e0!3m2!1sen!2sbd!4v1630132859032!5m2!1sen!2sbd"
width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <?php echo form_open(); ?>
            <div class="contact-form">
                <div class="col-md-12 col-sm-12 row" style="margin: 5px 0px;">
                    <label class="col-md-2 col-sm-12" style="margin: 5px 0px;" >Name : </label>
                    <div class="col-md-10 col-sm-12">
                        <div class="row">
                            <input type="text" name="name" placeholder="Name" id="in1" required />
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 row" style="margin: 5px 0px;">
                    <label class="col-md-2 col-sm-12" style="margin: 5px 0px;" >Mobile : </label>
                    <div class="col-md-10 col-sm-12">
                        <div class="row">
                            <input type="text" name="mobile" placeholder="Mobile Number (11 digits)" id="in3" required />
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 row" style="margin: 5px 0px;">
                    <label class="col-md-2 col-sm-12" style="margin: 5px 0px;" >Subject : </label>
                    <div class="col-md-10 col-sm-12">
                        <div class="row">
                            <input type="text" name="subject" placeholder="Subject" id="in1"/>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 row" style="margin: 5px 0px;">
                    <label class="col-md-2 col-sm-12" style="margin: 5px 0px;" >Message : </label>
                    <div class="col-md-10 col-sm-12">
                        <div class="row">
                            <textarea name="message" id="in4" placeholder="Message..." required ></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 col-md-offset-2">
                    <div style="margin-left: -5px;">
                        <input style="margin-top:6px; background-color: #26a3d4; color: #fff !important;"
                            type="submit" name="msg_submit" class="btn-contact" value="Send" name="contact_message" />
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>