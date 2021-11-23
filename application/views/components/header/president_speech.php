<style>
    /* texteditor style */
#mceu_22{
    border: 1px solid #eee !important;
}
</style>

<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation; ?>
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>Chairman's Speech</h1>
                </div>
            </div>

            <div class="panel-body">

                <!--blockquote class="form-head">

                    <h4>Add Principal Speech</h4>

                    <ol style="font-size: 14px;">
                        <li>1. fill all the required <mark>*</mark> fields</li>
                        <li>2. click the <mark>save</mark> button to insert data</li>
                    </ol>

                </blockquote>

                
                <hr-->

                <!-- horizontal form -->
                
                    
                    <div class="col-sm-12">

                        <?php
                            $attr=array();
                            echo form_open_multipart('', $attr);
                        ?>

                            <input type="hidden" value="<?php echo custom_fetch($pr_speech_data,'speech_path'); ?>" id="hidden_image_url" name="hidden_image_url">
                            <input type="hidden" value="<?php echo custom_fetch($pr_speech_data,'id'); ?>" id="hidden_id" name="id_num">
                            
                            <div class="form-group clearfix">
                                <img class="pull-right" src="<?php echo base_url(custom_fetch($pr_speech_data,'speech_path')); ?>" class="img-thumbnail" style="height: 100px;" alt="">
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-2">Image <span class="req">*</span></label>
                                <div class="col-md-5">
                                <input id="input-test" name="attachFile" type="file" class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Description <span class="req">*</span></label>
                                <textarea name="description" id="tinyTextarea" class="form-control" cols="30" rows="15"  style="font-size: 15px;"><?php echo custom_fetch($pr_speech_data,'speech_speech') ?></textarea>
                            </div> 

                           <?php
                                $btn_info=array(
                                    'name'=>'add_speech',
                                    'value'=>'Save',
                                    'class'=>'btn-primary'
                                );
                               if($pr_speech_data!=null){
                                $btn_info['name']='update_speech';
                                $btn_info['value']='Update';
                                $btn_info['class']='btn-success';
                               }
                           ?>

                            <div class="btn-group pull-right">
                                <input type="submit" name="<?php echo $btn_info['name']; ?>" value="<?php echo $btn_info['value']; ?>" class="btn <?php echo $btn_info['class'];?>">
                            </div>
                            
                        <?php echo form_close(); ?>
                    </div>
                </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>