<div class="container-fluid none" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		<a href="<?php echo site_url('student_payment/payment'); ?>" class="btn btn-default" id="add-new">
			Add Payment
		</a>
			
		<a href="<?php echo site_url('student_payment/payment/paymentHistory'); ?>" class="btn btn-default" id="all">
			Payment History
		</a>

		<a href="<?php echo site_url('student_payment/payment/monthly_payment_history'); ?>" class="btn btn-default" id="m-history">
			Monthly Payment History
		</a>
    </div>
</div>