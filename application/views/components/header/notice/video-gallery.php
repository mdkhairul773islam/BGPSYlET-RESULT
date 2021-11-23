<div class="container-fluid">
    <div class="row">

        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>Video Gallery</h1>
                </div>
            </div>

            <div class="panel-body">

                <!--blockquote class="form-head">

                    <h4>Add Gallery Images</h4>

                    <ol style="font-size: 14px;">
                        <li>1. fill all the required <mark>*</mark> fields</li>
                        <li>2. click the <mark>save</mark> button to save your informations</li>
                    </ol>

                </blockquote>

                <hr-->

                <!-- Gallery -->
                
                
                <div class="gallery clearfix">
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
                
                
                <hr>

                <!-- horizontal form -->
                    
                <div class="col-xs-12 no-padding">
                    <?php
                    $attr=array(
                        "class"=>"form-horizontal"
                        );
                    echo form_open_multipart('', $attr);?>
            
                    <div class="form-group">
                        <label class="col-md-2 control-label">Embaded Code <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="galleryTitle" class="form-control file" required placeholder="">
                        </div>
                    </div>

                    <div class-"col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" name="gallery_Save" value="Save" class="btn btn-primary">
                    </div>
                    </div>

                <?php form_close();?>
                </div>
                
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

