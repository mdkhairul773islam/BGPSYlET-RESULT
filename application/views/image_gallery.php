<style>
    .view-gallery{
        width:  100%;
        height:  200px;
    }
    .view-gallery img{
        width:  100%;
        height:  100%;
        border:  1px solid #eee;
        padding:  6px;
        background: #fff;
    }
    @media screen and (max-width: 550px) {
        .view-gallery{
            height:  170px;
        }
    }

</style>
<!-- gallery -->
<div class="col-md-9">
    <div class="row">

    <h3 style="font-size: 18px; font-weight: bold; color: rgba(5, 29, 29, 1); border-bottom: 1px solid rgba(0, 0, 0, 0.1); padding-bottom: 5px; margin-top: 5px;">Image Gallery</h3>

        <!-- Small modal -->
        <?php foreach ($gallery_data as $key => $gallery) {?>
        <a style="margin: 0;" class="mg-btm col-sm-4 col-xs-6" href="<?php echo site_url($gallery->gallery_path); ?>" data-lightbox="example-set" data-title="<?php echo $gallery->gallery_title; ?>">
            <div class="row">
                <figure class="view-gallery">
                    <img src="<?php echo site_url($gallery->gallery_path); ?>" alt="" />
                </figure>
            </div>
        </a>
        <?php } ?>

    </div>
</div>
