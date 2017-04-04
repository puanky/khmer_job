
<link href="<?php echo base_url('assets/magiczoom/magiczoom.css');?>" rel="stylesheet" type="text/css" media="screen"/>
<link href="magiczoom/bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="<?php echo base_url('assets/magiczoom/magiczoom.js');?>" type="text/javascript"></script>
<link href="<?php echo base_url('assets/magiczoom/style_zoom.css')?>" rel="stylesheet" type="text/css" media="screen"/>
<script src="<?php echo base_url('assets/magiczoom/jquery-1.12.3.min.js');?>"></script>
<link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/style.css" rel="stylesheet" type="text/css">


<body>
<div class="container" ng-app = "mainApp">
<div class="col-lg-12" style="margin-bottom: 10px;">
	<div class="row">
		<?php 
		    foreach ($advertisement as $value) 
		    {
		    	if($value->position=="center" and $value->page=="page detail")
		    	{
		?>
		      		<a href="<?php echo $value->url?>" target="blnk" >
						<img class="img-responsive" style=" width: 100%; height: <?php echo $value->height;?>px" src="<?php echo base_url('assets/uploads/'.$value->img);?>" alt="..."> 
					</a>
		<?php 
				}
			}
		?>
	</div>
</div>
	<div class="col-xs-12 col-md-9" style="padding: 0px; background: #fff; "> 
		<div class="col-xs-12">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url('Home');?>"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="<?php echo base_url('Home/category/'.$de_value->cat_id.$de_value->cat_name);?>"><?php echo $de_value->cat_name?></a></li>
					<li class="active"><?php echo $de_value->p_name;?></li>
				</ol>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="app-figure" id="zoom-fig">
				<a id="Zoom-1" class="MagicZoom" href="<?php echo base_url('assets/uploads/'.$de_value->path);?>">
					<img src="<?php echo base_url('assets/uploads/'.$de_value->path);?>" alt=""/>
				</a>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="col-lg-12 border">
			   <h2 id="product_titel"><?php echo $de_value->p_name;?></h2>
			</div>
			<div class="col-lg-12 border">
				<div class="col-lg-4">Prices:</div>
				<div class="col-lg-6"><b style="color: red"><?php echo "$".$de_value->price; ?></b> <del><?php echo $de_value->pro_type; ?></del></div>
			</div>
			<div class="col-lg-12 border">
				<div class="col-lg-4">Quantity : </div>
				<div class="col-lg-6"> <input class="form-control" type="number" name="txtItemNum" ng-model="itemNum"></div>
			</div>
			<div class="col-lg-12 border">
				<div class="col-lg-4">Sizes</div>
				<div class="col-lg-6">
					<select class="form-control">
						<option>sdfsdfds</option>
					</select>
				</div>
			</div>
			<div class="col-lg-12 border">
				<div class="col-lg-4">Colors</div>
				<div class="col-lg-6">
					<select class="form-control">
						<option></option>
					</select>
				</div>
			</div>
			<div class="col-lg-12" style="padding: 10px 90px 39px;">
				<?php
					$price=$de_value->price;
					$p_id=$de_value->p_id;
					$name=$de_value->p_name;
				?>
				<button class="btn btn-warning" ng-click="addTocart(itemNum,0)">Add to cart <i class="glyphicon glyphicon-shopping-cart"></i></button>
				<a href="<?php echo base_url('index.php/product_c'); ?>" class="btn btn-primary" type="button">Back</a>
			</div>
		</div>

		<div class="col-lg-12">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Desciption</a></li>
				<li><a data-toggle="tab" href="#menu1">Detail</a></li>
			</ul>
			<div class="tab-content" style="border-left: 1px solid #ddd; margin-bottom: 20px; border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;">
				<div id="home" class="tab-pane fade in active" style="padding: 10px;">
					<p><?php echo $de_value->p_desc; ?></p>
				</div>
				<div id="menu1" class="tab-pane fade" style="padding: 10px;">
					<div class="tab-pane fade active in" id="home">
		                <h4>Product Information</h4>
		                <table class="table table-bordered">
			                <tbody>
			                    <tr class="techSpecRow">
			                      	<th colspan="2">Product Details</th>
			                    </tr>
			                    <tr class="techSpecRow">
			                      	<td class="techSpecTD1">Store Name:</td>
			                      	<td class="techSpecTD2"><?php echo $de_value->str_name?></td>
			                    </tr>
			                    <tr class="techSpecRow">
			                      	<td class="techSpecTD1">Brand Name:</td>
			                      	<td class="techSpecTD2"><?php echo $de_value->brn_name?></td>
			                    </tr>
			                    <tr class="techSpecRow">
			                      	<td class="techSpecTD1">Model:</td>
			                      	<td class="techSpecTD2"><?php echo $de_value->model?></td>
			                    </tr>
			                    <tr class="techSpecRow">
			                      	<td class="techSpecTD1">Released on:</td>
			                      	<td class="techSpecTD2"><?php echo $de_value->date_release?></td>
			                    </tr>
			                    <tr class="techSpecRow">
			                      	<td class="techSpecTD1">Dimensions:</td>
			                      	<td class="techSpecTD2"><?php echo $de_value->dimension?></td>
			                    </tr>
			                    <tr class="techSpecRow">
			                      	<td class="techSpecTD1">Display size:</td>
			                      	<td class="techSpecTD2"><?php echo $de_value->size?></td>
			                    </tr>
			                </tbody>
		                </table>
	              	</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12" id="products" style=" padding: 10px; background: white;">
	     	
	 		
	
		 	<div class="row">
				<div class="col-lg-12"><h5 style="background: #ff9800; height: 40px; padding: 10px; color: #fff;">Product Related</h5></div>
			</div>
		    <div id="products" class="row list-group" style="box-shadow: none;">
		        <div class="item  col-xs-12 col-md-6 col-lg-3" style="border: none;" ng-repeat="x in get_product | filter:searchBox ">
		        	<span class="new" style="background: url(http://localhost:8888/ecommerce/assets/uploads/new_48.png); background: url(http://localhost:8888/ecommerce/assets/uploads/new_48.png);position: absolute;z-index: 99;top: -1px;left: 14px;display: inline-block;width: 46px;height: 48px;"></span>
		        	<a href="<?php echo base_url('product/product_page_detail/{{x.P_id}}')?>">
			            <div class="thumbnail box">
			                <img style="height: 130px;" class="group list-group-image" title="{{x.P_name}}" src="<?php echo base_url('assets/uploads/{{x.Path}}');?>"/>
			                <div class="caption" style="border-top: 1px solid #f1f1f1;">
			                    <p class="group inner list-group-item-heading product_name" style="white-space: nowrap; width: 10em; overflow: hidden; text-overflow: ellipsis; color: #006190;">{{x.P_name}}</p>
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
	    </div><!-- product -->
		<!-- <div class="col-xs-12 col-md-12" style="margin-top: 7px;" > 
		<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
			<div class="col-md-3" style="padding: 1px;">
		        <li class="dropdown" style="padding: 6px; border: #bbbbbb 1px solid;">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Short By Category <b class="caret"></b></a>
		            <ul class="dropdown-menu">
		                <a href="<?php echo base_url('Product');?>" class="list-group-item">All Category</a>
		                <a href="" class="list-group-item" ng-click="loadProduct_by_Cat(x.Id)" ng-repeat="x in categories">{{x.Name}}</a> 
		            </ul>
		        </li>
		    </div>
		    <div class="cbp-vm-options">
				<a style="text-decoration: none; color: #5d5b5b; font-size: 18px;">View:</a>
				<a href="#" class="cbp-vm-selected" data-view="cbp-vm-view-grid"><i class="fa fa-th" aria-hidden="true"></i></a>
				<a href="#"  data-view="cbp-vm-view-list"><i class="fa fa-th-list" aria-hidden="true"></i></a>
			</div>
			<div class="head navbar-default" style="border-radius:0px;height:41px;padding:12px;color:white;">Product Listing</div>
			<ul>
				<li class="box1" style="box-shadow: 1px 4px 5px #888888;  margin-left:18px;" ng-repeat="x in get_product | filter:searchBox " >
					<a class="cbp-vm-image" href="<?php echo base_url('product/product_page_detail/{{x.P_id}}')?>">
						<img id="img1" title="{{x.P_name}}" src="<?php echo base_url('assets/uploads/{{x.Path}}');?>">
					</a>
					<h5 class="cbp-vm-title product_name" style="white-space: nowrap; width: 10em; overflow: hidden; text-overflow: ellipsis; color: #006190;">{{x.P_name}}</h5>
					<div class="cbp-vm-price">${{x.Price}}</div>
					<del>$30.00</del>
					<div class="cbp-vm-details">
					</div>
					<!-- <input type="number" style="width:50px;" name="txtItemNum" ng-model="itemNum"> -->
						
					<!--<button class="btn btn-warning" ng-click="btnAdd(x.P_name,x.P_id,itemNum,x.Store)">Add to Cart</button>	
				</li>
			</ul>
	   </div> 
	</div> -->
	</div>
	<div class="col-lg-3">
		<div class="row">
			<?php 
		    	foreach ($advertisement as $value) 
		    	{
		    		if($value->position=="right" and $value->page=="page detail")
		    		{
		    	?>
		      			<a href="<?php echo $value->url?>" target="blnk" >
						    <img class="img-responsive" style="width: 95.4%; margin-left: 12px; height: <?php echo $value->height;?>" src="<?php echo base_url('assets/uploads/'.$value->img);?>" alt="..."> 
						</a>
				<?php 
						}
					}
				?>
			</div>
	</div>	
</div>
    </div>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cart Items</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
        	<thead>
        		<tr>
        			<th>No.</th>
        			<th>Name</th>
        			<th>Quantity</th>
        			<th>Price</th>
        			<th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr ng-repeat="(key, value) in items">
        			<td>{{$index+1}}</td>
        			<td>{{value[1]}}</td>
        			<td>{{value[3]}}</td>
        			<td>{{value[3]*value[2]|currency}}</td>
        			<td><a href="#" ng-click="removeItem($index)">Remove</a></td>
        		</tr>
        	</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnCheckout" class="btn btn-primary">Check Out</button>
        
      </div>
    </div>
  </div>
</div>
</body>


<script src="/ecommerce/assets/bower_components/bootstrap/js/angular-route.js"></script>
<script>
    var app = angular.module('myApp',[]);
    app.controller('myCtrl',function($scope,$http){

        var arr = [];
        var i=0,j=0,total = 0;
        var txt = "";
        $scope.itemNum = 1;
	    
	    $http.get("/ecommerce/ng/get_product_related.php")
		.then(function (response) {$scope.get_product = response.data.records;});

	    $http.get("/ecommerce/ng/get_category.php")
		.then(function (response) {$scope.categories = response.data.records;});

		$scope.loadProduct_by_Cat = function(values)
		{
		$http.get("/ecommerce/ng/loadProduct_by_Cat.php?cat_id="+values)
		.then(function (response) {$scope.get_product = response.data.records;}); 
		}

		
});
</script>  
<script type="text/javascript">
	$("#btnCheckout").click(function(){$()});
</script>  