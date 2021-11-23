            <div class="container-fluid">
                <div class="row">
                <?php //echo "<pre>"; print_r($profile); echo "</pre>"; ?>
                <!-- horizontal form -->
                <?php
                echo $confirmation;
                $attribute = array(
                    'name' => '',
                    'class' => 'form-horizontal',
                    'id' => ''
                );
                echo form_open_multipart('settings/editProfile?id='.$this->input->get('id'), $attribute);
                ?>
                    <input type="hidden" name="img_url" value="<?php echo $profile[0]->image; ?>">
                    <div class="panel panel-default">
                        <div class="panel-heading panal-header">
                            <div class="panal-header-title pull-left">
                                <h1>Change Your Account</h1>
                            </div>
                        </div>

                        <div class="panel-body">

                        <h2 style="padding: 0 15px; margin: 15px 0;">
                            Profile: <strong><?php echo $profile[0]->name." ".$profile[0]->l_name; ?></strong>
                        </h2>
                        <br>

                        
                        <!--div class="no-title">&nbsp;</div-->

                            <!-- left side -->
                            <aside class="col-md-3">
                                <!--div class="border-top">&nbsp;</div-->
                                
                                
                                <figure class="profile-pic">
                                    <img src="<?php echo site_url($profile[0]->image); ?>" alt="Photo not found!" class="img-responsive">
                                </figure>

                                <div class="profile-upload">    
                                    <label class="btn btn-primary" style="display: block;" for="image"><i class="fa fa-cloud-upload"></i> Upload</label>
                                    <input type="file" name="image" id="image" style="display: none;">
                                </div> <br/>

                            </aside>


                            <div class="col-md-9">
                            
                            	 <div class="form-group">
                                        <label for="" class="col-sm-3 col-xs-12 control-label">User Name </label>
                                        <div class="col-sm-7 col-xs-10">
                                            <input type="text" name="username" value="<?php echo $profile[0]->username; ?>" class="form-control" placeholder="username" readonly>
                                        </div>

                                    </div>
                                   
                                  <div class="form-group">
                                        <label for="" class="col-sm-3 col-xs-12 control-label">Name</label>
                                        <div class="col-sm-7 col-xs-10">
                                            <input class="form-control" type="text" value="<?php echo $profile[0]->name; ?>" name="Type Your Name" placeholder="firstname">
                                        </div>
                                    </div>
                                 <div class="form-group">
                                        <label for="" class="col-sm-3 col-xs-12 control-label">
	Mobile Number
	</label>
	                                        <div class="col-sm-7 col-xs-10">
	                                            <input type="text" name="mobile" value="<?php echo $profile[0]->mobile; ?>" class="form-control" placeholder="mobile phone">
	                                        </div>
           
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 col-xs-12 control-label">Email</label>
                                        <div class="col-sm-7 col-xs-10">
                                            <input type="email" name="email" value="<?php echo $profile[0]->email; ?>" class="form-control" placeholder="email@yourcompany.com">
                                        </div>
                                    </div>

                                   

                                    <!--div class="form-group">
                                        <label for="" class="col-sm-3 col-xs-12 control-label">Password
</label>
                                        <div class="col-sm-7 col-xs-10">
                                            <input class="form-control" type="password" name="password" placeholder="Password
">
                                        </div>

                                        <div class="col-sm-2 col-xs-2">
                                            <button class="btn-icon"><i class="fa fa-globe"></i></button>
                                        </div>
                                    </div-->

                                    <!--div class="form-group">
                                        <label for="" class="col-sm-3 col-xs-12 control-label">Confirm Password</label>
                                        <div class="col-sm-7 col-xs-10">
                                            <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password">
                                        </div>

                                        <div class="col-sm-2 col-xs-2">
                                            <button class="btn-icon"><i class="fa fa-globe"></i></button>
                                        </div>
                                    </div-->

                                    <div class="form-group">
                                        <label for="" class="col-md-3 control-label">Privilege</label>
                                        <div class="col-md-7">
                                            <select name="privilege" class="form-control">
                                                <option value="">-- Select Your Optin --</option>
                                                <!--option value="super" <?php if($profile[0]->privilege=='super'){echo "selected"; } ?> >Super</option-->
                                                <option value="admin" <?php if($profile[0]->privilege=='admin'){echo "selected"; } ?> >Admin</option>
                                                <option value="user" <?php if($profile[0]->privilege=='user'){echo "selected"; } ?> >User</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 col-xs-12 control-label"></label>
                                        <div class="col-sm-7 col-xs-10">
                                            <div class="btn-group pull-right">
                                                <input class="btn btn-success" type="submit" name="profileEditBtn" value="Update">
                                                <!--input class="btn btn-danger" type="reset" value="Clear"-->
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-xs-2"></div>
                                    </div>
                            </div>
                        </div>

                        <div class="panel-footer">&nbsp;</div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
