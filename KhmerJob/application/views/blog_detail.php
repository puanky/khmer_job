 <!DOCTYPE html>
 <html>
 <head>
 	<title>blog detail</title>
 </head>
 <body>
	 <?php
	 	include("ng/db.php");
		if (isset($_POST["btn"])) 
		{
			$sql=$db->query("INSERT INTO tbl_comment(comment,cm_crea, bl_id) VALUES('".$_POST["txt"]."','".date('Y-m-d')."','".$_POST["txt_bl_id"]."')");
		}
	?>
<div class="container">
	<div class="row">
		<nav id="" class="navbar navbar-default" style="margin-bottom: 11px !important;">
	        <div class="container-fluid" style="max-width: 87%;">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>                        
	                </button>
	            </div>
		        <div class="collapse navbar-collapse" id="myNavbar">
		            <ul class="nav navbar-nav">
		                <li class="active"><a href="<?php echo base_url('blog');?>">Home</a></li>
		            </ul>
	                <ul class="nav navbar-nav navbar-right">
		                <div ng-app="myapp" ng-controller="empcontroller">
		                    <form action="<?php echo base_url('blog');?>" method = "post">
			                    <input style="margin-top: 8px; width: 140%" type="text" name="keyword" id="keyword" class="form-control input-sm" placeholder="Search...." />
			                </form>
			            </div>
	                </ul>
		        </div>
	    	</div><!-- /.container-fluid -->
		</nav><!-- class navbar navbar-default-->
	</div><!-- class row -->
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-9" style="background: #fff;">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-12">
					<div class="item-content">
						<div class="item-thumbnail" style="float: left;">
							<img style="margin-right: 10px;"border="0" src="<?php echo base_url('assets/uploads/Barbeque.png');?>">
						</div>
						<div class="item-title">
							<h3 style="color: #337ab7;"><?php echo $de_blog->title?></h3>
							<a href="" style="font-size: 12px;color: #a7a1a1;"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $de_blog->date_crea?></a><b style="margin-left: 54px"> Comment</b><hr />
						</div>
						<div class="item-snippet" style="text-align: justify;"><?php echo $de_blog->bl_desc?></div>
					</div>
				</div>
			</div><!-- row blog detail -->
			<div class="row" style="margin-top: 20px;">
				<div class="col-xs-12 col-sm-6 col-md-12">
					<?php foreach ($blog_comment as $value) {?>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-1">
								<i class="fa fa-user" aria-hidden="true" style="font-size: 37px; color: rgba(51, 122, 183, 0.62);"></i>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-10">
								<div class="item-snippet">
									<?php echo $value->comment?>
								</div>
							</div>
						</div><hr />
					<?php }?>
				

					<form id="comment" method="post">
						<textarea id="title" class="form-control"  name="title" placeholder="add a comment..."></textarea>
						<input type="hidden" value="<?php echo $de_blog->bl_id;?>" name="txt_bl_id" id="txt_bl_id"  class="form-control">
						<input style="margin:12px 0px;" type="submit"  class="btn btn-primary navbar-right" value="POST">
					</form>
				</div>
			</div><!-- class row comment -->
		</div><!--col-xs-12 col-sm-6 col-md-9-->

	  	<div class="col-xs-12 col-md-3" style="background: #e2e0e0;">
	  		<h4>Popular Posts</h4><hr />
	  		<?php foreach ($popular_blog as  $value) { ?>
		  		<div class="item-content">
					<div class="item-thumbnail" style="float: left;">
						<a href="<?php echo base_url('blog/blog_detail/'.$value->bl_id);?>">
							
							<img style=" margin-right: 10px; width: 90px;" src="<?php echo base_url('assets/uploads/Barbeque.png');?>">
						</a>
					</div>
					<div class="item-title">
						<a href="<?php echo base_url('blog/blog_detail/'.$value->bl_id);?>"><?php echo $value->title;?></a>
					</div>
					<div class="item-snippet"><?php echo substr($value->bl_desc, 0, 100)."......";?></div>
				</div><hr />
			<?php } ?>
	  	</div><!-- col-xs-12 col-md-3 for Popular Posts -->
	</div><!-- class row -->
</div><!-- class container -->

<script type="text/javascript">
	$(document).ready(function() {
		$('input[type="submit"]').attr('disabled', true);
		$('textarea').on('keyup',function() {
		    var textarea_value = $("#title").val();
		    if(textarea_value != '') {
		        $('input[type="submit"]').attr('disabled' , false);
		    }else{
		        $('input[type="submit"]').attr('disabled' , true);
		    }
		});
	});
</script>
 </body>
 </html>