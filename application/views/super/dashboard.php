<div class="container-fluid">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('super/dashboard');?>">Home</a></li>            
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
   		<?php echo $this->session->flashdata('error'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Welcome to Dashboard!</h1>                
            </div>

            <div class="panel-body">
              
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
  </div>
</div>
