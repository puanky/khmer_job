<h3>Checkout</h3>
<p>*Please <strong>Login</strong> or <strong>Register</strong> to checkout.</p>
<div class="row" style="margin-left:301px;">
	<table class="table table-bordered" style="width:850px;">
		<thead>
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$total = 0;
				foreach ($product as $key => $value) {
					$total = $total + ($value['price']*$value['qty']);
			?>
					<tr>
						<td><?php echo ($key+1)?></td>
						<td><?php echo $value['name']?></td>
						<td><?php echo "$".$value['price']?></td>
						<td><?php echo $value['qty']?></td>
						<td><?php echo "$".($value['price']*$value['qty'])?></td>
					</tr>

			<?php }?>
					<tr>
						<td colspan="3"></td>
						<td><strong>Total</strong></td>
						<td><strong><?php echo "$".$total?></strong></td>
					</tr>
		</tbody>
	</table>

	<div class="pull-right" style="margin-right:35px;">
		<div class="form-group">
			<button class="btn btn-default" ng-click="slide('panel')" type="button">Register</button>
			<button class="btn btn-default" ng-click="slide('login')" type="button">Login</button>
		</div>
	</div>

	<div class="row" id="panel" style="display:none;">
		<div class="col-lg-11">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Registration Info</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="<?php echo base_url()?>product_c/process/register" method="post">
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
						    <div class="col-sm-10">
						      <input type="text" name="txtRegName" class="form-control" placeholder="Enter full name here..." required="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPassword3"  class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" name="txtRegEmail" placeholder="Enter email here..." required="">
						    </div>
						  </div>
						   <div class="form-group">
						    <label for="inputPassword3"  class="col-sm-2 control-label">Phone Number</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="txtRegPhone" placeholder="Enter phone number here...">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button class="btn btn-success" type="submit">Save & Checkout</button>
						      <button type="button" class="btn btn-default" ng-click="slideDown('panle')">Cancel</button>
						    </div>
						  </div>
						</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row" id="login" style="display:none;">
		<div class="col-lg-11">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login Info</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="<?php echo base_url()?>product_c/process/login" method="post">
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="txtLoginName" placeholder="Enter user name here..." required="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
						      <input type="password" name="txtLoginPassword" class="form-control" placeholder="Enter password here..." required="">
						    </div>
						  </div>
						  
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button class="btn btn-success" type="submit">Login & Checkout</button>
						      <button type="button" class="btn btn-default" ng-click="slideDown('panel1')">Cancel</button>
						    </div>
						  </div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var app = angular.module('myApp',[]);
	app.controller('myCtrl',function($scope,$http){
		$scope.slide = function(panel)
		{
			$("#"+panel).slideToggle();	
			if(panel=='login')
			{
				$("#panel").slideUp();
				
			}else
			{
				$("#login").slideUp();
			}
		}

		$scope.slideDown = function(panel)
		{
			$("#"+panel).slideToggle();	
		}
	});
</script>
