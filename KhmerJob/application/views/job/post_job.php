	
	<div class="col-md-3"><!--=====side bar button ======-->
		<div class="list-group">
		  <a href="#" class="list-group-item active">Account Information</a>
		  <a href="#" class="list-group-item">Post Job</a>
		  <a href="#" class="list-group-item">Post CV</a>
		  <a href="#" class="list-group-item">Post Skill</a>
		  <a href="#" class="list-group-item">Advertisement</a>
		  <a href="#" class="list-group-item">Purchase Bundle Package</a>
		  <a href="#" class="list-group-item">Purchase CV Paid Search</a>
		</div>
	</div><!--=====end side bar button ======-->
	<div class="col-md-9"><!--===== form post job ======-->
		<div class="row">
			<div class="panel panel-default">
		        <div class="panel-body">
		        	<div class="row">
		      			<div class="col-md-6">
		      				<div class="form-group">
		      					<label class="control-label">Job ID</label>
		      					<?php echo form_input(array("name"=>"txtJobID","id"=>"txtJobID","value"=>"JB-000001","class"=>"form-control","readonly"=>"readonly"));?>		      					
		      				</div>			        					        						        						        	
			        	</div>
			        	<div class="col-md-6">
		      				<div class="form-group">
		      					<label class="control-label">Priority</label>
		      					<select name="ddlPriority" id="ddlPriority" class="form-control">
		      						<option value="Priority">Premium</option>
		      						<option value="Priority">Standard</option>
		      					</select>
		      				</div>			        					        						        						        	
			        	</div>
					</div>

					<div class="row">		      			
			        	<div class="col-md-6">
		      				<div class="form-group">
		      					<label class="control-label">Duration</label>
		      					<select name="ddlDuration" id="ddlDuration" class="form-control">
		      						<option value="Priority">15</option>
		      						<option value="Priority">20</option>
		      					</select>
		      				</div>			        					        						        						        	
			        	</div>
			        	<div class="col-md-6">
		      				<div class="form-group">
		      					<label class="control-label">Job Title</label>
		      					<?php echo form_input(array("name"=>"txtJobTitle","id"=>"txtJobTitle","value"=>"","class"=>"form-control","placeholder"=>"Enter Job Title here..."));?>		      					
		      				</div>			        					        						        						        	
			        	</div>
					</div>

					<div class="row">		      			
			        	<div class="col-md-12">
		      				<div class="form-group">
		      					<label class="control-label">Job Description</label>
		      					<?php echo form_textarea(array("name"=>"txtJobDes","id"=>"txtJobDes","class"=>"form-control","placeholder"=>"Enter Job Description here..."))?>
		      				</div>			        					        						        						        	
			        	</div>			        	
					</div>

					<div class="row">		      			
			        	<div class="col-md-12">
		      				<div class="form-group">
		      					<label class="control-label">Job Requirement</label>
		      					<?php echo form_textarea(array("name"=>"txtJobRequirement","id"=>"txtJobRequirement","class"=>"form-control","placeholder"=>"Enter Job Requirement here..."))?>
		      				</div>			        					        						        						        	
			        	</div>			        	
					</div>

					<div class="row"><!--==== other benefit ====-->		      			
			        	<div class="col-md-12">
		      				<div class="panel panel-default">
		      					  <div class="panel-heading">Other Benefits</div>
								  <div class="panel-body">
								    <div class="row">
								    	<div class="col-md-6">
								    		<label class="control-label">Posting Date</label>
						      				<div class="input-group datetimepicker">
						      					<?php echo form_input(array("name"=>"txtPostingDate","id"=>"txtPostingDate","value"=>"","class"=>"form-control datetimepicker","placeholder"=>"Click on Posting date"));?>		      											      					                                         		                                          
		                                        <span class="input-group-addon">
		                                            <span class="glyphicon glyphicon-calendar"></span>
		                                        </span>                                
                                    		</div>			        					        						        						        	
							        	</div>
							        	<div class="col-md-6">
								    		<label class="control-label">End Date</label>
						      				<div class="input-group datetimepicker">
						      					<?php echo form_input(array("name"=>"txtEndDate","id"=>"txtEndDate","value"=>"","class"=>"form-control datetimepicker","placeholder"=>"Click on End date"));?>		      											      					                                         		                                          
		                                        <span class="input-group-addon">
		                                            <span class="glyphicon glyphicon-calendar"></span>
		                                        </span>                                
                                    		</div>			        					        						        						        	
							        	</div>
								    </div>

								    <div class="row">
								    	<div class="col-md-6">
								    		<div class="form-group">
						      					<label class="control-label">Contract</label>
						      					<select name="ddlContract" id="ddlContract" class="form-control">
						      						<option value="Priority">15</option>
						      						<option value="Priority">20</option>
						      						<option value="Priority">15</option>
						      						<option value="Priority">20</option>
						      					</select>
						      				</div>
								    	</div>
								    	<div class="col-md-6">
								    		<div class="form-group">
						      					<label class="control-label">Gender</label>
						      					<select name="ddlGender" id="ddlGender" class="form-control">
						      						<option value="m">Male</option>
						      						<option value="f">Female</option>
						      						<option value="o">Other</option>						      						
						      					</select>
						      				</div>
								    	</div>								    	
								    </div>

								     <div class="row">
								    	<div class="col-md-6">
								    		<div class="form-group">
						      					<label class="control-label">Age</label>
						      					<select name="ddlAge" id="ddlAge" class="form-control">
						      						<option value="Priority">15</option>
						      						<option value="Priority">20</option>
						      						<option value="Priority">15</option>
						      						<option value="Priority">20</option>
						      					</select>
						      				</div>
								    	</div>
								    	<div class="col-md-6">
								    		<div class="form-group">
						      					<label class="control-label">Salary Range</label>
						      					<select name="ddlSalaryRange" id="ddlSalaryRange" class="form-control">
						      						<option value="Priority">15</option>
						      						<option value="Priority">20</option>
						      						<option value="Priority">15</option>
						      						<option value="Priority">20</option>						      						
						      					</select>
						      				</div>
								    	</div>								    	
								    </div>

								    <div class="row">
								    	<div class="col-md-6">
								    		<div class="form-group">
						      					<label class="control-label">Yearso of Experience</label>
						      					<select name="ddlYearExp" id="ddlYearExp" class="form-control">
						      						<option value="Priority">15</option>
						      						<option value="Priority">20</option>
						      						<option value="Priority">15</option>
						      						<option value="Priority">20</option>
						      					</select>
						      				</div>
								    	</div>
								    	<div class="col-md-6">
								    		<div class="form-group">
						      					<label class="control-label">Education</label>
						      					<select name="ddlSalaryRange" id="ddlSalaryRange" class="form-control">
						      						<option value="Priority">PhD</option>
						      						<option value="Priority">Master</option>
						      						<option value="Priority">Bachelor</option>
						      						<option value="Priority">Associate</option>
						      						<option value="Priority">Vocational</option>
						      						<option value="Priority">Higth School</option>
						      						<option value="Priority">Other</option>						      												      												      						
						      					</select>
						      				</div>
								    	</div>								    	
								    </div>

								    <div class="row">
								    	<div class="col-md-12"><label class="control-label">Languages</label>
								    		<div class="form-group">
								    			
								    			<label class="checkbox-inline">
												  <input type="checkbox" name="" id="inlineCheckbox1" value="option1"> Khmer
												</label>
												<label class="checkbox-inline">
												  <input type="checkbox" id="inlineCheckbox2" value="option2"> English
												</label>
												<label class="checkbox-inline">
												  <input type="checkbox" id="inlineCheckbox3" value="option3"> French
												</label>
												<label class="checkbox-inline">
												  <input type="checkbox" id="inlineCheckbox3" value="option3"> Chiness
												</label>
												<label class="checkbox-inline">
												  <input type="checkbox" id="inlineCheckbox3" value="option3"> Thai
												</label>
												<label class="checkbox-inline">
												  <input type="checkbox" id="inlineCheckbox3" value="option3"> Vietnam
												</label>
												<label class="checkbox-inline">
												  <input type="checkbox" id="inlineCheckbox3" value="option3"> Other...
												</label>
								    		</div>
								    	</div>								    									    	
								    </div>

								    <div class="row">
								    	<div class="col-md-6">
								    		<div class="form-group">
						      					<label class="control-label">Hiring Quantities</label>
						      					<?php echo form_input(array("name"=>"txtHiringQty","id"=>"txtHiringQty","value"=>"","class"=>"form-control","placeholder"=>"Enter Hiring Quantities here..."));?>		      					
						      				</div>
								    	</div>
								    	<div class="col-md-6">
								    		<div class="form-group">
						      					<label class="control-label">Category</label>
						      					<select name="ddlCategory" id="ddlCategory" class="form-control">
						      						<option value="Priority">PhD</option>
						      						<option value="Priority">Master</option>
						      						<option value="Priority">Bachelor</option>
						      						<option value="Priority">Associate</option>
						      						<option value="Priority">Vocational</option>
						      						<option value="Priority">Higth School</option>
						      						<option value="Priority">Other</option>						      												      												      						
						      					</select>
						      				</div>
								    	</div>
								    </div>

								    <div class="row">								    	
								    	<div class="col-md-6">
								    		<div class="form-group">
						      					<label class="control-label">Location</label>
						      					<select name="ddlCategory" id="ddlCategory" class="form-control">
						      						<option value="Priority">PhD</option>
						      						<option value="Priority">Master</option>
						      						<option value="Priority">Bachelor</option>
						      						<option value="Priority">Associate</option>
						      						<option value="Priority">Vocational</option>
						      						<option value="Priority">Higth School</option>
						      						<option value="Priority">Other</option>						      												      												      						
						      					</select>
						      				</div>
								    	</div>
								    </div>
								  </div>
		      				</div>				        					        						        						        	
			        	</div>			        	
					</div><!--==== end other benefit ====-->
					<div class="row"><!--==== button action ====-->
						<div class="col-md-12">
							<button name="btnPreview" class="btn btn-default">Preview</button>
							<button name="btnPreview" class="btn btn-default">Clear</button>
							<button name="btnPreview" class="btn btn-default">Save</button>
							<button name="btnPreview" class="btn btn-success pull-right">Submit</button>
						</div>
					</div><!--==== end button action ====-->
					<div class="page-header"></div>										
					<div class="row"><!--==== billing information ====-->						
						<div class="col-md-10" style="margin-top: 25px;">
							<b>Billing Information</b>
						</div>
						<div class="col-md-2">
							<div class="radio">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Need VAT							    
							  </label>
							</div>
							<div class="radio">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">No Need VAT							    
							  </label>
							</div>							
						</div>																			
					</div><!--==== end billing information ====-->

					<div class="row"><!--==== billing information ====-->												
						<div class="col-md-12">
							<table class="table table-hover">
								<tr>
									<th>No.</th>
									<th>Job ID</th>
									<th>Prive/Job</th>
									<th>Discount</th>
									<th>Priority</th>
									<th>Action</th>
								</tr>
								<tr>
									<td>No.</td>
									<td>Job ID</td>
									<td>Prive/Job</td>
									<td>Discount</td>
									<td>Priority</td>
									<td><a href="#" style="margin-right:10px;">Edit</a><a href="#">Delete</a></td>									
								</tr>

								<tr> 
									<td colspan="4" rowspan="5"></td>									
									<th>Sub Total :</th>
									<td>40$</td>
								</tr>								
								<tr>
									
									<th>Discount :</th>
									<td>20%</td>
								</tr>
								<tr>
									
									<th>Total :</th>
									<td>10$</td>
								</tr>
								<tr>
									
									<th>VAT :</th>
									<td>5%</td>
								</tr>
								<tr>
									
									<th>Grand Total :</th>
									<td>10$</td>
								</tr>																
							</table>					
						</div>																			
					</div><!--==== end billing information ====-->

					<div class="row"><!--==== invoice preview and payment ====-->												
						<div class="col-md-6">
							<button class="btn btn-default" name="btnInvoicePreview" id="btnInvoicePreview">Invoice Preview</button>				
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
					<div class=" page-header"></div>
					<div class="row">
						<div class="col-md-12">Invoice Information</div>
					</div>		
	</div><!--===== end form post job ======-->

