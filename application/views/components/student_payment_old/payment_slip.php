<style>
.form-element-custom{
	padding: 5px 0px;
}

form.horizontal .form-element-custom > label{
	text-align: left;
	width: 25%;
}

.horizontal .form-element-custom > label input[type="checkbox"]{
	float: left;
	margin-top: 4px;
}

.form-element-custom input[type="text"]{
	height: 25px;
	width: 25%;
}

.payment-slip{
	border: 1px solid #000;
	max-width: 600px;
	background: #fff;
	margin: 0px auto;
}

.payment-slip img{
	width: 100%;
	max-width: 600px;
	height: auto;
}

table.payment-top-table{
	margin: 0 0 15px;
	border: none;
	box-shadow: 0px 0px 5px transparent;
}

table.payment-top-table tr,
table.payment-top-table th,
table.payment-top-table td{
	border: none;
	text-align: left;
	background: #fff;
}

table.payment-top-table tr:first-child td{
	padding-bottom: 10px;
}

/*table.payment-bottom-table td:first-child{
	text-align: left;
}*/

table.payment-bottom-table tr th:nth-child(2){
	text-align: center;
}

table.payment-bottom-table td:nth-child(2){
	padding-left: 20px;
    padding-right: 15px;
    text-align: left;
}

table.payment-bottom-table th:nth-child(3){
	text-align: center;
}

table.payment-bottom-table td:nth-child(3){
	text-align: center;
	padding-right: 20px;
}

.title{
	text-align: center;
}

.payment-slip p{
	padding: 5px 5px 0;
}

.title b{
	margin-right: -230px;
	background: rgba(0,150,135,1);
	color: #fff;
	padding: 5px 8px;
	border-radius: 16px;
}

.title span{
	float: right;
	color: rgba(0,0,0,0.5);
}

p.half span{
	margin-left: 30%;
}

p.signature{
	padding-top: 60px;
}

p.signature span{
	border-top: 1px solid rgba(0,0,0,0.5);
}

    /* print media*/
	@page{
		margin-top: 20px;
		margin-bottom: 20px;
	}
    @media print{
		aside.left-aside,
		nav.navigation,
		table tr.table-top,
		header,
		.alert-success,
		.alert-warning{
			display: none;
		}
		.payment-slip{
			margin: 0 auto;
			border-left: 1.5px solid #000;
			border-top: 1.5px solid #000;
		}
		button.button{display: none;}
		table{
			width: 100%;
			box-shadow: 0 0 0 transparent ;
		} 
		
		table.payment-top-table tr td{
			line-height: 5px;
		}
		table.payment-bottom-table,
		table.payment-bottom-table tr,
		table.payment-bottom-table tr th,
		table.payment-bottom-table tr td{
			border: 1px solid #000;
			border-collapse: collapse;
		}
		.title b{
			border-bottom: 2px solid rgba(0,0,0,0.2) !important;
		}
		table.payment-bottom-table tr td:first-child{
			text-align: center;
		}
		
		
		p.title b{
			border-bottom: 1px solid rgba(0,0,0,0.3);
			border-radius: 0;
		}
		p span.authorised{
			border-top: 1.5px solid rgba(0,0,0,0.3);
		}		
    }
</style>

<!-- one column page main container start here -->

<div class="column global-pad">
<?php   echo $message; ?>
<div class="row payment-slip"> 
<?php
 if($message== NULL)
  {	
   	?>

        <button class="button" onclick="print();">Print</button>
        <img src="<?php echo site_url('public/upload/banner/banner.png'); ?>" alt="banner" />		
        <table class="payment-top-table">
            <tr>
                <td colspan="3"><p class="title"><b>Payment Slip</b></p></td>
            </tr>
            <tr>
                <td colspan="2">Roll No:<?php echo $_POST['roll'];?><td>
                <td>Date: <?php echo $_POST['date'];?></td>
            </tr>
            <tr>
                <td colspan="3" style="padding-left:0;"><p>Student's Name: <b><?php echo ucwords($_POST['name']);?></b></p></td>
                <td colspan="3" style="padding-left:0;"><p>Month: <b>
	                 <?php 
	                 $month=array('1'=>'January','2'=>'February','3'=>'March','4'=>'April','5'=>'May','6'=>'June','7'=>'July','8'=>'August','9'=>'September','10'=>'October','11'=>'November','12'=>'December'); 
	                 $m=explode('-',$_POST['date']);
	                 echo $month[$m[1]];
	                 ?>
	                 </b>
	                 </p>
                 </td>
            </tr>

            
			<tr>
                <td>Class: 
				<?php
				  if($_POST['class']=='0A')
					{
					  echo " Atfal(Alif)";	
					}
					else if($_POST['class']=="0B")
					{
						echo "Atfal(Jim)";
					}
				   else if($_POST['class']=="1A")
					{
						echo "Awal";
					}
				
				  else if($_POST['class']=="02")
					{
						echo "Sani";
					}
				 else if($_POST['class']=="03")
					{
						echo "Calis";
					}
				else if($_POST['class']=="04")
					{
						echo "Rabe";
					}
				else if($_POST['class']=="05")
					{
						echo "Khamesh";
					}
				else if($_POST['class']=="06")
					{
						echo "Sadesh";
					}
				else if($_POST['class']=="07")
					{
						echo "Sabe";
					}
				else if($_POST['class']=="08")
					{
						echo "Saman";
					}
				else if($_POST['class']=="09")
					{
						echo "Tase";
					}
					
				else if($_POST['class']=="10")
					{
						echo "Asher";
					}
					else
					{
						echo "Hifz";
					}
				 
				?>
				<td>               
               
            </tr>
        </table>

        <table class="payment-bottom-table">
            <tr>
				<th><b>S.L</b></th>
                <th><b>Fee</b></th>
                <th><b>Taka</b></th>
            </tr>
			<?php 
			foreach($_POST['check'] as $key=>$value):
			{
			 ?>
			  <tr>
				<td><?php echo($key+1);?></td>
                <td><?php echo ucwords(str_replace('_',' ',$value)); ?></td>
			    <td><?php echo $_POST[$value]; ?></td>
              </tr>
			 <?php				
			}
			endforeach;
			
			?>
           
   
            <tr>
				<td>&nbsp;</td>
                <td><b>Total</b></td>
                <td><b><?php echo $_POST['total'];?></b></td>
            </tr>
        </table>
        <p>(In Words): <b style="text-transform: uppercase;"><?php echo $_POST['in_words'];?></b> Taka Only</p>
        <p class="signature">
            <span style="margin-left: 5%;">&nbsp;</span> 
            <span style="margin-left: 15%;">&nbsp;</span> 
            <span class="authorised" style="float: right;margin-right: 5%;">Authorised Signature</span>
        </p>
        <p style="text-align:center;font-size:12px">শিক্ষার্থী দ্বারা আর্থিক লেন-দেন বাঞ্ছনীয় নয়। বেতন পরিশোধের রশিদ যত্ন করে রেখে দিবেন। </p>
        <p style="text-align:center;"><small>Software By : <a href="">Freelance IT Lab</a></small></p>
	    <?php
	}
	
	  
	  ?>
	
	
    </div>
</div>
<!-- one column page main container end here -->



