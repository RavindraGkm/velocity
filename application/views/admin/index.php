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
    echo link_tag('assets/css/rs-style.css');
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
                <li>
                    <a href="<?php echo base_url('contact-us');?>">
                        Contact Us
                    </a>
                </li>
                <li class="active">
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
            <div class="col-md-6 col-sm-8 col-xs-12">
                <h1>Velocity Placement Services - Admin Panel</h1>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-12">
                <ul class="pull-right breadcrumb">
                    <li><a href="<?php echo base_url('');?>">Home</a></li>
                    <li class="active">Admin Panel</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container min-hight">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="search-result-item">
                    <img src="<?php echo base_url('assets/img/topbanners/register.png');?>" class="img img-responsive">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-sm-8">
                <h2>Admin Manage Branch office</h2>
                <div class="space20"></div>
                <form class="horizontal-form margin-bottom-40" role="form" method="post">
                    <div class="form-group">
                        <label class="control-label">Branch Office Name*</label>
                        <div>
                            <input type="text" class="form-control" name="branch_office_name" id="branch_office_name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Location*</label>
                        <div class="fg-line pos-relative">
                            <select class="form-control" name="location" id="location">
                                <option value="">----Select----</option>
                                <option value="Belongs to Mumbai">Branch office Mumbai</option>
                                <option value="Belongs to Pune">Branch office Pune</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-default theme-btn" name="btn-save-branch" id="btn-save-branch"><i class="icon-ok"></i> Save Branch </button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                </form>
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
echo script_tag('assets/js/hover-dropdown.js');
echo script_tag('assets/js/back-to-top.js');
echo script_tag('assets/js/jquery.fancybox.pack.js');
//echo script_tag('assets/js/app.js');
echo script_tag('assets/js/index.js');
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        $("#btn-save-branch").click(function(){
            var branchName = $('#branch_office_name').val();
            var saveBranch = $('#btn-save-branch');
            $('#location').append("<option value="+branchName+">"+branchName+"</option>");
            saveBranch.html('Saving...');

        });
    });
</script>
</body>
</html>
