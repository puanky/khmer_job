<style type="text/css">
    .thumbnail, .color
    {
        background-color:orange;
        color:white;
        text-decoration: none !important;

    }  

</style>
<div class="row">
    <div class="col-md-12">
        <div class="row" style="margin-bottom: 15px;">

            <div class="col-md-3">
               <a href="<?php echo base_url("home/cv");?>" class="thumbnail color">
                        <h1 class="text-center">CV</h1>
                  
                </a>  
             </div><!-- this Cv -->


            <div class="col-md-4">
                <div class="row">
                    <a href="<?php echo base_url('home/job_thumbnail');?>" class="thumbnail">
                        <h1 class="text-center">JOB</h1>
                    </a>

                </div>
                
            </div><!-- this JOB -->

            <div class="col-md-4">
                <a href="<?php echo base_url('home/skill'); ?>" class="thumbnail color">
                            <h1 class="text-center">SKILL</h1>
                </a>
            </div><!-- this SKILL -->

            <div class="col-md-1">
                
                    <a href="<?php echo base_url("registerControl/"); ?>"><i class="fa fa-user" aria-hidden="true"></i> Register</a><hr />
                    <a href="<?php echo base_url("home/cv_post");?>"><i class="fa fa-key" aria-hidden="true"></i> Log in</a>
                
            </div><!-- this Register and lon in-->

        </div><!-- class row -->
    </div><!-- class col-md-12 -->
</div><!-- class row -->