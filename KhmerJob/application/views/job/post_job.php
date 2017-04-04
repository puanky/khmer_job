<div class="col-md-8">
	<div class="row">
		<div class="panel panel-default">
	        <div class="panel-body">
	        	<div class="row">
	      			<div class="col-md-12">
		        		<div class="col-md-2" style="border:#d6d1d1 1px solid">
		        			<p>Job 001</p>
		        		</div>
		        		<div class="col-md-8"></div>
		        		<div class="col-md-2" style="border:#d6d1d1 1px solid;">
		        			<p>Job ID: 001</p>
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
						<label>Duration:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control input-sm">
							<option>15 days</option>
							<option>30 days</option>
						</select>
					</div>

				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-3">
						<label>Job Title:</label>
					</div>
					<div class="col-md-6">
						<?php echo form_input('job_title', set_value('job_title'),'class="form-control input-sm" placeholder="Job Title..." autocomplete="off" ')?>
					</div>

				 </div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-12">
						<label>Job Description:</label>
						<?php echo form_textarea('job_descr', set_value('job_descr'))?>
					</div>
					<div class="col-md-12">
						<label>Requirement:</label>
						<?php echo form_textarea('requirement', set_value('requirement'))?>
					</div>
					<div class="col-md-12">
						<label>Other Benafits</label>
						<?php echo form_textarea('benafits', set_value('benafits'))?>
					</div>
				
				 </div>
				 <div class="panel panel-default" style="margin-top: 20px;">
		        	<div class="panel-body">
						<div class="row">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Contact Name:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('contact_name', set_value('contact_name'),'class="form-control input-sm" placeholder="Contact Name..." autocomplete="off" ')?>
								</div>

						 	</div>
						</div>

						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Phone:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('phone', set_value('phone'),'class="form-control input-sm" placeholder="Phone Number..." autocomplete="off" ')?>
								</div>

						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Email:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('email', set_value('email'),'class="form-control input-sm" placeholder="Your email..." autocomplete="off" ')?>
								</div>

						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Adress:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('email', set_value(''),'class="form-control input-sm" placeholder="Your Address..." autocomplete="off" ')?>
								</div>

						 	</div>
						</div>
					</div>
				 </div>

				 <div class="panel panel-default" style="margin-top: 20px;">
		        	<div class="panel-body">
						<div class="row">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Posting Date:</label>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control input-sm">
								</div>

						 	</div>
						</div>

						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>End Date:</label>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control input-sm">
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Contract:</label>
								</div>
								<div class="col-md-6">
									<select class="form-control input-sm">
										<option>Full Time</option>
										<option>Part Time</option>
										<option>Less Than 3 months</option>
										<option>From 3 to 6 months</option>
										<option>From 6 to 12 months</option>
										<option>More than 1 Years</option>
										<option>Internship</option>
									</select>
								</div>

						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Gender:</label>
								</div>
								<div class="col-md-6">
									<select class="form-control input-sm">
										<option>Male</option>
										<option>Female</option>
										<option>Unspecifid</option>
									</select>
								</div>

						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Age:</label>
								</div>
								<div class="col-md-6">
									<select class="form-control input-sm">
										<option>18 - 25</option>
										<option>25 - 32</option>
										<option>32 - 37</option>
										<option>37 - 45</option>
										<option>over 45</option>
										<option>Unspecified</option>
									</select>
								</div>

						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Salary Range:</label>
								</div>
								<div class="col-md-6">
									<select class="form-control input-sm">
										<option>150$ - 300$</option>
										<option>300$ - 500$</option>
										<option>500$ - 750$</option>
										<option>750$ - 1000$</option>
										<option>over - 1000$</option>
									</select>
								</div>

						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Years of Experience:</label>
								</div>
								<div class="col-md-6">
									<select class="form-control input-sm">
										<option>1 - 2 Years</option>
										<option>2 - 3 Years</option>
										<option>3 - 5 Years</option>
										<option>5 - 7 Years</option>
										<option>7 - 10 Years</option>
										<option>over - 10 Years</option>
										<option>unspecified</option>
									</select>
								</div>

						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Education:</label>
								</div>
								<div class="col-md-6">
									<select class="form-control input-sm">
										<option>PHD</option>
										<option>Master</option>
										<option>Bachelor</option>
										<option>Associa</option>
										<option>Vocational</option>
										<option>Higth School</option>
										<option>Unspecified</option>
									</select>
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Language:</label>
								</div>
								<div class="col-md-6">
									<select class="form-control input-sm">
										<option>Khmer</option>
										<option>English</option>
										<option>Thai</option>
										<option>Chaniese</option>
									</select>
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Hiring Quantities:</label>
								</div>
								<div class="col-md-6">
									<?php echo form_input('quantities', set_value('quantities'),'class="form-control input-sm" placeholder="Your quantities..." autocomplete="off" ')?>
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Category:</label>
								</div>
								<div class="col-md-6">
									<select class="form-control input-sm">
										<option>Automotive</option>
										<option>Engineering</option>
										<option>IT (web developer)</option>
									</select>
								</div>
						 	</div>
						</div>
						<div class="row" style="margin-top: 13px;">
						 	<div class="col-md-12">
								<div class="col-md-3">
									<label>Location:</label>
								</div>
								<div class="col-md-6">
									<select class="form-control input-sm">
										<option>Phnom Penh</option>
										<option>Preah Sihanouk</option>
										<option>Kampong Cham</option>
										<option>Siem Reap</option>
										<option>Battambang</option>
										<option>Kandal</option>
									</select>
								</div>
						 	</div>
						</div>
					</div>
				 </div><!-- this panel --><hr />
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-10">
							<button class="btn btn-primary"><i class="fa fa-external-link-square"></i> Preview</button>
							<button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
							<button class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
						</div>
						<div class="col-md-2">
							<button class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div><hr />
				<div class="row">
					<table class="table table-bordered">
	       				
	       					<tr>
	       						<td>billing</td>
	       						
	       						<td colspan="3">Information </td>
	       						<td>Neet VAT<input style="margin-left: 25px;" type="radio"><br />No Neet VAT <input type="radio"></td>
	       						
	       					</tr>
	       					<tr>
	       						<td>No.</td>
	       						<td>Job ID</td>
	       						<td>Price/Job</td>
	       						<td>Discount</td>
	       						<td>Priority</td>
	       						
	       					</tr>
	       					<tr>
	       						<td>End Date:</td>
	       						<td>Years of Experience:</td>
	       						<td>End Date:</td>
	       						<td>Years of Experience:</td>
	       						<td>End Date:</td>
	       						
	       					</tr>
	       					<tr>
	       						<td>End Date:</td>
	       						<td>Years of Experience:</td>
	       						<td>End Date:</td>
	       						<td>Years of Experience:</td>
	       						<td>End Date:</td>
	       						
	       					</tr>
	       					<tr>
	       						<td>End Date:</td>
	       						<td>Years of Experience:</td>
	       						<td>End Date:</td>
	       						<td>Years of Experience:</td>
	       						<td>End Date:</td>
	       						
	       					</tr>
	       					<tr>
	       						<td colspan="4"style="text-align: right;">Sub Total:</td>
	       						
	       						<td>End Date:</td>
	       						
	       					</tr>
	       					<tr>
	       						<td colspan="4"style="text-align: right;">Discount:</td>
	       						
	       						<td>End Date:</td>
	       						
	       					</tr>
	       					<tr>
	       						<td colspan="4"style="text-align: right;">Total:</td>
	       						
	       						<td>End Date:</td>
	       						
	       					</tr>
	       					<tr>
	       						<td  colspan="4"style="text-align: right;">VAT:</td>
	       						
	       						<td>End Date:</td>
	       						
	       					</tr>
	       					<tr>
	       						<td colspan="4"style="text-align: right;">Grend Total:</td>
	       						
	       						
	       						<td>End Date:</td>
	       						
	       					</tr>
	       					
	       			</table>
				</div>
		    </div>
		</div>
	</div>
</div>
