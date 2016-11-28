<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo base_url(); ?>">

    <meta charset="UTF-8"/>
    <title>INDZZ Admin Panel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url() ?>/public/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/admin/css/bootstrap-indzz-theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/admin/css/screen.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/admin/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/admin/css/style.css">


    <link rel="icon" href=".<?php echo base_url() ?>/public/admin/favicon/128x128.png" sizes="128x128" type="image/png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>/public/admin/favicon/favicon.ico">

    <link href="<?php echo base_url() ?>/public/admin/favicon/apple-touch-icon-152x152.png" rel="apple-touch-icon"
          sizes="152x152"/>
    <link href="<?php echo base_url() ?>/public/admin/favicon/apple-touch-icon-120x120.png" rel="apple-touch-icon"
          sizes="120x120"/>
    <link href="<?php echo base_url() ?>/public/admin/favicon/apple-touch-icon-76x76.png" rel="apple-touch-icon"
          sizes="76x76"/>
    <link href="<?php echo base_url() ?>/public/admin/favicon/apple-touch-icon.png" rel="apple-touch-icon"/>

    <meta name="theme-color" content="#00796b"/>
    <script src="<?php echo base_url() ?>public/admin/js/indzz.js"></script>
    <script src="<?php echo base_url() ?>public/admin/js/jquery.min.js"></script>
</head>

<body>
<div class="navbar-fixed-top" id="header" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="sidebar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('admin'); ?>">INDZZ Admin Panel</a>
        </div>
        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="main-navbar">
            <!--
            <form class="navbar-left collapse" id="quick-search">
                <input type="text" class="search-field" placeholder="Search">
                <i class="icon-search glyphicon glyphicon-search"></i>
                <div class="popbox"></div>
            </form>
            -->

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('admin/account'); ?>"> <span
                            class="name"><?php echo $username; ?></span></a></li>
                <li><a href="<?php echo site_url('admin/logout'); ?>" title="Logout"><i
                            class="glyphicon glyphicon-log-out"></i></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</div>

<div class="container-fluid body-container">
    <div class="row">
        <div class="col-sm-3 col-md-2 col-xs-10" id="sidebar">

            <ul class="nav">


                <li <?php echo ($classification == 1) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/order') ?>"><i class="glyphicon glyphicon-list-alt"></i> Order</a>
                </li>

                <li class="has-children<?php echo ($classification == 2) ? ' active' : ''; ?>">
                    <i class="arrow-icon glyphicon glyphicon-triangle-bottom pull-right"></i>
                    <a href="<?php echo site_url('admin/application') ?>"><i class="glyphicon glyphicon-barcode"></i>
                        Application</a>
                    <ul>
                        <li <?php if (isset($current_category)) {
                            echo ($current_category == 1) ? ' class="active"' : '';
                        } ?>><a
                                href="<?php echo site_url('admin/application/hk'); ?>">HK Passport</a></li>
                    </ul>

                    <ul>
                        <li <?php if (isset($current_category)) {
                            echo ($current_category == 2) ? ' class="active"' : '';
                        } ?>><a
                                href="<?php echo site_url('admin/application/di'); ?>">DI Passport</a></li>
                    </ul>


                    <ul>
                        <li <?php if (isset($current_category)) {
                            echo ($current_category == 3) ? ' class="active"' : '';
                        } ?>><a
                                href="<?php echo site_url('admin/application/msar'); ?>">MSAR Passport</a></li>
                    </ul>
                </li>


                <li <?php echo ($classification == 11) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/about_visa') ?>"><i
                            class="glyphicon glyphicon-bullhorn"></i> ABOUT VISA</a>
                </li>

                <li <?php echo ($classification == 9) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/file_to_upload') ?>"><i
                            class="glyphicon glyphicon-level-up"></i> FILE NEED TO UPLOAD</a>
                </li>


                <li class="has-children<?php echo ($classification == 13) ? ' active' : ''; ?>">
                    <i class="arrow-icon glyphicon glyphicon-triangle-bottom pull-right"></i>
                    <a href="<?php echo site_url('admin/occupation') ?>"><i class="glyphicon glyphicon-education"></i>
                        Occupation(DI)</a>
                    <ul>
                        <li <?php if (isset($current_category)) {
                            echo ($current_category == 1) ? ' class="active"' : '';
                        } ?>><a
                                href="<?php echo site_url('admin/occupation'); ?>">Occupation Management</a></li>
                    </ul>

                    <ul>
                        <li <?php if (isset($current_category)) {
                            echo ($current_category == 2) ? ' class="active"' : '';
                        } ?>><a
                                href="<?php echo site_url('admin/occupation_file'); ?>">File upload for occupation(DI)</a></li>
                    </ul>
                </li>


                <li <?php echo ($classification == 10) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/price') ?>"><i class="glyphicon glyphicon-usd"></i> PRICE</a>
                </li>
                <li <?php echo ($classification == 12) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/country') ?>"><i class="glyphicon glyphicon-screenshot"></i>
                        COUNTRY</a>
                </li>
                <li <?php echo ($classification == 3) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/instruction') ?>"><i class="glyphicon glyphicon-comment"></i>
                        INSTRUCTION</a>
                </li>


                <li <?php echo ($classification == 4) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/news') ?>"><i class="glyphicon glyphicon-envelope"></i>
                        NEWS</a>
                </li>
                <li <?php echo ($classification == 5) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/faq') ?>"><i class="glyphicon glyphicon-exclamation-sign"></i>
                        FAQ</a>
                </li>
                <li <?php echo ($classification == 6) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/account') ?>"><i class="glyphicon glyphicon-paperclip"></i>
                        Admin
                        management</a></li>
                <li <?php echo ($classification == 7) ? ' class="active"' : ''; ?>><a
                        href="<?php echo site_url('admin/config_edit') ?>"><i class="glyphicon glyphicon-cog"></i> Site
                        Configuration</a></li>

            </ul>

        </div>

    </div>
    <div id="main" class="col-sm-9 col-md-10 col-xs-12 col-md-offset-2 col-sm-offset-3 main-container-padding">
<?php
if ($success_message) {
    echo '<div class="alert alert-success">' . $success_message . '</div>';
}
if ($error_message) {
    echo '<div class="alert alert-danger">' . $error_message . '</div>';
}