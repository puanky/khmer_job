            <style>
              .pad{
                  padding-top:3px;
                }

            </style>
            <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/angular.min.js"></script>
            <div  ng-app="myApp" ng-controller="myCtrl">
            <form id="myForm" action="<?php echo base_url('home/action');?>" name="myForm" method="POST">
            <div class="col-md-8">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Browse Image</h4>
                            </div>
                            <div class="modal-body">
                            <input  type="file" name="txtUpload" />
                            <input type="hidden" id="txtImgName" name="txtImgName" />
                            <div id="response" style="margin-top:10px;color:green;font-weight:bold;"></div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="uploadFile()">Upload</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="col-md-3 text-center pull-right">
                              <div style="border: 1px solid">CV ID</div>
                          </div>
                          <div class="col-md-12" style="margin-top: 10px">
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>priority</label>
                                </div>
                                  <div class="col-md-4">
                                      <select name="oPrty" ng-model="oPrty"class="form-control input-sm" required>
                                        <option value="" >Choose One</option>
                                        <option value="Premiua">Premiua</option>
                                        <option value="Starndard">Starndard</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>priority Duration</label>
                                </div>
                                  <div class="col-md-4">
                                      <select name="oPD" ng-model="oPD"class="form-control input-sm" required>
                                        <option value="">Choose One</option>
                                        <option value="180 Days">180 Days</option>
                                        <option value="365 Days">365 Days</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Position Matched</label>
                                </div>
                                  <div class="col-md-4">
                                      <input ng-model="oPM" id="check"type="" name="oPM" class="form-control input-sm" required>
                                  </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Expected Salary</label>
                                </div>
                                  <div class="col-md-4">
                                      <select name="oES" ng-model="oES" class="form-control input-sm" required>
                                        <option value="" >Choose One</option>
                                        <option value="150-200">150-200</option>
                                        <option value="200-250">200-250</option>
                                        <option value="200-250">200-250</option>
                                        <option value="" e="250-300">250-300</option>
                                        <option value="300-400">300-400</option>
                                        <option value="400-1000">400-1000</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Category</label>
                                </div>
                                  <div class="col-md-4">
                                    <select name="oCategory" ng-model="oCategory"class="form-control input-sm" required>
                                      <option value="" >Choose One</option>
                                      <option value="IT" >IT</option>
                                      <option value="Account">Account</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Year Experience</label>
                                </div>
                                  <div class="col-md-4">
                                    <select name="oYearEp" ng-model="oYearEp" class="form-control input-sm" required>
                                      <option value="" >Choose One</option>
                                      <option>0-1</option>
                                      <option>1-3</option>
                                      <option>3-5</option>
                                      <option>5-7</option>
                                      <option>7-10</option>
                                      <option>More Than 10 year Unlimitede</option>  
                                    </select>
                                  </div>
                              </div>
                              <div class="row pad">
                                  <div id="response" style="margin-top:10px;color:green;font-weight:bold;"></div>
                                  <div class="col-md-10" style="margin-left:150px">
                                    <img src="<?php echo base_url('assets/uploads/User Red.png');?>" class="img-thumbnail img-responsive" style="width:150px" data-toggle="modal" data-target="#myModal">
                                    <div class="form-group td">
                                        <button type="button" class="btn btn-default btn-sx" data-toggle="modal" data-target="#myModal" style="margin-top:5px">
                                        Upload Image
                                        </button>
                                    </div>
                                  </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-4">
                                  <input ng-model="txtName" type="text" name="txtName" class="form-control input-sm" required>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Current Address</label>
                                </div>
                                <div class="col-md-4">
                                  <input ng-model="txtAddr" type="text" name="txtAddr" class="form-control input-sm" required>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Tel</label>
                                </div>
                                <div class="col-md-4">
                                  <?php echo form_input("Tel","",array("class"=>"form-control input-sm","placeholder"=>"Phone number","ng-model"=>"Tel","ng-pattern"=>"/^[0-9]{1,10}$/","id"=>"txtContact","required"=>""));?>                                          
                                  <span style="color:Red" ng-show="myForm.Tel.$dirty&&myForm.Tel.$error.pattern">Only phone number</span>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div>
                                <div class="col-md-4">
                                    <input ng-model="txtEmail" type="text" name="txtEmail"  ng-model="txtEmail" class="form-control" placeholder="Email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" id="txtEmail" required />
                                  <span style="color:Red" ng-show="myForm.txtEmail.$dirty&&myForm.txtEmail.$error.pattern">Please enter valid email</span>
                                </div>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Facebook</label>
                                </div>
                                <div class="col-md-4">
                                  <input ng-model="txtfacebook" type="text" name="txtfacebook" class="form-control input-sm" required>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Twiter</label>
                                </div>
                                <div class="col-md-4">
                                    <input ng-model="txtTwiter" type="text" name="txtTwiter" class="form-control input-sm" required>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>G+1</label>
                                </div>
                                <div class="col-md-4">
                                  <input ng-model="txtG1" type="text" name="txtG1" class="form-control input-sm" required>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <b style="padding:100px">PROFILE</b>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Date Of Birht</label>
                                </div>
                                <div class="col-md-4">
                                     <div class='input-group datetimepicker'>
                                      <?php echo form_input("txtDOB","",array("class"=>"form-control datetimepicker","placeholder"=>"Data Of Birth","ng-model"=>"txtDOB","id"=>"txtDOB","required"=>""));?>                                          
                                      <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>                                 
                                      </span>                                
                                    </div>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Pleace Of Birht</label>
                                </div>
                                <div class="col-md-4">
                                    <input ng-model="txtPOB" type="text" name="txtPOB" class="form-control input-sm" required>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Nationality</label>
                                </div>
                                <div class="col-md-4">
                                    <input ng-model="txtNationality" type="text" name="txtNationality" class="form-control input-sm" required>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Marital Status</label>
                                </div>
                                <div class="col-md-4">
                                    <input ng-model="txtMarital" type="text" name="txtMarital" class="form-control input-sm" required>
                                </div>
                              </div>
                               <div class="row pad">
                                <div class="col-md-4">
                                    <label>Gender</label>
                                </div>
                                <div class="col-md-4">
                                    <select name="oGD" ng-model="oGD" class="form-control input-sm" required>
                                      <option value="" >Choose One</option>
                                      <option value="female">Female</option>
                                      <option value="male">male</option>
                                      <option value="unspecified">unspecified</option>
                                    </select>
                                </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-4">
                                    <label>Gender</label>
                                </div>
                                <div class="col-md-4">
                                    <select name="oGD" ng-model="oGD" class="form-control input-sm" required>
                                      <option value="" >Choose One</option>
                                      <option value="female">Female</option>
                                      <option value="male">male</option>
                                      <option value="unspecified">unspecified</option>
                                    </select>
                                </div>
                              </div>
                            
                          </div>
                          <div class="col-md-12">
                            <label>Work Experience</label>
                            <textarea name="taWE" ng-model="taWE" class="form-control input-sm" required>
                            </textarea>
                          </div>
                          <div class="col-md-12">
                            <label>Education</label>
                            <textarea name="atEducation" ng-model="atEducation" class="form-control input-sm" required>
                            </textarea>
                          </div>
                          <div class="col-md-12">
                            <label>language</label>
                            <textarea name="taLanguage" ng-model="taLanguage" class="form-control input-sm" required>
                            </textarea>
                          </div>
                          <div class="col-md-12">
                            <label>Computer</label>
                            <textarea name="taComputer" ng-model="taComputer" class="form-control input-sm" required>
                            </textarea>
                          </div>
                          <div class="col-md-12">
                            <label>Orther Skills</label>
                            <textarea name="taOskill" ng-model="taOskill" class="form-control input-sm" required>
                              
                            </textarea>
                          </div>
                          <div class="col-md-12">
                            <label>Short Couse Training</label>
                            <textarea name="taSCT" ng-model="taSCT" class="form-control input-sm" required>
                            </textarea>
                          </div>
                          <div class="col-md-12">
                            <label>Reforence</label>
                            <textarea name="taReference" ng-model="taReference" class="form-control input-sm" required>
                            </textarea>
                          </div>
                          <div class="col-md-12">
                            <label>Hobby</label>
                            <textarea  name="taHobby" ng-model="taHobby" class="form-control input-sm" required>
                            </textarea>
                          </div>
                          <div class="col-md-12">
                            <label>About Me</label>
                            <textarea name="taAbout" ng-model="taAbout" class="form-control input-sm" required>
                            </textarea>
                          </div>
                          <div class="col-md-12" style="margin-top:15px">
                            <div class="panel panel-default">
                                <label>STASUT</label>
                                <div class="row" style="margin-left:5px">
                                  <div class="col-md-2">Show My CV</div>
                                  <div class="col-md-6"> <input type="radio" name="chShow"></div>
                                </div>
                                <div class="row" style="margin-left:5px">
                                  <div class="col-md-2">Hide My CV</div>
                                  <div class="col-md-6"><input type="radio" name="xhHide" ></div>
                                </div>
                              </div>
                            <p>I heredy declare all information above are valid.</p>
                          </div>
                          <div class="col-lg-12">
                            <div class="row">
                              <div class="col-md-2"><input type="submit" name="btnPriview" class="btn btn-primary btn-sm" ng-disabled="myForm.$invalid" value="Priveiw"></div>
                              <div class="col-md-2"><input type="submit" name="Delete" class="btn btn-danger btn-sm" value="Delete"></div>
                              <div class="col-md-2"><input type="submit" name="Save" class="btn btn-primary btn-sm" ng-disabled="myForm.$invalid" value="Save"></div>
                              <div class="col-md-2"><input type="submit" name="btnSubmit" class="btn btn-primary btn-sm" ng-disabled="myForm.$invalid" value="Submit"></div>
                              <div class="col-md-2"><input type="submit" name="btnPrint" class="btn btn-primary btn-sm" ng-disabled="myForm.$invalid" value="Print"></div>
                            </div>
                          </div>
                          <div class="col-md-12" style="margin-top:10px">
                            <div class="panel panel-default" style="padding:10px">
                              <div class="row pad">
                                <div class="col-md-3" >
                                  <button name="btnBilling" class="btn btn-sm btn-primary">Billing</button>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-6">Need VAT</div>
                                        <div class="col-md-2"><input ng-model="" id="check" type="radio" name="adoVat"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">No Need VAT</div>
                                        <div class="col-md-4"><input ng-model="" id="check" type="radio" name="adoVat"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-3">
                                </div>
                              </div>
                              <div class="row pad">
                                  <div class="col-md-12">
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                          <th>CV ID</th>
                                          <th>Price</th>
                                          <th>Discount</th>
                                          <th>Duation</th>
                                          <th>Priority</th>
                                        </tr>
                                        <tr>
                                          <td>JBL0-12</td>
                                          <td>200$</td>
                                          <td>20%</td>
                                          <td>180 days</td>
                                          <td>Premium</td>
                                        </tr>
                                        <tr>
                                          <td colspan="4" class="text-right">Sub-total:</td>
                                          <td>JBL0-12</td>
                                        </tr>
                                        <tr>
                                          <td colspan="4" class="text-right">Discount:</td>
                                          <td>JBL0-12</td>
                                        </tr>
                                        <tr>
                                          <td colspan="4" class="text-right">Total:</td>
                                          <td>JBL0-12</td>
                                        </tr>
                                        <tr>
                                          <td colspan="4" class="text-right">VAT:</td>
                                          <td>JBL0-12</td>
                                        </tr>
                                        <tr>
                                          <td colspan="4" class="text-right">Grand Total:</td>
                                          <td>JBL0-12</td>
                                        </tr>
                                    </table>
                                  </div>
                              </div>
                              <div class="row pad">
                                <div class="col-md-3">
                                  <a class="btn btn-sm btn-primary" href="#">Invoice Priveiw</a>
                                </div>
                                <div class="col-md-3">
                                  <button class="btn btn-sm btn-primary" name="btnprocess">Process Payment</button>
                                </div>
                              </div>
                            </div>
                            <div class="row pad">
                              <div class="col-md-12 text-center">
                                <table>
                                   <tr>
                                     <td>Your CV Stutas</td>
                                     <td>
                                       <select class="form-control input-sm" required>
                                         <option>Published</option>
                                         <option>Panding</option>
                                         <option>hide</option>
                                       </select>
                                     </td>
                                   </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-md-8 -->
            </form>
            </div>
            <div>
                <a href="" style="margin-left:15px">Welcome:........</a><hr/>
                <a href="" style="margin-left:15px">Register</a>
            </div>
            <script>
                function uploadFile() {
                var formData = new FormData();
                  formData.append('image', $('input[type=file]')[0].files[0]); 
                  $.ajax({
                    url: '<?php echo base_url()?>ng/upload.php',
                    data: formData,
                    type: 'POST',
                    // THIS MUST BE DONE FOR FILE UPLOADING
                    contentType: false,
                    processData: false,
                    // ... Other options like success and etc
                    success: function(data) {
                      document.getElementById("response").innerText = "Upload Complete!"; 
                      document.getElementById("txtImgName").value = data;
                    }     
                  });
                  
                }
                var app = angular.module('myApp',[]);
                app.controller('myCtrl',function($scope,$http)
                {   
                  $scope.validation = function(){
                   /* if( 
                        ($scope.oPrty==undefined || $scope.oPrty=="")||
                        ($scope.oPD==undefined || $scope.oPD=="")||
                        ($scope.oPM==undefined || $scope.oPM=="")
                          ($scope.oES==undefined || $scope.oES=="")||
                        ($scope.oCategory==undefined || $scope.oCategory=="")||
                        ($scope.txtName==undefined || $scope.txtName=="")||
                        ($scope.txtAddr==undefined || $scope.txtAddr=="")||
                        ($scope.txtEmail==undefined || $scope.txtEmail=="")||
                        ($scope.txtfacebook==undefined || $scope.txtfacebook=="")||
                        ($scope.txtTwiter==undefined || $scope.txtTwiter=="")
                        ($scope.txtG1==undefined || $scope.txtG1=="")||
                        ($scope.txtDOB==undefined || $scope.txtDOB=="")||
                        ($scope.txtPOB==undefined || $scope.txtPOB=="")||
                        ($scope.txtNaioanlity==undefined || $scope.txtNaioanlity=="")
                        ($scope.txtMarital==undefined || $scope.txtMarital=="")||
                        ($scope.oDG==undefined || $scope.oDG=="")||
                        ($scope.taWE==undefined || $scope.taWE=="")||
                        ($scope.atEdication==undefined || $scope.atEdication=="")||
                        ($scope.taLanguage==undefined || $scope.taLanguage=="")||
                        ($scope.taOskill==undefined || $scope.taOskill=="")||
                        ($scope.taSCT==undefined || $scope.taSCT=="")||
                        ($scope.taReference==undefined || $scope.taReference=="")||
                        ($scope.taHobby==undefined || $scope.taHobby=="")||
                        ($scope.taReference==undefined || $scope.taReference=="")||
                        ($scope.taAbout==undefined || $scope.taAbout=="")
                        ($scope.chShow==undefined || $scope.chShow=="")&&
                        ($scope.xhHide==undefined || $scope.xhHide=="")
                      )
                    {
                      value = "No";
                    }else{
                      value = "Yes";
                    }*/
                  }
                  $scope.Submit = function(){
                   $scope.validation();
                      if(value=="Yes")
                      {
                        $scope.redirect = "";          
                        document.getElementById("myForm").submit();
                      }
                  }
                 /* $scope.Submit = function(){
                   $scope.validation();
                      if(value=="Yes")
                      {
                        document.getElementById("myForm").submit();
                      }
                  }
                  $scope.Submit = function(){
                   $scope.validation();
                      if(value=="Yes")
                      {
                        document.getElementById("myForm").submit();
                      }
                  }
                  $scope.Submit = function(){
                   $scope.validation();
                      if(value=="Yes")
                      {
                        document.getElementById("myForm").submit();
                      }
                  }
*/
                });  
            </script>

