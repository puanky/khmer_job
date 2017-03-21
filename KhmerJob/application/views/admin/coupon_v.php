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
              <?php
                if(!empty($error)){echo $error;}
                
              ?>
                    <div class="row">
                        <div class="col-lg-6 ">                      
                          <span ng-show="msg1"> 
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
              <!--==== form coupon =====-->                    
                      <div class="col-lg-5">
                         <div class="row">
                           <div class="col-lg-12">
                              <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Form Coupon</h3>
                                </div>
                                <div class="panel-body" style="overflow:scroll; height:360px">
                                  <div class="row">                                    

                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="control-label">Amount Coupon</label>
                                        <?php echo form_input("txtAmountCpn","",array("class"=>"form-control","placeholder"=>"Enter amount Coupon","ng-model"=>"txtAmountCpn","id"=>"txtAmountCpn"))?>
                                      </div>
                                    </div>

                                     <div class="col-lg-6">
                                      <label class="control-label">Coupon USD</label>
                                      <div class='input-group'>                                        
                                        <?php echo form_input("txtCpnUSD","",array("class"=>"form-control","placeholder"=>"Enter Coupon USD","ng-model"=>"txtCpnUSD"));?>                                          
                                        <span class="input-group-addon">$</span>                                
                                      </div>
                                    </div>                                                                      
                                  </div><!--end row-->

                                  <div class="row">
                                    <div class="col-lg-6">
                                      <label class="control-label">Valid From</label>
                                      <div class='input-group datetimepicker'>
                                           <?php echo form_input("txtValidFrom",set_value("txtValidFrom"),array("class"=>"form-control datetimepicker","placeholder"=>"Valid from","ng-model"=>"txtValidFrom","id"=>"txtValidFrom"));?>                                          
                                          <span class="input-group-addon">
                                              <span class="glyphicon glyphicon-calendar"></span>
                                          </span>                                
                                      </div>
                                    </div>

                                    <div class="col-lg-6">
                                      <label class="control-label">Valid To</label>
                                      <div class='input-group datetimepicker'>
                                           <?php echo form_input("txtValidTo",set_value("txtValidTo"),array("class"=>"form-control datetimepicker","placeholder"=>"Valid from","ng-model"=>"txtValidTo","id"=>"txtValidTo"));?>                                          
                                          <span class="input-group-addon">
                                              <span class="glyphicon glyphicon-calendar"></span>
                                          </span>                                
                                      </div>
                                    </div>
                                  </div><!--end row-->
                                  <div class="row" style="margin-top:15px">
                                    <div class="col-lg-12">                                      
                                      <button class="btn btn-primary pull-right" ng-click="generate()" type="button" ng-disabled="disable_btn">Generate !</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                           </div>
                         </div>                         
                      </div>
              <!--=== end from coupon ==== -->

              <!--==== coupon generated =====-->                    
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-12">
                                  <div class="panel panel-primary">
                                      <div class="panel-heading">
                                          <h3 class="panel-title">Form Coupon generated</h3>
                                      </div>
                                      <div class="panel-body" style="overflow:scroll; height:360px">
                                      <table class="table table-hover">
                                        <tr>
                                          <th>NO</th>
                                          <th>Coupon code</th>
                                          <th>Coupon USD</th>
                                          <th>Valid from</th>
                                          <th>valid to</th>
                                          <th>Action</th>
                                        </tr>                                       
                                        <tr ng-repeat="x in generated">
                                          <td>{{$index+1}}</td>
                                          <td>{{x[0]|limitTo:12}}</td>
                                          <td>{{x[1]|currency}}</td>
                                          <td>{{x[2]}}</td>
                                          <td>{{x[3]}}</td>                                                                                
                                          <td><a href="#" ng-click="remove($index)">Remove</a></td>                                                                                                                                                                  
                                        </tr>                                        
                                        <input type="text" name="str" ng-model="str" id="str" value="" style="visibility: hidden;">
                                      </table>                                        
                                      </div>
                                  </div>  
                                </div>
                            </div>
                            <div class="row">                             
                              <div class="col-lg-12">
                                  <?php echo form_button("btnCancel","Cancel",array("class"=>"btn btn-defaul pull-right","style"=>"margin-left:10px","id"=>"btnCancel"))?>
                                  <?php echo form_button("btnAdd","Add",array("class"=>"btn btn-success pull-right","ng-click"=>"add_coupon()"))?>                                  
                              </div>
                            </div>                          
                        </div>
              <!--=== end coupon generated ==== -->  
                      </div>                  
                    <?php echo form_close()?>
                </div>
            </div>
        </div>    
<script>
    $("#btnCancel").click(function(){
        window.location.assign('<?php echo base_url().$cancel?>');
    });
</script>
<script>  
  angular.module('myApp',[]).controller('myCtrl',function($scope,$http)
  {   
 // Generate form
      $scope.txtAmountCpn=1;                  
      $scope.generate=function()
      {
        var valid_from=document.getElementById("txtValidFrom").value;
        var valid_to=document.getElementById("txtValidTo").value;                
        if((($scope.txtAmountCpn==undefined) || (!(Number.isInteger(Number($scope.txtAmountCpn)))||$scope.txtAmountCpn=="")) ||
          (($scope.txtCpnUSD==undefined) || (!($.isNumeric(Number($scope.txtCpnUSD)))||$scope.txtCpnUSD=="")) ||
          (valid_from==undefined || valid_from=="") ||
          (valid_to==undefined || valid_to==""))
          {                                        
            document.getElementById("txtAmountCpn").focus();
            $scope.msg1=true;$scope.msg=" Please Enter fields just number!";
          }
        else
        {  
        alert("yes");                                                       
              var valid_from=document.getElementById("txtValidFrom").value;
              var valid_to=document.getElementById("txtValidTo").value;
              //var date_code = Number(new Date());              
              var arr=[];                                                     
              for(var i=0;i<$scope.txtAmountCpn;i++)
              {              
                
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {                   
                    code=this.responseText;                    
                  }
                };
                xhttp.open("GET","<?php echo base_url('admin/coupon_c/code');?>", true);
                xhttp.send();

                    arr[i]=[];
                    arr[i][0]=code;
                    arr[i][1]=$scope.txtCpnUSD;
                    arr[i][2]=valid_from;
                    arr[i][3]=valid_to;
                    alert(arr);

                    //$scope.generated = arr;                                                                                                        
                    //$scope.str=JSON.stringify($scope.generated);                    
              }
              //$scope.disable_btn=true;              

        }
      } 
//remove coupon
      $scope.remove=function(index)
      {
          if(index!==undefined)
          {
              $scope.generated.splice(index,1);  
              arr1.splice(index,1);            
              i = i-1;              
          }
      }
//add coupon      
      $scope.add_coupon=function()
      {
        if($scope.str==undefined || $scope.str=="[]"){$scope.msg1=true;$scope.msg=" Please Generate Coupon !";}        
        else{document.getElementById("form").submit();}
      }                          
  });//-------- end angularJS
</script>