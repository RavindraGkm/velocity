<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Velocity-Velocity placement agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Searching and reporting pothels by using iPhone. Potholer is designed to bring safer roads to your area. " name="description" />
    <meta content="Coda 1 Ltd" name="author" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,400italic' rel='stylesheet' type='text/css'>
    <?php
    echo link_tag('assets/css/font-awesome.min.css');
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/jquery.fancybox.css');
    echo link_tag('assets/css/rs-style.css');
    echo link_tag('assets/css/datatables.min.css');
    echo link_tag('assets/css/dataTables.bootstrap.min.css');
    echo link_tag('assets/css/settings.css');
    echo link_tag('assets/css/jquery.bxslider.css');
    echo link_tag('assets/css/style-metronic.css');
    echo link_tag('assets/css/style.css');
    echo link_tag('assets/css/blue.css');
    echo link_tag('assets/css/style-responsive.css');
    echo link_tag('assets/css/slider-clients/styles.css');
    echo link_tag('assets/css/slider-clients/skitter.styles.min.css');
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
                        Franchises
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('clients')?>">
                        Clients
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('placements')?>">
                        Placements
                    </a>
                </li>
                <li>
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
                <h1>Velocity Placements - Clients</h1>
            </div>
            <div class="col-md-8 col-sm-8">
                <ul class="pull-right breadcrumb">
                    <li><a href="<?php echo base_url('');?>">Home</a></li>
                    <li class="active">Clients</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container min-hight ">
        <div class="row margin-bottom-40">
            <div class="col-md-12 col-sm-12">
                <h2>Our Clients</h2><hr>
                <!-- BEGIN SEARCH RESULTS -->
                <div class="search-result-item about placements-bg">
                    <div id="content">
                        <div class="border_box">
                            <div class="box_skitter box_skitter_large">
                                <ul>
                                    <li>
                                        <a href="#cube">
                                            <img src="<?php echo base_url('assets/images/example/001.jpg');?>" class="circles" />
                                        </a>
<!--                                        <div class="label_text">-->
<!--<!--                                            <p>cube</p>-->-->
<!--                                        </div>-->
                                    </li>
                                    <li><a href="#cubeRandom"><img src="<?php echo base_url('assets/images/example/002.jpg');?>" class="circlesInside" /></a><div class="label_text"><p>cubeRandom</p></div></li>
                                    <li><a href="#block"><img src="<?php echo base_url('assets/images/example/003.jpg');?>" class="circlesRotate" /></a><div class="label_text"><p>block</p></div></li>
                                    <li><a href="#cubeStop"><img src="<?php echo base_url('assets/images/example/004.jpg');?>" class="cubeShow" /></a><div class="label_text"><p>cubeStop</p></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    <li><a href="uk.linkedin.com/in/peterhlozanek/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/Potholerinfo"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="skype:petr.hlozanek"><i class="fa fa-skype"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script async="" src="//www.google-analytics.com/analytics.js"></script>

<?php
//echo script_tag('assets/js/jquery-1.10.2.min.js');
//echo script_tag('assets/js/jquery-1.12.0.min.js');
echo script_tag('assets/js/slider-clients/jquery-2.1.1.min.js');
echo script_tag('assets/js/bootstrap.min.js');
echo script_tag('assets/js/jquery-migrate-1.2.1.min.js');
echo script_tag('assets/js/hover-dropdown.js');
echo script_tag('assets/js/back-to-top.js');
echo script_tag('assets/js/jquery.themepunch.plugins.min.js');
echo script_tag('assets/js/jquery.themepunch.revolution.min.js');
//echo script_tag('assets/js/jquery.bxslider.min.js');
echo script_tag('assets/js/app.js');

echo script_tag('assets/js/slider-clients/jquery.easing.1.3.js');
echo script_tag('assets/js/slider-clients/jquery.skitter.min.js');

echo script_tag('assets/js/index.js');?>
</body>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $('.box_skitter_large').skitter({
            theme: 'clean',
            numbers_align: 'center',
            progressbar: true,
            dots: true,
            preview: true
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
//        $('#example').DataTable();
//        $('.example-th').removeClass('sorting');
//        $('.example-th').removeClass('sorting_asc');
//        $('.example-th').click(function(){
//            this.removeClass('sorting');
//            this.removeClass('sorting_asc');
//            $('.example-th').removeClass('sorting');
//            $('.example-th').removeClass('sorting_asc');
//        });

    } );
</script>
</html>