<style>
    .btn-default {font-size: 12px;}
</style>

<div class="container-fluid none" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">
		
		<?php if(ck_action("payment_menu","field")){ ?>
    		<a href="<?php echo site_url('payment/payment'); ?>" class="btn btn-default" id="field">
    		Payment Field
    		</a>
        <?php } ?>
        
        <?php if(ck_action("payment_menu","payment_set")){ ?>
    		<a href="<?php echo site_url('payment/payment/payment_set'); ?>" class="btn btn-default" id="payment_set">
    			Set Payment Amount
    		</a>
        <?php } ?>
        
		<?php if(ck_action("payment_menu","setting")){ ?>
    		<a href="<?php echo site_url('payment/payment/setting'); ?>" class="btn btn-default" id="setting">
    			Month Set
    		</a>
        <?php } ?>
        
		<?php if(ck_action("payment_menu","receieve_payment")){ ?>
		<a href="<?php echo site_url('payment/receieve_payment'); ?>" class="btn btn-default" id="receieve_payment">
			Recieve Payment
		</a>
		<?php } ?>
		
		<?php if(ck_action("payment_menu","class_receieve_payment")){ ?>
		<a href="<?php echo site_url('payment/receieve_payment/class_wise_receive'); ?>" class="btn btn-default" id="class_receieve_payment">
			Class Wise Receive
		</a>
        <?php } ?>
        
        <?php if(ck_action("payment_menu","payment_due")){ ?>
		<a href="<?php echo site_url('payment/payment_due'); ?>" class="btn btn-default" id="payment_due">
			Payment Due
		</a>
        <?php } ?>
        
		<?php if(ck_action("payment_menu","payment_report")){ ?>
		<a href="<?php echo site_url('payment/payment_report'); ?>" class="btn btn-default" id="payment_report">
			Payment Report
		</a>
		<?php } ?>
		
		<?php if(ck_action("payment_menu","payment_recipt")){ ?>
		<a href="<?php echo site_url('payment/payment_report/payment_recipt'); ?>" class="btn btn-default" id="payment_recipt">
			Payment Recipt
		</a>
		<?php } ?>
		
		<?php if(ck_action("payment_menu","payment_field")){ ?>
		<a href="<?php echo site_url('payment/payment_report/field_report'); ?>" class="btn btn-default" id="payment_field">
			Field Report
		</a>
        <?php } ?>
        
    </div>
</div>
