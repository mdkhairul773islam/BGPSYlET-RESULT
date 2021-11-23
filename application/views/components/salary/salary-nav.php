<div class="container-fluid none" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
    
    <?php if(ck_action("salary_menu","salary")){ ?>	
        <a href="<?php echo site_url('salary/salary'); ?>" class="btn btn-default" id="salary">
            Basic
        </a>
    <?php } ?>
    
    <?php if(ck_action("salary_menu","incentive")){ ?>	
        <a href="<?php echo site_url('salary/salary/incentive'); ?>" class="btn btn-default"  id="incentive">     
            Incentive
        </a>
    <?php } ?>
    
    <?php if(ck_action("salary_menu","bonus")){ ?>	
        <a href="<?php echo site_url('salary/salary/bonus'); ?>"  class="btn btn-default" id="bonus">
            Bonus
        </a>
    <?php } ?>
    
    <?php if(ck_action("salary_menu","deduction")){ ?>	
        <a href="<?php echo site_url('salary/salary/deduction'); ?>" class="btn btn-default" id="deduction"> 
            Deduction
        </a>
    <?php } ?>
    
    <?php if(ck_action("salary_menu","payment")){ ?>	
        <a href="<?php echo site_url('salary/payment'); ?>" class="btn btn-default" id="payment"> 
            Payment
        </a>
    <?php } ?>
    
    <?php if(ck_action("salary_menu","all_payment")){ ?>	
         <a href="<?php echo site_url('salary/payment/all_payment'); ?>" class="btn btn-default" id="all_payment"> 
            All Payment
        </a>
    <?php } ?>
    
    <?php if(ck_action("salary_menu","sheet")){ ?>	    
        <a href="<?php echo site_url('salary/salary/salary_sheet'); ?>" class="btn btn-default" id="sheet">
            Salary Sheet
        </a>
    <?php } ?>
    
        <!-- <a 
            href="<?php// echo site_url('salary/salary/report'); ?>" 
            class="btn btn-default" 
            id="report">    
        
            Report
        </a> -->
    </div>
</div>