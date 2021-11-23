<!-- single page -->
<div class="col-md-9">
    <div class="row">
        <div class="single">
            
            <h3><?php if (isset($page_data[0])) { echo $page_data[0]->page_title;} ?></h3>
            <!-- style="float:left; width:100%; max-width:150px;max-width:765px;height: 300px; margin-right:10px; padding:5px; border:2px solid #000;" -->
            <?php if(isset($page_data[0])){ ?><img  style="width:100%;" src="<?php echo base_url($page_data[0]->page_path); ?>" alt=""> <?php }?>
			
			<p style="text-align:justify;">
              <?php 
                if (isset($page_data[0])) {
                    echo $page_data[0]->page_description; 
                }
                
              ?>
            </p>
            <?php if(!empty($page_data[0]->page_pdf)){ ?>
            <iframe class="pdf" src="<?php echo site_url($page_data[0]->page_pdf) ?>" style="width: 100%; border: none; min-height: 75vh;"></iframe>
            <?php } ?>
        </div>
    </div>
</div>
