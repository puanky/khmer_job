
            <style>
                .td{
                  padding-top:10px;
                }
                .pd{
                  padding-top: 3px;
                }
            </style>
            <?php 
              foreach ($contacts as $contact) {
                $phone1 =$contact->phone1;
                $phone2 = $contact->phone2;
                $phone3 = $contact->phone3;
                $email  = $contact->email;
                $addr = $contact->addr;
                $fb_smg = $contact->fb_messager;
                $whatApp = $contact->whatApp;
                $line = $contact->line;
                $viber = $contact->viber;
                $descr = $contact->cnt_us_desc;
              }
            ?>
            <div class="col-md-7">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <b><u>Contact Us </u>Welcome to<a href="#"> Khmer-job.com</a> ou can reach us by the following means </b>
                          <div class="row td">
                            <div class="col-sm-4"><b style="margin-top:20px"><u>Phone Contact:</u></a></b></div>
                          </div>
                          <div  class="row">
                            <div class="col-sm-3 pd">Tle1:</div>
                            <div class="col-sm-3 pd"><?php echo $phone1; ?></div>
                          </div>
                          <div  class="row">
                            <div class="col-sm-3 pd">Tle2:</div>
                            <div class="col-sm-3 pd"><?php echo $phone2;?></div>
                          </div>
                          <div  class="row">
                            <div class="col-sm-3 pd">Tle3:</div>
                            <div class="col-sm-3 pd"><?php echo $phone3;?></div>
                          </div>
                          <div  class="row">
                            <div class="col-sm-3 pd"><b><u>Email:</u></b></div>
                            <div class="col-sm-3 pd"><?php echo $email;?></div>
                          </div>
                          <div  class="row">
                            <div class="col-sm-3 pd"><b><u>Address:</u></b></div>
                            <div class="col-sm-3 pd"><?php echo $addr;?></div>
                          </div>
                          <u><b>Contact Online</b>
                           <div  class="row">
                            <div class="col-sm-3 pd">Facebook Messager:</div>
                            <div class="col-sm-3 pd"><?php echo $fb_smg ;?></div>
                          </div>
                          <div  class="row">
                            <div class="col-sm-3 pd">WhatApp</div>
                            <div class="col-sm-3 pd"><?php echo $whatApp;?></div>
                          </div>
                          <div  class="row">
                            <div class="col-sm-3 pd">Line:</div>
                            <div class="col-sm-3 pd"><?php echo $line;?></div>
                          </div>
                          <div  class="row">
                            <div class="col-sm-3 pd">Viber:</div>
                            <div class="col-sm-3 pd"><?php echo $viber;?></div>
                          </div>
                            <div class="row">
                              <div class="col-md-12">
                                <u><h5><b>You can use bellow form for more enquiries:</b></h5></u>
                                      <label>Your Name</label>
                                      <input type="text" class="form-control">
                                      <label>Your mail ddress </label>
                                      <input type="text" class="form-control">
                                      <label>Subject</label>
                                      <input type="text" class="form-control">
                                      <label>Security Code </label>
                                      <input type="text" class="form-control">
                                      <label>Your Message</label>
                                      <textarea class="form-control" placeholder="Enter Your Message.." rows="10" style="height:100px"></textarea><br />
                                      <button class="btn btn-primary">Send</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
             <div class="panel panel-default">
                    <div class="list-group">
                        <a href="<?php echo base_url("user_account"); ?>" class="list-group-item btn btn-xs btn-default" style="margin-bottom:5px">User Acount</a>
                        <a href="#" class="list-group-item btn btn-xs btn-default">Logout</a>
                    </div>
                </div>
            </div>
            