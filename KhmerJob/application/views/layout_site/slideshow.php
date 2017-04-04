<style type="text/css">
	.box1{
		box-shadow: 1px 4px 5px #888888; 
	}
	.box1:hover .cbp-vm-image, #img1
	{
		-webkit-transform: scale(0.9);
    	transform: scale(0.9); 
	}
	.carousel-control.left{
			background-image: none;
		    background-image: -o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);
		    background-image: none;
		    background-image: none !important;
		    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
		    background-repeat: repeat-x;
	}
	.carousel-control.right{
		    background-image: none;
		    background-image: -o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);
		    background-image: none;
		    background-image: none !important;
		    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
		    background-repeat: repeat-x;
	}
</style>
	<div class="container" style="width: 1322px; padding: 0px;">
      	<div class="mix dogs col-sm-2">	  
		    <?php 
		    	foreach ($advertisement as $value) 
		    	{ 
		    		if($value->position=="left" and $value->page=="Home")
		    		{
		    ?>
				    	<a href="<?php echo $value->url?>" target="blnk" >
				    		<img class="img-responsive" style="width: 195px; height: <?php echo $value->height;?>px" src="<?php echo base_url('assets/uploads/'.$value->img);?>" alt="..."> 
				    	</a>
			<?php 
					}
				} 
			?> 
      	</div>
	    <div class="mix cats col-sm-8" style="padding: 0px; background: #fff;">
	      
	      	<marquee id="marquee" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="5"> 
	      		<?php  echo $mq->key_data1;?>
	      	</marquee>
	      	
	      	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<?php foreach ($slide_once as $value) {?>
							<img class="img-responsive" src="<?php echo base_url('assets/uploads/'.$value->slide_path);?>" style="width: 855; height: 371px;">
							<div class="carousel-caption"></div>
						<?php }?>
					</div>
					<?php foreach ($slide_multi as $value) {?>
						<div class="item">
							<img class="img-responsive" src="<?php echo base_url('assets/uploads/'.$value->slide_path);?>" style="width: 855; height: 371px;">
							<div class="carousel-caption">
								<h3><?php echo $value->slide_name;?></h3>
								<p><?php echo $value->slide_desc?></p>
							</div>
						</div>
					<?php }?>
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="row" style="background: #f1f1f1; padding: 5px"></div>
			<div class="">
				<div class="mix cats col-sm-12" id="products" style=" padding: 10px; background: white;">
		<div class="col-xs-2 col-md-3" style="padding: 0px;">
		 	<li class="dropdown" style="border: #bbbbbb 1px solid; padding: 6px;">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Short By Category <b class="caret"></b></a>
			    <ul class="dropdown-menu">
			       	<a href="<?php echo base_url('Product');?>" class="list-group-item">All Category</a>
			        <a href="" class="list-group-item" ng-click="loadProduct_by_Cat(x.Id)" ng-repeat="x in categories">{{x.Name}}</a> 
			    </ul>
			</li>
		</div>
	 	<div class="col-md-6"></div>
		<div class="col-md-3">
			<div class="row navbar-right">
			 	<strong>Display</strong>
		        <div class="btn-group">
		            <a href="#" id="list" class="btn btn-default btn-sm">
		            	<span class="glyphicon glyphicon-th-list"></span>List
		            </a> 
		            <a href="#" id="grid" class="btn btn-default btn-sm">
		            	<span class="glyphicon glyphicon-th"></span>Grid
		            </a>
		        </div>
	        </div>
	    </div>
	
	 	<div class="row">
			<div class="col-lg-12"><h5 style="background: #ff9800; height: 40px; padding: 10px; color: #fff;">{{get_product[0].Cat_name}}</h5></div>
		</div>
	    <div id="products" class="row list-group" style="box-shadow: none;">
	        <div class="item  col-sm-6 col-md-6 col-lg-3" style="border: none;" ng-repeat="x in get_product | filter:searchBox ">
	        	<span class="new" style="background: url(http://localhost:8888/ecommerce/assets/uploads/new_48.png); background: url(http://localhost:8888/ecommerce/assets/uploads/new_48.png);position: absolute;z-index: 99;top: -1px;left: 14px;display: inline-block;width: 46px;height: 48px;"></span>
	        	<a href="<?php echo base_url('product/product_page_detail/{{x.P_id}}')?>">
		            <div class="thumbnail box">
		                <img style="height: 130px;" class="rounded" title="{{x.P_name}}" src="<?php echo base_url('assets/uploads/{{x.Path}}');?>"/>
		                <div class="caption" style="border-top: 1px solid #f1f1f1;">
		                    <p class="group inner list-group-item-heading product_name" style="color: #006190">{{x.P_name}}</p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">${{x.Price}}</p>
		                        </div>
		                         <div class="col-xs-12 col-md-6">
		                         	<del><p class="lead" style="color: red">{{x.Pro}}</p></del>
		                         </div>
		                    </div><!-- class row -->
		                </div><!-- class caption -->
		            </div>
	            </a>
	        </div>
    	</div>
    	<div class="row">
	    	<div class="mix cats col-sm-12">
	    		<a href="<?php echo base_url('Product');?>"><h5  class="well well-sm" style="text-align: center;">View all</h5></a>
	    	</div> 
	    </div>
	</div><!-- class mix cats col-sm-8-->
			</div>
	    </div><!-- #this mix cats col-sm-8 --> 

	    <div class="mix dogs cats col-sm-2">
		   	<?php 
		   		foreach ($advertisement as $value) 
		   		{
		   			if($value->position=="right" and $value->page=="Home")
		   			{
		   	?>
				    	<a href="<?php echo $value->url?>" target="blnk" >
				      		<img class="img-responsive" style="width: 195px; height: <?php echo $value->height;?>px" src="<?php echo base_url('assets/uploads/'.$value->img);?>" alt="..."> 
				    	</a>
		    <?php 
		    		}
		    	} 
		    ?> 	
		</div>
	</div>    
<script>
	var app = angular.module('myApp',[]);
	app.controller('myCtrl',function($scope,$http){

	    $http.get("/ecommerce/ng/get_all_products.php")
		.then(function (response) {$scope.get_product = response.data.records;});

	    $http.get("/ecommerce/ng/get_category.php")
		.then(function (response) {$scope.categories = response.data.records;});

		$scope.loadProduct_by_Cat = function(values)
		{
		$http.get("/ecommerce/ng/loadProduct_by_Cat.php?cat_id="+values)
		.then(function (response) {$scope.get_product = response.data.records;}); 
		}

		$scope.btnAdd = function(name,id,qty,str)
		{
			var xmlhttp = new XMLHttpRequest();
			var xmlhttp2 = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() 
			 {
	            if (this.readyState == 4 && this.status == 200) 
	            {
	                document.getElementById("itemNum").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp2.onreadystatechange = function()
	        {
	        	if (this.readyState == 4 && this.status == 200) 
	        	{
	       			document.getElementById("display_cart").innerHTML = this.responseText;
			    }
	    	}

	    	xmlhttp.open("GET", "<?php echo base_url()?>product_c/add_to_cart/"+ name + "/" + id+"/"+qty+"/"+str, true);
			xmlhttp.send(); 

	        xmlhttp2.open("GET", "<?php echo base_url()?>product_c/display_cart", true);
	       	xmlhttp2.send();
		}
		$scope.removeItem = function(id)
		{
			alert(id);
		}

		$scope.checkout = function()
		{
			window.location.assign("product_c/checkout");
		}
		$scope.itemNum = 1;
});
</script>
<script type="text/javascript">
	   
	function itemRemove(id)
	{
		var xmlhttp = new XMLHttpRequest();
		var xmlhttp2 = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("itemNum").innerHTML = this.responseText;
	            }
	        };
	    xmlhttp2.onreadystatechange = function()
	        {
	        	if (this.readyState == 4 && this.status == 200) {
	       				document.getElementById("display_cart").innerHTML = this.responseText;
	       		}
	        };

	    xmlhttp.open("GET", "<?php echo base_url()?>product_c/remove_item/"+ id, true);
	    xmlhttp.send();

	    xmlhttp2.open("GET", "<?php echo base_url()?>product_c/display_cart", true);
	    xmlhttp2.send();
	}
	
		$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>