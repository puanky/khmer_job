<div class="col-md-8">
	<div class="row">
		<div class="panel panel-default">
	        <div class="panel-body">
	        	<div class="row">
	      			<div class="col-md-12">
		        		<div class="col-md-2">
		        			
		        		</div>
		        		<div class="col-md-8"></div>
		        		<div class="col-md-2" style="border:#d6d1d1 1px solid;">
		        			<p>Skill ID: 001</p>
			        	</div>
		        	</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3">
						<label>Priority:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control input-sm">
							<option>Premium</option>
							<option>Standard</option>
						</select>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3">
						<label>Priority Duration:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control input-sm">
							<option>180 days</option>
							<option>365 days</option>
						</select>
					</div>

				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3">
						<label>Location:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control input-sm">
							<option>PP</option>
						</select>
					</div>

				 </div><hr />
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-12">
						<div class="col-md-4">

						</div>
						<div class="row">
							<div class="col-md-4">
								<a href="#" class="thumbnail">
								    <img src="<?php echo base_url('assets/uploads/User Red.png');?>" style="width: 100%">
								</a>
							</div>
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>
				<div class="panel panel-default" style="margin-top: 20px;">
		        	<div class="panel-body">
						<div class="row">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Name:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('name', set_value('name'),'class="form-control input-sm" placeholder="name" autocomplete="off" ')?>
								</div>
						 	</div>
						</div>

						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Address:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('address', set_value('address'),'class="form-control input-sm" placeholder="Address..." autocomplete="off" ')?>
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Tel:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('tel', set_value('tel'),'class="form-control input-sm" placeholder="tel" autocomplete="off" ')?>
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>email:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('email', set_value('email'),'class="form-control input-sm" placeholder="email..." autocomplete="off" ')?>
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Line:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('line', set_value('line'),'class="form-control input-sm" placeholder="line" autocomplete="off" ')?>
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>WahtsApp:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('whatsapp', set_value('whatsapp'),'class="form-control input-sm" placeholder="WhatsApp..." autocomplete="off" ')?>
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Website:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('website', set_value('website'),'class="form-control input-sm" placeholder="Website..." autocomplete="off" ')?>
								</div>
						 	</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<b>Abount Me</b>
						<?php echo form_textarea('website', set_value('website'),'class="" placeholder="Website..." autocomplete="off" ')?>
						
					</div><hr />
				</div><!-- this Abount Me-->
				<div class="col-md-12">
					<div class="row">
						<b>SKILL/SERVICE</b>
						<?php echo form_textarea('website', set_value('website'),'class="" placeholder="Website..." autocomplete="off" ')?>
					</div>
				</div><!-- this Abount Me-->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-10">
							<?php echo form_submit('website', 'Preview','class="btn btn-primary btn-sm" placeholder="Website..." autocomplete="off" ')?>
							
							<button class="btn btn-primary btn-sm">Delete</button>
							<button class="btn btn-primary btn-sm">Save</button>
						</div>
						<div class="col-md-2">
							<button class="btn btn-primary btn-sm">Submit</button>
						</div>
					</div>
				</div>
		    </div>
		</div>
	</div>
</div>