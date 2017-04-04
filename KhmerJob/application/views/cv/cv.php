            <style>
              .cv{
                  padding:8px;
                }
            </style>
            <div class="row">
              <div class="col-md-6">
                <a  href="<?php echo base_url("home/cv_post");?>" class="btn btn-warning btn-sm" style="margin-top:60px">Post CV</a>
              </div>
              <div class="col-md-4">
              </div>
              <div class="col-md-2">
                  <div class="list-group">
                      <a href="<?php echo base_url("registerControl"); ?>" class="list-group-item btn btn-sm btn-default" style="margin-bottom:5px">Register</a>
                      <a href="<?php echo base_url("home/cv_post"); ?>" class="list-group-item btn btn-sm btn-default">Login</a>
                  </div>
              </div>  
            </div>
            <div class="row" style="margin-bottom: 20px;">
              <div class="col-sm-8 col-md-8" style="padding-right: 0px;">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span>
                </div><!-- /input-group -->
              </div>
              <div class="col-sm-4 col-md-3">
                <div class="row">
                  <select class="form-control">
                    <option>Hello</option>
                  </select>
                </div>
              </div>
            </div><!-- row search -->
            <div class="row">
              <div class="col-md-12">
                  <a  href="<?php echo base_url("home/cv_create"); ?>" class="btn btn-sm btn-success" style="margin-bottom:10px">CV Category</a>
                  <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-md-2 cv"><a href="">Automotive(100)</a></div>
                              <div class="col-md-2 cv"><a href="">Engineering(130)</a></div>
                              <div class="col-md-2 cv"><a href="">IT (100)</a></div>
                              <div class="col-md-2 cv"><a href=""> Graphic design(100)</a></div>
                              <div class="col-md-2 cv"><a href="">Architecture(108)</a></div>
                              <div class="col-md-2 cv"><a href="">Education & Training (160)</a></div>
                              <div class="col-md-2 cv"><a href="">Agriculture(170)</a></div>
                              <div class="col-md-2 cv"><a href="">Inventory, supply(100)</a></div>
                              <div class="col-md-2 cv"><a href="">Sale & marketing (500)</a></div>
                              <div class="col-md-2 cv"><a href="">Acount(100)</a></div>
                            </div>
                        </div>
                  </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row">
                 <div class="col-md-12">
                    <div class="panel-body">
                      <button name="btnCV_list" class="btn btn-sm btn-warning" style="margin-bottom:10px">CV List</button>
                      <table class="table table-responsive table-bordered" id="mydata">
                        <tr>
                          <th>Priority</th>
                          <th>Photo</th>
                          <th>Name</th>
                          <th>Function</th>
                        </tr>
                        <tr>
                          <td>Premium</td>
                          <td>Photo1</td>
                          <td>NhorBoy</td>
                          <td>IT</td>
                        </tr>
                        <tr>
                          <td>Starndard</td>
                          <td>Photo2</td>
                          <td>Phea</td>
                          <td>IT</td>
                        </tr>
                        <tr>
                          <td>Starndard</td>
                          <td>Photo3</td>
                          <td>Vorleak</td>
                          <td>Account</td>
                        </tr>
                      </table>
                        <button class="btn btn-warning btn-sm"><< Previous</button>
                        <button class="btn btn-warning pull-right btn-sm">next >></button>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-3" ng-repeat="x in categories">
                                <h5>Photo</h5>
                                <h5>Name</h5>
                                <h5>Function</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-3" ng-repeat="x in categories">
                                <h5>Photo</h5>
                                <h5>Name</h5>
                                <h5>Function</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-3" ng-repeat="x in categories">
                                <h5>Photo</h5>
                                <h5>Name</h5>
                                <h5>Function</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-3" ng-repeat="x in categories">
                                <h5>Photo</h5>
                                <h5>Name</h5>
                                <h5>Function</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-3" ng-repeat="x in categories">
                                <h5>Photo</h5>
                                <h5>Name</h5>
                                <h5>Function</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-3" ng-repeat="x in categories">
                                <h5>Photo</h5>
                                <h5>Name</h5>
                                <h5>Function</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-3" ng-repeat="x in categories">
                                <h5>Photo</h5>
                                <h5>Name</h5>
                                <h5>Function</h5>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div><!--  end coll-md-7 -->

            <script>
              $(document).ready(function(){
              //data table
              $('#mydata').DataTable();
              //comfirm delete
              $('.del').confirmModal(); 
              });
            </script>  