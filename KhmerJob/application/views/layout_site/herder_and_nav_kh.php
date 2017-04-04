<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khmer Job</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dist/css/bootstrap-datetimepicker.css">
    <link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/animate_category.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet">
    <link href="<?php echo base_url()?>grid and list/css/component.css" rel="stylesheet">   <!--  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
   <style type="text/css">
    li.page:hover{
        background: rgba(24, 24, 25, 0.32);
    }
    li.activepage{
        background: rgba(24, 24, 25, 0.32);
    }
</style>
</head>
<body >
<?php 
    $home = "page";
    $about = "page";
    $service = "page";
    $advertisement = "page";
    $payment = "page";
    $promotion = "page";
    $contact_us = "page";
    $FAQ = "page";
    $menuLinkid=basename($_SERVER['PHP_SELF'],".php");
    if($menuLinkid=="home")
    {
        $home = "activepage";
    }
    elseif($menuLinkid=="about") 
    {
       $about = "activepage";

    }elseif($menuLinkid=="service") 
    {
       $service = "activepage";

    }elseif ($menuLinkid=="advertisement") 
    {
       $advertisement = "activepage";

    }elseif($menuLinkid=="payment")
    {
        $pament ="activepage";

    }elseif ($menuLinkid=="promotion") 
    {
      $promotion ="activepage";

    }elseif ($menuLinkid=="contact_us") 
    {
        $contact_us = "activepage";
    }
    elseif ($menuLinkid=="FAQ") 
    {
        $FAQ = "activepage";
    }

?>
    <div class="container" style="background: #fff">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <a href="<?php echo base_url('home');?>">
                            <h2>Khmer Job</h2>
                        </a>
                    </div><!-- logo -->
                    <div class="col-sm-7 col-md-9">
                        <img src="<?php echo base_url('assets/uploads/advertising.png');?>" style="width: 100%">
                    </div><!-- advertising -->
                    <div class="col-sm-2 col-md-1" style="margin-top: 6px;">
                        <form action="<?php echo base_url("home/session");?>" method="POST">
                            <div class="row">
                                <button name="kh"><img  src="<?php echo base_url('assets/leng/Cambodia.png');?>">​ Khmer</button>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <button name="eng"><img src="<?php echo base_url('assets/leng/en.png');?>">English</button>
                            </div>
                        </form>
                    </div><!-- Leng -->
                </div>
            </div>
        </div><!-- row herder -->

        <div class="row">
            <div class="col-md-12">
                <nav id="" class="navbar navbar-default" style="//margin-bottom: 11px !important;">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav" style="background-color:screen">
                            <li class="<?php echo $home?>"><a href="<?php echo base_url('home');?>">ទំព័រដើម</a></li>
                            <li class="<?php echo $about?>" ><a href="<?php echo base_url('home/about');?>">អំពីយើង</a></li>
                            <li class="<?php echo $service?>"><a href="<?php echo base_url('home/service');?>">សេវាកម្ម</a></li>
                            <li class="<?php echo $advertisement?>"><a href="<?php echo base_url('home/advertisement');?>">ផ្សពផ្សាយពានិជ្ជកម្ម</a></li>
                            <li class="<?php echo $payment?>"><a href="">បង់ប្រាក់</a></li>
                            <li class="<?php echo $promotion?>"><a href="<?php echo base_url('home/promotion');?>">កម្មវិធីពិសេស</a></li>
                            <li class="<?php echo $contact_us?>"><a href="<?php echo base_url('home/contact_us');?>">ទំនាក់ទំនង</a></li>
                            <li class="<?php echo $FAQ?>"><a href="<?php echo base_url('home/FAQ'); ?>"​>សំនួរ ចម្លើយ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div><!-- row nav -->
