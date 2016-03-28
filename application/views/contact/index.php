<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Velocity-Velocity placement agency</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,400italic' rel='stylesheet' type='text/css'>
    <?php
    echo link_tag('assets/css/font-awesome.min.css');
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/settings.css');
    echo link_tag('assets/css/style-metronic.css');
    echo link_tag('assets/css/style.css');
    echo link_tag('assets/css/blue.css');
    echo link_tag('assets/css/style-responsive.css');
    echo link_tag('assets/css/custom.css');
    ?>
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<div class="header navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo-v1" href="<?php echo base_url('');?>">
                <img src="<?php echo base_url('assets/img/logo_1.png');?>" id="logoimg" alt="">
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo base_url('');?>">
                        Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('about-us');?>">
                        About us
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('services')?>">
                        Services
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('franchise');?>">
                        Franchise
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('clients')?>">
                        Clients
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('placements')?>">
                        Placements
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('contact-us');?>">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('register')?>">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="page-container">
    <div class="row breadcrumbs margin-bottom-40">
        <div class="container">
            <div class="col-md-4 col-sm-4">
                <h1>Velocity Placements - Contact Us</h1>
            </div>
            <div class="col-md-8 col-sm-8">
                <ul class="pull-right breadcrumb">
                    <li><a href="<?php echo base_url('');?>">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container min-hight">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="search-result-item about contact-bg">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <h2>Contact Form</h2>
                <div class="space20"></div>
                <form action="" class="horizontal-form margin-bottom-40" role="form" method="post">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <div>
                            <input type="text" class="form-control" name="name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Email</label>
                        <div>
                            <input type="text" class="form-control" name="email" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Mobile</label>
                        <div>
                            <input type="text" class="form-control" name="mobile" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Message</label>
                        <div>
                            <textarea class="form-control" rows="8" name="msg"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default theme-btn"><i class="icon-ok"></i> Send</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-3">
                <h2>Walk into our offices at: </h2>
                <address>
                    <strong>Head Office.</strong><br>
                    <strong>Velocity Placements</strong><br>
                    Regus Mumbai, <br>
                    Connaught Place, <br>
                    Bund Garden Road, <br>
                    Pune,411001, India.
                </address>
                <address>
                    <strong>Branch Office.</strong><br>
                    <strong>Velocity Placements</strong><br>
                    Regus Mumbai, <br>
                    9th Floor, G Block, Plot C 59, <br>
                    Platina Building, <br>
                    Bandra Kurla Complex, <br>
                    Bandra East, Mumbai, Maharashtra 400051
                </address>
                <address>
                    <p><i class="fa fa-phone"></i>&nbsp;: 020 4014 7555.&nbsp;/ &nbsp;<i class="fa fa-mobile-phone"></i>&nbsp;: 91 952785400.</p>
                    <p><i class="fa fa-envelope"></i>&nbsp;: hr@velocityplacement.com</p>
                </address>
                <div class="clearfix margin-bottom-30"></div>
                <h2>&nbsp;</h2>
            </div>
        </div>
    </div>
</div>

<!-- END FOOTER -->

<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <p>
                    <span class="margin-right-10">2016 © Developed By <a href="http://www.primevaluemarketing.com" target="_blank">PrimeValue</a> ALL Rights Reserved.</span>
                </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <ul class="social-footer">
                    <li><a href="<?php echo 'uk.linkedin.com/in/';?>"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="skype:"><i class="fa fa-skype"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
echo script_tag('assets/js/jquery-1.10.2.min.js');
echo script_tag('assets/js/bootstrap.min.js');
echo script_tag('assets/js/jquery-migrate-1.2.1.min.js');
echo script_tag('assets/js/back-to-top.js');
//echo script_tag('assets/js/app.js');
echo script_tag('assets/js/index.js');
?>
<script type="text/javascript">
    jQuery(document).ready(function() {

    });
</script>
</body>
</html>