<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</nav>
        <div class="container_fluid" style="margin:40px 25px 0px 25px;" ng-app="myApp" ng-controller="myCtrl" ng-cloak>
            <div class="row">                                           
                <div class="col-lg-12">
                    <?php if(isset($action)) echo form_open($action,"id='form' name='form'")?>
                    <h1 class="page-header">Form Add <?php echo $pageHeader?></h1>
              <!--==== start error =====-->
                    <div class="row">
                        <div class="col-lg-6 ">                      
                          <span ng-show="form_error"> 
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Warning!</strong>{{msg}}                                                               
                            </div>
                          </span>                        
                        </div>              
                    </div>                    
              <!--==== end msg error =====-->                    
                    <div class="row">
              <!--==== form ads =====-->                    
                      <div class="col-lg-5">
                         <div class="row">
                           <div class="col-lg-12">
                              <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Form Search cv setup</h3>
                                </div>
                                <div class="panel-body"><!--  style="overflow:scroll; height:360px" -->
                                  <div class="row">                                   
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="control-label">Search cv Type</label>
                                        <select class="form-control" name="ddlType" id="ddlType" ng-model="ddlType" ng-change="type(ddlType)">
                                          <option value="">Chose one</option>
                                          <option value="Normal_search">Normal_search</option>
                                          <option value="Paid_search">Paid_search</option>                                          
                                        </select>
                                      </div>                                      
                                    </div>

                                    <div class="col-lg-6">
                                      <label class="control-label">Duration</label>
                                      <div class="input-group">                                        
                                        <input type="text" name="txtDuration" id="txtDuration" class="form-control" placeholder="Enter Duration here..." ng-model="txtDuration" ng-value="string" ng-disabled="dis">
                                        <span class="input-group-addon">hours</span>
                                      </div>                                      
                                    </div>                                   
                                  </div>

                                  <div class="row">                                   
                                    <div class="col-lg-6">
                                      <label class="control-label">Price</label>
                                      <div class="input-group">                                        
                                        <input type="text" name="txtPrice" id="txtPrice" class="form-control" placeholder="Enter Price here..." ng-model="txtPrice" ng-value="string_value" ng-disabled="dis">
                                        <span class="input-group-addon">$</span>
                                      </div>                                      
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="control-label">See applicant(photo,name,job position)</label>
                                          <select class="form-control" name="ddlSee_app" id="ddlSee_app" ng-model="ddlSee_app" ng-change="seeApp(ddlSee_app)">
                                            <option value="">Chose one</option>
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>                                            
                                          </select>                                         
                                      </div>                                      
                                    </div>                                   
                                  </div>

                                   <div class="row">                                                                                                                                                 
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="control-label">Full view applicant detail</label>
                                          <select class="form-control" name="ddlFull_app_det" id="ddlFull_app_det" ng-model="ddlFull_app_det" ng-change="full_app_det(ddlFull_app_det)">
                                            <option value="">Chose one</option>
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>                                            
                                          </select>                                         
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="control-label">Print applicant's cv out</label>
                                          <select class="form-control" name="ddlPrint_app_cv" id="ddlPrint_app_cv" ng-model="ddlPrint_app_cv" ng-change="print_app_cv(ddlPrint_app_cv)">
                                            <option value="">Chose one</option>
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>                                           
                                          </select>                                         
                                      </div>
                                    </div>                                                                                                            
                                  </div>

                                   <div class="row">                                                                                                                                                 
                                    <div class="col-lg-11">
                                      <div class="form-group">
                                        <label class="control-label">Sent email to applicant</label>
                                          <select class="form-control" name="ddlSent_email_to_app" id="ddlSent_email_to_app" ng-model="ddlSent_email_to_app" ng-change="sentEmail_to_app(ddlSent_email_to_app)">
                                            <option value="">Chose one</option>
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>                                            
                                          </select>                                         
                                      </div>
                                    </div>
                                    <div class="col-lg-1" style="margin-top:25px">
                                     <input type="button" name="btnAdd" value="Add" class="btn btn-primary pull-right" ng-click="add()">                                                                                                         
                                    </div>                                                                                                                                               
                                  </div>                                   

                                  <div class="row">                                   
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <label class="control-label">Seach cv Description</label>
                                        <textarea rows="7" name="txtDesc" id="txtDesc" class="form-control"></textarea>                                                                            
                                      </div>                                      
                                    </div>                                   
                                  </div>                                  
                                </div>
                            </div>
                           </div>
                         </div>                         
                      </div>
              <!--=== end form ads ==== -->

              <!--==== product selected promotion =====-->                    
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-12">
                                  <div class="panel panel-primary">
                                      <div class="panel-heading">
                                          <h3 class="panel-title">List Skill setup</h3>
                                      </div>
                                      <div class="panel-body">
                                        <table class="table table-hover">
                                          <tr>
                                            <th>No</th>
                                            <th>Search cv type</th>
                                            <th>Duration</th>                                            
                                            <th>Price</th>
                                            <th>See app(photo,name,job)</th>
                                            <th>Full view app detail</th>
                                            <th>Print app's cv out</th>
                                            <th>Sent email to app</th>                                                                                        
                                            <th>Action</th>
                                          </tr>
                                          <tr ng-repeat="x in list">
                                            <td>{{ $index+1 }}</td>
                                            <td>{{x[0]}}</td>
                                            <td>{{x[7]}}</td>
                                            <td>{{x[8]}}</td>
                                            <td><span class="{{x[9]}}"></span></td>
                                            <td><span class="{{x[10]}}"></span></td>
                                            <td><span class="{{x[11]}}"></span></td>
                                            <td><span class="{{x[12]}}"></span></td>                                                                                                                                    
                                            <td><a href="#" ng-click="remove($index)">Remove</a></td>
                                          </tr>                                           
                                        </table>
                                        <input type="text" name="str" ng-model="str" id="str" value="" style="visibility: hidden;">                                       
                                        <input type="text" name="desc" ng-model="desc" id="desc" value="" style="visibility: hidden;">                                       
                                      </div>
                                  </div>  
                                </div>
                            </div>
                            <div class="row">                             
                              <div class="col-lg-12">
                                  <?php echo form_button("btnCancel","Cancel",array("class"=>"btn btn-defaul pull-right","style"=>"margin-left:10px","id"=>"btnCancel"))?>
                                  <?php echo form_button("btnSubmit","Submit",array("class"=>"btn btn-success pull-right","ng-click"=>"submit()","id"=>"btnSubmit"))?>
                              </div>
                            </div>                          
                        </div>
            <!--=== end list advertise ==== -->  
                      </div>                  
                    <?php echo form_close()?>
                </div>
            </div>
        </div>    
<script>
    $("#btnCancel").click(function(){
        window.location.assign("<?php echo base_url('admin/search_cv_setup_c')?>");
    });
</script>

<script>  
  angular.module('myApp',[]).controller('myCtrl',function($scope,$http)
  {
  $scope.type=function(str)
  {
    if(str=="Normal_search"){$scope.string="Unlimited";$scope.dis=true;$scope.string_value="Free";}
    else{$scope.string="";$scope.string_value="";$scope.dis=false;}    
  }     
  
  //validation form advertise      
      var arr = [];     
      var arr1 = []; 
      var i = 0;
      $scope.add=function()
      {
        var desc1=document.getElementById("txtDesc").value;
        var duration=document.getElementById("txtDuration").value;
        var price=document.getElementById("txtPrice").value;                              
        if(
            ($scope.ddlType==undefined || $scope.ddlType=="")||
            (duration=="")||            
            (price=="")||
            ($scope.ddlSee_app==undefined || $scope.ddlSee_app=="")||
            ($scope.ddlFull_app_det==undefined || $scope.ddlFull_app_det=="")||
            ($scope.ddlPrint_app_cv==undefined || $scope.ddlPrint_app_cv=="")||
            ($scope.ddlSent_email_to_app==undefined || $scope.ddlSent_email_to_app=="")||
            (desc1==undefined || desc1=="")
          )
          {
            $scope.form_error=true;$scope.msg="Please enter form !";
          }
        else
        {
          duration=="Unlimited"?duration=0:duration=$scope.txtDuration;
          price=="Free"?price=0:price=$scope.txtPrice;
          if(!(Number.isInteger(Number(duration)))||!($.isNumeric(Number(price))))
          {
           $scope.form_error=true;$scope.msg="The field Duration,Price Number only !"; 
          }
          else
          {                                
            arr[i] = [];
            arr[i][0] = $scope.ddlType;
            arr[i][1] = duration;
            arr[i][2] = price;
            arr[i][3] = $scope.ddlSee_app;
            arr[i][4] = $scope.ddlFull_app_det;
            arr[i][5] = $scope.ddlPrint_app_cv;
            arr[i][6] = $scope.ddlSent_email_to_app;
            //format duration
            arr[i][7] = duration==0?duration="Unlimited":duration=duration + ' hours';
            arr[i][8] = price==0?price="Free":price=price + ' $';            
            arr[i][9] = $scope.ddlSee_app=='1'?'glyphicon glyphicon-ok':' glyphicon glyphicon-remove';
            arr[i][10] = $scope.ddlFull_app_det=='1'?'glyphicon glyphicon-ok':' glyphicon glyphicon-remove';
            arr[i][11] = $scope.ddlPrint_app_cv=='1'?'glyphicon glyphicon-ok':' glyphicon glyphicon-remove';
            arr[i][12] = $scope.ddlSent_email_to_app=='1'?'glyphicon glyphicon-ok':' glyphicon glyphicon-remove';
            
            $scope.desc=desc1;                        
            $scope.list= arr;   
            i = i+1;
            $scope.form_error=false;
            $scope.str=JSON.stringify($scope.list);            
          }
        }
      }                         
    
 //remove product promotion from product discout list       
      $scope.remove=function(index)
      {
          if(index!==undefined)
          {
              $scope.list.splice(index,1);  
              arr1.splice(index,1);            
              i = i-1;
            $scope.str=JSON.stringify($scope.list);
          }
      }
//add discount
      
      $scope.submit=function()
      {
        if($scope.str==undefined || $scope.str=="[]"){$scope.form_error=true;$scope.msg=" Please Enter form form!";}        
        else{document.getElementById("form").submit();}
      }                       
  });//-------- end angularJS
</script>