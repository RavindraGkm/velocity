<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Velocity-Velocity placement agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="Coda 1 Ltd" name="author" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,400italic' rel='stylesheet' type='text/css'>
    <?php
        echo link_tag('assets/css/font-awesome.min.css');
        echo link_tag('assets/css/bootstrap.min.css');
        echo link_tag('assets/css/jquery.fancybox.css');
        echo link_tag('assets/css/rs-style.css');
        echo link_tag('assets/css/settings.css');
        echo link_tag('assets/css/jquery.bxslider.css');
        echo link_tag('assets/css/style-metronic.css');
        echo link_tag('assets/css/style.css');
        echo link_tag('assets/css/blue.css');
        echo link_tag('assets/css/style-responsive.css');
        echo link_tag('assets/css/custom.css');
    ?>
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>
<!-- BEGIN HEADER -->
<div class="header navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN LOGO (you can use logo image instead of text)-->
            <a class="navbar-brand logo-v1" href="index.html">
                <img src="<?php echo base_url('assets/img/logo_blue.png');?>" id="logoimg" alt="">
            </a>
            <!-- END LOGO -->
        </div>

        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active">
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
                    <a href="">
                        Services
                    </a>
                </li>
                <li>
                    <a href="">
                        Franchises
                    </a>
                </li>
                <li>
                    <a href="">
                        Clients
                    </a>
                </li>
                <li>
                    <a href="">
                        Placements
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('contact-us');?>">
                        Contact Us
                    </a>
                </li>
                <li><a href="">Register</a></li>
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
</div>
<!-- END HEADER -->

<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN REVOLUTION SLIDER -->
    <div class="fullwidthbanner-container slider-main">
        <div class="fullwidthabnner ">
            <ul id="revolutionul" style="">
                <!-- THE FIRST SLIDE -->
                <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="assets/img/sliders/revolution/thumbs/thumb2.jpg">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="<?php echo base_url('assets/img/bg1.jpg');?>" alt="">

                    <div class="caption lft slide_title slide_item_left"
                         data-x="0"
                         data-y="105"
                         data-speed="400"
                         data-start="1500"
                         data-easing="easeOutExpo">
                        Better roads crowdsourced!
                    </div>
                    <div class="caption lft slide_subtitle slide_item_left"
                         data-x="0"
                         data-y="180"
                         data-speed="400"
                         data-start="2000"
                         data-easing="easeOutExpo">
                        Safer journeys on smoother surfaces
                    </div>
                    <div class="caption lft slide_desc slide_item_left"
                         data-x="0"
                         data-y="220"
                         data-speed="400"
                         data-start="2500"
                         data-easing="easeOutExpo">
                        Faster information for authorities<br>
                        Accurate and anonymous
                    </div>
                    <a class="caption lft btn green slide_btn slide_item_left" href="https://itunes.apple.com/us/app/potholer/id701393940?ls=1&mt=8" target="_blank"
                       data-x="0"
                       data-y="290"
                       data-speed="400"
                       data-start="3000"
                       data-easing="easeOutExpo">
                        Download Now!
                    </a>
                    <div class="caption lfb"
                         data-x="640"
                         data-y="55"
                         data-speed="700"
                         data-start="1000"
                         data-easing="easeOutExpo"  >
                        <img src="<?php echo base_url('assets/img/man-winner.png');?>" alt="Image 1">
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <div class="container">
        <div class="row service-box">
            <div class="col-md-4 col-sm-4">
                <div class="service-box-heading">
                    <em><i class="fa fa-location-arrow blue"></i></em>
                    <span>Safer Roads</span></div>
                <p>By effortlessly monitoring your route as you drive, Potholer identifies   and logs dangerous potholes to a public database. </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-box-heading">
                    <em><i class="fa fa-check red"></i></em>
                    <span>Well Documented</span>
                </div>
                <p>Information is   anonymously passed on to the relevant authorities in your area for their   discretion and for future road repair projects.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-box-heading">
                    <em><i class="fa fa-expand green"></i></em>
                    <span>Efficient Communication</span>
                </div>
                <p>No more jumping through hoops when   looking for a solution. Potholer voices your concerns through concise   and readily available data!</p>
            </div>
        </div>
        <div class="row quote-v1">
            <div class="col-md-9 quote-v1-inner">
                <span>Potholer - easiest way to inform authorities about the hazardous road conditions.</span>
            </div>
            <div class="col-md-3 quote-v1-inner text-right">
                <a class="btn-transparent" href="https://itunes.apple.com/us/app/potholer/id701393940?ls=1&mt=8" target="_blank"><i class="fa fa-rocket margin-right-10"></i>Download Now</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row no-space-steps margin-bottom-40">
            <div class="col-md-4 col-sm-4">
                <div class="front-steps front-step-one idt-ana-fix">
                    <h2>Identify</h2>
                    <p>by using our application</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="front-steps front-step-two idt-ana-fix">
                    <h2>Analyse</h2>
                    <p>data supplied by application to councils</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="front-steps front-step-three idt-ana-fix">
                    <h2>Fix</h2>
                    <p>roads to ensure safer journeys</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 space-mobile">
                <h2>About</h2>
                <p class="margin-bottom-30">Velocity placement agency enhancing  the velocity of our client’s success .</p>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 col-sm-4 space-mobile">
                <h2>Contact Us</h2>
                <address class="margin-bottom-40">
                    <strong>Head Office:</strong><br/>
                    Velocity Placements<br />
                    Regus Mumbai,<br/>
                    Connaught Place,<br/>
                    Bund Garden Road,<br/>
                    Pune,411001, India.<br/>
                    P: +91 952785400<br />
                    Email: <a href="<?php echo base_url('contact-us');?>"> hr@velocityplacement.com</a>
                </address>
            </div>
            <div class="col-md-4 col-sm-4 space-mobile">
                <h2>Contact Us</h2>
                <address>
                    <strong>Branch Office.</strong><br>
                    <strong>Velocity Placements</strong><br>
                    Regus Mumbai, <br>
                    9th Floor, G Block, Plot C 59, <br>
                    Platina Building, <br>
                    Bandra Kurla Complex, <br>
                    Bandra East, Mumbai, Maharashtra 400051
                </address>
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
                    <span class="margin-right-10">2016 © Developed By Prime Value ALL Rights Reserved.</span>
                    <a href="http://www.primevaluemarketing.com" target="_blank">www.primevaluemarketing.com</a>
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
<!-- END COPYRIGHT -->
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<?php
    echo script_tag('assets/js/jquery-1.10.2.min.js');
    echo script_tag('assets/js/bootstrap.min.js');
    echo script_tag('assets/js/jquery-migrate-1.2.1.min.js');
    echo script_tag('assets/js/hover-dropdown.js');
    echo script_tag('assets/js/back-to-top.js');
    echo script_tag('assets/js/jquery.fancybox.pack.js');
    echo script_tag('assets/js/jquery.themepunch.plugins.min.js');
    echo script_tag('assets/js/jquery.themepunch.revolution.min.js');
    echo script_tag('assets/js/jquery.bxslider.min.js');
    echo script_tag('assets/js/app.js');
    echo script_tag('assets/js/index.js');
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initBxSlider();
        Index.initRevolutionSlider();
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->

<!-- BEGIN GOOGLE ANALYTICS -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-44299735-1', 'potholer.info');
    ga('send', 'pageview');

</script>
<!-- END GOOGLE ANALYTICS -->
</body>
<!-- END BODY -->
</html>