            <style>
              .td{
                  padding:8px;
                }
            </style>
            <?php
            
            ?>
            <div class="col-md-8">
                <div class="row">
                    <a  href="<?php echo base_url("home/cv_create");?>" class="btn btn-success" style="margin-bottom:10px">Print</a>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-md-2">
                                  <div class="panel panel-default" style="height:150px;width:100px">Photo</div>
                              </div>
                              <div class="col-md-8">
                                 <table>
                                    <tr>
                                       <td>Name</td>
                                       <td><?php echo $txtName; ?></td>
                                     </tr>
                                     <tr>
                                       <td>Curent Address</td>
                                       <td><?php echo $txtAddr; ?></td>
                                     </tr>
                                     <tr>
                                       <td>Tle</td>
                                       <td><?php echo $Tel; ?></td>
                                     </tr>
                                     <tr>
                                       <td>Email</td>   
                                       <td><?php echo $txtEmail ?></td>              
                                     </tr>
                                     <tr>
                                       <td>Fecabook</td>
                                       <td><?php echo $txtfacebook; ?></td>
                                     </tr>
                                     <tr>
                                       <td>Wtiter</td>
                                       <td><?php echo $txtTwiter ?></td>
                                     </tr>
                                     <tr>
                                       <td>G+1</td>
                                       <td><?php echo $txtG1 ?></td>
                                     </tr>   
                                 </table>
                              </div>
                              <div class="col-md-2">
                                 <div style="border:1px solid; padding:5px" class="pull-right">A002</div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                 <table>
                                   <tr>
                                     <td><b>PROFILE</b></td>
                                   </tr>
                                   <tr>
                                     <td>Data Of Birth</td>
                                     <td><?php echo $txtDOB ?></td>
                                   </tr>
                                   <tr>
                                     <td>Pleace Of Birth</td>
                                     <td><?php echo $txtPOB ?></td>
                                   </tr>
                                   <tr>
                                     <td>Marital Status</td>
                                     <td><?php echo $txtMarital ?></td>
                                   </tr>
                                   <tr>
                                     <td>Nationality</td>
                                     <td><?php echo $txtNationality ?></td>
                                   </tr>
                                   <tr>
                                     <td>Sex</td>
                                     <td><?php echo $oGD ?></td>
                                   </tr>
                                   <tr>
                                     <td>WORK EXPRERIENCE</td>
                                     <td><?php echo $taWE ?></td>
                                   </tr>
                                   <tr>
                                     <td>Form year to year :</td>
                                   </tr>
                                   <tr>
                                     <td><?php echo $oYearEp ?></td>
                                   </tr>
                                  <!--  <tr>
                                     <td>..........</td>
                                   </tr> -->
                                   <tr>
                                     <td>Form year to year :</td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>Education</td>
                                     <td><?php echo $atEducation ?></td>
                                   </tr>
                                   <tr>
                                     <td>Form year to year :</td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>LANGUAGE</td>
                                   </tr>
                                   <tr>
                                     <td><?php echo $taLanguage ?></td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>COMPUTER</td>
                                   </tr>
                                   <tr>
                                     <td><?php echo $taComputer ?></td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>OTHER SKILLS</td>
                                   </tr>
                                   <tr>
                                     <td><?php echo $taOskill ?></td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>SHORT COURSE TRAINING</td>
                                   </tr>
                                   <tr>
                                     <td><?php echo $taSCT ?></td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>REFERENCE</td>
                                   </tr>
                                   <tr>
                                     <td><?php echo $taReference ?></td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>HOBBY</td>
                                   </tr>
                                   <tr>
                                     <td><?php echo $taHobby ?></td>
                                   </tr>
                                   <tr>
                                     <td>..........</td>
                                   </tr>
                                   <tr>
                                     <td>ABOUT ME</td>
                                   </tr>
                                   <tr>
                                     <td><?php echo $taAbout ?></td>
                                   </tr>
                                   <tr>
                                     <td>..............................................................................................</td>
                                   </tr>
                                   <tr>
                                     <td>ADDITIONAL INFORMATION</td>
                                   </tr>
                                   <tr>
                                     <td>Expected Salary:</td>
                                     <td><?php echo $oES ?></td>
                                   </tr>
                                   <tr>
                                     <td>Position Matched:</td>
                                     <td><?php echo $oPM  ?></td>
                                   </tr>
                                   <tr>
                                     <td>Job Gategory:</td>
                                     <td><?php echo $oCategory ?></td>
                                   </tr>
                                 </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="list-group">
                    <a href="<?php echo base_url("user_account"); ?>" class="list-group-item btn btn-xs btn-default" style="margin-bottom:5px">Register</a>
                    <a href="#" class="list-group-item btn btn-xs btn-default">Login</a>
                </div>
            </div> 
