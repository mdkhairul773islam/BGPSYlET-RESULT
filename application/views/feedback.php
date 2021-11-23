<div class="col-md-9">
    <div class="row">
    <?php echo $message; ?>
        <div class="single clearfix">
            <!-- Feedback -->

            <?php echo form_open(); ?>
            <div class="contact-form row">
               
                <div class="col-md-12 col-sm-12 row" style="margin: 5px 0px;">
                    <label class="col-md-2 col-sm-12">Name : </label>
                    <div class="col-md-10 col-sm-12">
                        <input type="text" name="name" placeholder="Name" required />
                    </div>
                </div>
                
                <div class="col-md-12 col-sm-12 row" style="margin: 5px 0px;">
                    <label class="col-md-2 col-sm-12" style="margin: 10px 0px;" >Mobile : </label>
                    <div class="col-md-10 col-sm-12">
                        <input type="text" name="mobile" placeholder="Mobile Number (11 digits)" required />
                    </div>
                </div>
                
                <div class="col-md-12 col-sm-12 row" style="margin: 5px 0px;">
                    <label class="col-md-2 col-sm-12">Email : </label>
                    <div class="col-md-10 col-sm-12">
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                </div>
                
                <div class="col-md-12 col-sm-12 row" style="margin: 5px 0px;">
                    <label class="col-md-2 col-sm-12">Subject : </label>
                    <div class="col-md-10 col-sm-12">
                        <input type="text" name="subject" placeholder="Subject" />
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 row" style="margin: 5px 0px;">
                    <label class="col-md-2 col-sm-12">Feedback / Advice : </label>
                    <div class="col-md-10 col-sm-12">
                        <textarea name="feedback" placeholder="Feedback / Advice " required ></textarea>
                    </div>
                </div>
                
                <div class="col-md-10 col-md-offset-2">
                    <input style="margin-top:6px; margin-left: 10px; background-color: #26a3d4; color: #fff !important;" type="submit" name="msg_submit" class="btn-contact" value="Send" name="contact_message" />
                </div>
                
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


