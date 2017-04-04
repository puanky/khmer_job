<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <!-- Custom Fonts -->
      
    </style>
      <title>Easy jQuery PHP Captcha</title>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script data-main="js/app" src="js/vendor/require.js"></script>
<!--     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dist/css/bootstrap-datetimepicker.css">
 -->    <script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/moment-with-locals.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/angular.min.js"></script>
        <div class="container_fluid" style="margin:0px 25px 0px 25px;" ng-app="myApp" ng-controller="myCtrl">
            <div class="row">                                           
                    <?php if(isset($action)) echo form_open($action,array('id'=>'form','name'=>'form','method'=>'post'))?>
                    <div class="row">
                      <div class="col-lg-8"><!--==== start col-lg-8 =====--> 
                        <div class="panel panel-default">
                              <div class="panel-heading">
                              <h3 class="panel-title">Form member information</h3>
                              </div>
                            <div class="panel-body">
                              <div class="row"><!--====Error msg ===-->
                                <div class="col-lg-12">
                                  <span ng-show="msg_error"> 
                                    <div class="alert alert-warning" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Warning!</strong> Please input form.                                                               
                                    </div>
                                  </span>
                                </div><!--====End error msg ===-->
                                <div class="col-lg-4">
                                  <label class="control-label">Account Code</label>
                                    <input readonly="readonly" type="text" name="txtAccCode" id="txtAccCode" class="form-control input-sm" value="<?php $acc_code1=substr($acc_code,3);
                                  echo $acc_code1!=''?'KJ-'.str_pad($acc_code1+1,6,"0", STR_PAD_LEFT):'KJ-'.str_pad(1, 6, "0", STR_PAD_LEFT);
                                   ?>" name="">
                                </div>
                                <div class="col-lg-4">
                                  <label class="control-label">Name</label>
                                    <?php echo form_input("txtAccName","",array("class"=>"form-control input-sm","placeholder"=>"Name","phone-input","ng-model"=>"txtAccName","id"=>"txtAccName"));?>                                          
                                </div>
                                <div class="col-lg-4">
                                  <label class="control-label">Gender</label>                                        
                                   <select class="form-control input-sm" ng-model="ddlGender" name="ddlGender" id="ddlGender">
                                      <option value="">Chose one</option>
                                      <option value="m">Male</option>
                                      <option value="f">Female</option>
                                      <option value="o">Other</option>
                                    </select>  
                                </div> 
                              </div>
                              <div class="row">
                                <div class="col-lg-4">
                                  <label class="control-label">Password</label>
                                    <?php echo form_password("txtAccPass","",array("class"=>"form-control input-sm","ng-minlength= 3","ng-maxlength='8'","placeholder"=>"Password","ng-model"=>"txtAccPass","id"=>"txtAccPass","required"=>""));?>                                          
                                    <span style="color:Red" ng-show="form.txtAccPass.$dirty&&form.txtAccPass.$error.pattern">Only phone number</span>
                                </div>
                                <div class="col-lg-4">
                                      <label class="control-label">Confirm Password</label>
                                        <?php echo form_password("txtConPasswd","",array("class"=>"form-control","placeholder"=>"Confirm password","ng-model"=>"txtConPasswd","valid-txtConPasswd","id"=>"txtConPasswd","required"=>"","onkeyup"=>"checkPass(); return false"));?>                                          
                                         <span id="confirmMessage" class="confirmMessage"></span>
                                    </div>
                                <div class="col-lg-4">
                                <label class="control-label">Phone Number</label>
                                <?php echo form_input("txtPhone","",array("class"=>"form-control input-sm","placeholder"=>"Phone number","ng-minlength= 3 ","ng-model"=>"txtPhone","ng-pattern"=>"/^[0-9]{9,10}$/","id"=>"txtNumber","required"=>""));?>                                          
                                 <span style="color:Red" ng-show="form.txtPhone.$dirty&&form.txtPhone.$error.pattern">Only phone number</span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-4">
                                    <label class="control-label">Company</label>                           
                                    <?php echo form_input("txtCompany","",array("class"=>"form-control input-sm","placeholder"=>"Company","ng-model"=>"txtCompany","id"=>"txtPositio","required"=>""));?>                                                                   
                                </div>  
                                <div class="col-lg-4">
                                  <label class="control-label">Website</label>
                                  <?php echo form_input("txtWebsite","",array("class"=>"form-control input-sm","placeholder"=>"Website","ng-model"=>"txtWtxtWebsiteeb","id"=>"txtWebsite","required"=>""));?>                                          
                                </div>
                                <div class="col-lg-4">
                                  <label class="control-label">Email</label>
                                    <input type="text" name="txtEmail"  ng-model="txtEmail" class="form-control input-sm" placeholder="Email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" id="txtEmail" required />
                                    <span style="color:Red" ng-show="form.txtEmail.$dirty&&form.txtEmail.$error.pattern">Please enter valid email</span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label class="control-label">Date Of Birth</label>
                                    <div class='input-group datetimepicker'>
                                      <?php echo form_input("txtDOB","",array("class"=>"form-control input-sm datetimepicker","placeholder"=>"Data Of Birth","ng-model"=>"txtDOB","id"=>"txtDOB","required"=>""));?>                                          
                                      <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-calendar"></span>
                                      </span>                                
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <label class="control-label">Image</label>
                                  <div class="form-group">
                                    <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#myModal">
                                    Upload Image
                                    </button>
                                  </div>
                                </div>     
                              </div>
                              <div class="row">
                                <div class="col-lg-12">
                                  <label class="control-label">Description</label>
                                  <?php echo form_textarea("txtDesc","",array("class"=>"form-control input-sm textarea","ng-model"=>"txtDesc","id"=>"txtDesc","required"=>""));?>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-12">
                                  <label class="control-label">Address</label>
                                  <?php echo form_textarea("txtAddr","",array("class"=>"form-control input-sm textarea","ng-model"=>"txtAddr","id"=>"txtAddr","required"=>""));?>                                
                                </div>
                              </div>
                              <div class="control-group">
                                  <div class="controls">
                                      <label class="" for="captcha">*Please enter the verication code shown below.</label>
                                      <div id="captcha-wrap">
                                          <img src="img/refresh.jpg" alt="refresh captcha" id="refresh-captcha" /> <img src="php/newCaptcha.php" alt="" id="captcha" />
                                      </div>
                                      <input class="narrow text input" id="captcha" name="captcha" type="text" placeholder="Verification Code">
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-4 pull-right" style="margin:5px;">                                    
                                 <a class="btn btn-default pull-right btn-sm" href="<?php echo base_url("home"); ?>">Cancel</a>
                                  <?php echo form_button("btn_go_product","Register",array("class"=>"btn btn-success  btn-sm","ng-click"=>"validation()"));?>                                   
                                </div>
                              </div>
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
                                            <input  type="file" name="txtUpload"/>
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
                            </div>
                        </div>
                      </div><!--====end col-lg-8 ====--> 
                       <div class="col-lg-1">
                          <a href="" class="btn-sm" style="margin-left:15px">Welcome:</a><hr/>
                          <a href="<?php echo base_url("registerControl"); ?>"class="btn-sm" style="margin-left:15px">Register</a>
                      </div>
                    </div>
                  <?php echo form_close()?>
            </div>
        </div>

        <script src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
        <script>  
            $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });

            tinymce.init({ selector:'textarea'});
            $("#btnCancel").click(function(){
                window.location.assign('<?php echo base_url().$cancel?>');
            });
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
          }//file upload img 

          function checkPass()
          {
            var badColor = "#ff6666";
            var pass1 = document.getElementById('txtAccPass');
            var pass2 = document.getElementById('txtConPasswd');
            var message = document.getElementById('confirmMessage');
            if(pass1.value !=pass2.value){
              message.style.color = badColor;
              message.innerHTML = "Passwords not Match!"
            }else{message.innerHTML ="" }
            if(pass1.value==""){
              message.innerHTML = ""
            }
          }
          // ------- start angularJS
        var app = angular.module('myApp',[]);
        app.controller('myCtrl',function($scope,$http)
        {   
            $scope.validation = function()
            {   
              if( 
                  ($scope.txtAccName==undefined || $scope.txtAccName=="")||
                  ($scope.txtAccPass==undefined || $scope.txtAccPass=="")||
                  /*(txtAddr==undefined || txtAddr=="")||*/
                  (txtWebsite==undefined || $scope.txtWebsite=="")||
                  ($scope.txtConPasswd==undefined || $scope.txtConPasswd=="") ||
                 /* (txtdescr==undefined || txtdescr=="") ||*/
                 ($scope.txtPhone==undefined || $scope.txtPhone=="") ||
                  ($scope.ddlGender==undefined || $scope.ddlGender=="") ||
                  ($scope.txtDOB==undefined || $scope.txtDOB=="")||
                 ($scope.txtEmail==undefined || $scope.txtEmail=="")
                )
                {
                  $scope.msg_error=true;}
                else
                {
                  passwd_c = $scope.txtConPasswd;
                  passwd = $scope.txtAccPass;
                  if(passwd==passwd_c){
                    document.getElementById("form").submit();
                  }
                }
            }                
        });  
        </script>