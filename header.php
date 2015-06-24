<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" Content-Type="text/html;charset=UTF-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" contetn="width-device-width,initail-scale=1.0">
    <meta name="description" contetn="">
    <meta name="author" contetn="">
    <?php wp_head(); ?>
        
  </head>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/theme-flat-ui.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/SukumvitSet/font.css" rel="stylesheet"><!--[if lt IE 7]>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet"><![endif]-->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->

        <?php if ( is_admin_bar_showing() ):?>
            <style type="text/css">
            .navbar {margin-top: 31px !important;}
            </style>
        <?php endif;?>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
  <body>
    <nav role="navigation" class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"> </span><span class="icon-bar"> </span><span class="icon-bar"> </span></button><a href="#" class="navbar-brand visible-xs text-info">DATAHOME</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">เกี่ยวกับเรา</a></li>
            <li><a href="#">บริการของเรา</a></li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">โครงการที่กำลังดำเนินการ</a>
              <ul class="dropdown-menu">
                <li><a href="#">SUB MENU-01</a></li>
                <li><a href="#">SUB MENU-02</a></li>
                <li><a href="#">SUB MENU-03</a></li>
                <li><a href="#">SUB MENU-04</a></li>
                <li><a href="#">SUB MENU-05</a></li>
                <li><a href="#">SUB MENU-06</a></li>
              </ul>
            </li>
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-reorder"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">MENU-01</a></li>
                <li><a href="#">MENU-02</a></li>
                <li><a href="#">MENU-03</a></li>
                <li><a href="#">MENU-04</a></li>
                <li><a href="#">MENU-05</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-share"></i></a>
              <ul style="min-width:40px;" class="dropdown-menu">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-google-plus"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
                <li><a href="#"><i class="icon-dribbble"></i></a></li>
              </ul>
            </li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-google-plus"></i></a></li>
            <li><a href="#"><i class="icon-youtube"></i></a></li>
            <li><a href="#"><i class="icon-dribbb"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row main-content">
        <div class="col-xs-4 col-sm-4 col-sm-4 col-lg-4 hidden-xs"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" class="img-responsive"></a></div>
        <div class="col-xs-12 col-sm-8 col-sm-8 col-lg-8"><img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" class="img-responsive"></div>
      </div>
      
