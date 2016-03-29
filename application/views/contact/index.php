<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta content="" name="description" />
    <meta content="Coda 1 Ltd" name="author" />
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
                <div class="search-result-item">
                    <img src="<?php echo base_url('assets/img/topbanners/contact-us.png');?>" class="img img-responsive">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <h2>Contact Form</h2>
                <div class="space20"></div>
<!--                <form action="--><?php //echo base_url('contact-message');?><!--" id="form_contactus" role="form" method="POST" class="horizontal-form margin-bottom-40">-->
                <form enctype="multipart/form-data" action="<?php echo base_url('contact-message');?>" class="horizontal-form margin-bottom-40" role="form" method="post">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <div class="pos-relative">
                            <input type="text" class="form-control" name="name" id="name" />
                            <span class="error-span" data-error-for="name"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Email</label>
                        <div class="pos-relative">
                            <input type="text" class="form-control" name="email" id="email" >
                            <span class="error-span" data-error-for="email"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Mobile</label>
                        <div class="pos-relative">
                            <input type="text" class="form-control" name="mobile" id="mobile">
                            <span class="error-span" data-error-for="mobile"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Message</label>
                        <div class="pos-relative">
                            <textarea class="form-control" rows="8" name="contact_message" id="contact_message"></textarea>
                            <span class="error-span" data-error-for="contact_message"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="send_message_button" class="btn btn-default theme-btn"><i class="icon-ok"></i> Send</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-3">
                <h2>Walk into our offices at: </h2>
                <address>
                    <strong>Head Office.</strong><br>
                    <strong>Velocity Placements</strong><br>
                    Level 2, <br>
                    Connaught Place, <br>
                    Bund Garden Road, <br>
                    Pune,411001, Maharashtra, India.
                </address>
                <address>
                    <strong>Branch Office.</strong><br>
                    <strong>Velocity Placements</strong><br>
                    Trade Centre G/F &amp; 1st Floor, <br>
                    Bandra East,<br>
                    Mumbai, 400051, Maharashtra, India.
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
echo script_tag('assets/js/jquery.validate.min.js');
//echo script_tag('assets/js/contactus.js');
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
//        new VC.Index("<?php //echo base_url();?>//");
    });
</script>
</body>
</html>