<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</nav>
	<div id="page-wrapper">
		<div class="container_fluid" style="margin-top:40px;">
			<div class="row">
				<div class="col-lg-12">				
					<h1 class="page-header">Form Promotion Detail</h1>				
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Promotion detail Information</h3>
						</div>
						<div class="panel-body">
								<div class="col-lg-2">
	                                <img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/uploads/'.$detail->path);?>"/>
	                            </div>
								<div class="col-lg-10">								
	                                <p><b>Promotion name: </b><?php echo $detail->pro_name!=NULL? $detail->pro_name : $detail->occ_name;?></p>
	                                <p><b>Promotion type: </b><?php echo $detail->pro_type=='d' ? 'Discount' : ($detail->pro_type=='a' ? 'Add product' : 'kupun');?></p>
	                                <p><b>Category name: </b><?php echo $detail->cat_name;?></p>                               

	                            
	                                <p><b>Product name: </b><?php echo $detail->p_name;?></p>

	                                <?php if($detail->discount_percent!=0){ ?>
	                                	<p><b>Discount percent: </b><?php echo $detail->discount_percent."%";?></p>
	                                <?php }else{?>                                                             		                                
		                                <p><b>Quantity buy: </b><?php echo $detail->qty_buy;?></p>                                       
		                                <p><b>Item free: </b><?php echo $detail->item_free;?></p>
		                                <p><b>Quantity free: </b><?php echo $detail->qty_free;?></p>
		                            <?php }?>

	                                <p><b>Date from: </b><?php echo date("d/m/Y",strtotime($detail->date_from));?></p>
	                                <p><b>Date to: </b><?php echo date("d/m/Y",strtotime($detail->date_to));?></p>                                
	                                <a href="<?php echo site_url($cancel);?>" class="btn btn-default fa fa-close"> Close</a>
	                            </div>										
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
<script>
	$("#btnCancel").click(function(){
    	window.location.assign("<?php if(isset($cancel)){echo base_url($cancel);}?>");
	});
</script> 
