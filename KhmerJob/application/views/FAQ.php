
            <style>
                .td{
                  padding:10px;
                }
                .text_color{
                  color:red;
                }
            </style>
        <div ng-app="myApp" ng-control="myCrl">
        </div>
            <div class="col-md-8">
              <h4><b style="border-bottom: 3px solid red;">Questions & Answers</b></h4>
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="row"  style="padding:10px">
                    <?php
                      foreach($FAQ as $value){
                     ?>
                    <p style="margin-left:20px; color:#228b22"><?php echo  $value->key_code; ?></p>
                  
                   <p style="color:#fff"><?php echo  $value->key_data2; ?></p>
                    <?php
                      }
                    ?>
                </div>
                </div>
              </div>
            </div>
          
