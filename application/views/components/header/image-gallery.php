<!---->


<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation; ?>
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>Image Gallery</h1>
                </div>
            </div>
            
            <div class="panel-body">
                <!-- horizontal form -->
                    
                <div class="col-xs-12 no-padding">
                    <?php
                    $attr=array(
                        "class"=>"form-horizontal"
                        );
                    echo form_open_multipart('', $attr);?>
            
                    <div class="form-group">
                        <label class="col-md-2 control-label">Image Title <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="galleryTitle" class="form-control file" required placeholder="Maximum 100 characters">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Image<span class="req">*</span></label>
                        <div class="col-md-5">
                            <input id="input-test" type="file" name="gallery_image" required class="form-control file" data-show-preview="false" required data-show-upload="false" data-show-remove="false">
                        </div>
                    </div> 

                    <div class-"col-md-5">
                    <div class="btn-group ">
                        <input type="submit" style="margin-left:210px;" name="gallery_Save" value="Save" class="btn btn-primary">
                    </div>
                    </div>

                <?php form_close();?>
                </div>
            </div>

            <div class="panel-body">
                
                
                
               
                
               <div class="row" style="margin-top:20px;">
                   <div class="col-sm-12">
                        <div class="gallery image-gallery">
                            <?php foreach ($gallery_data as $key => $gallery) { ?>
                                <figure>
                                    <img src="<?php echo site_url($gallery->gallery_path)?>" alt="">
                                    <figcaption>
                                        <?php if(ck_action('header_menu', 'delete')){ ?>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this Data ?')" href="?delete_token=<?php echo $gallery->id; ?>">Delete</a>
                                        <?php } ?>
                                    </figcaption>
                                </figure>
                            <?php }?>

                            </div>
                   </div>
               </div>
                
                
               

                
                
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

