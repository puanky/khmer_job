            <style>
              .cv{
                  padding:8px;
                }
            </style>
            <div class="row">
              <div class="col-md-12">
                  <a  href="<?php echo base_url("home/cv_create");?>" class="btn btn-success" style="margin-bottom:10px">Post Skill</a>
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
                      <button name="btnCV_list" class="btn btn-warning" style="margin-bottom:10px">Skill List</button>
                      <table class="table table-responsive table-bordered" id="mydata">
                        <tr>
                          <th>Priority</th>
                          <th>Skill</th>
                          <th>Name</th>
                          <th>Location</th>
                        </tr>
                        <tr>
                          <td>Premium</td>
                          <td>IT</td>
                          <td>NhorBoy</td>
                          <td>Phnom Penh</td>
                        </tr>
                        <tr>
                          <td>Starndard</td>
                          <td>IT</td>
                          <td>Phea</td>
                          <td>Phon Penh</td>
                        </tr>
                        <tr>
                          <td>Starndard</td>
                          <td>Photo3</td>
                          <td>Vorleak</td>
                          <td>Phon Penh</td>
                        </tr>
                      </table>
                        <button class="btn btn-success"><< Previous</button>
                        <button class="btn btn-success pull-right">next >></button>
                    </div>
                 </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <div class=" panel panel-default text-center" style="width:100px;height:150px">
                    <h5>Logo</h5>
                    <h5>name</h5>
                    <h5>Skill</h5>
                    <h5>location</h5>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class=" panel panel-default" style="width:100px;height:150px">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class=" panel panel-default" style="width:100px;height:150px">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class=" panel panel-default" style="width:100px;height:150px">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class=" panel panel-default" style="width:100px;height:150px">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class=" panel panel-default" style="width:100px;height:150px">
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