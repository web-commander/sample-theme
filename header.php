<!DOCTYPE html>
<html lang="ja" class="" >
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="ページの内容を表す文章">
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/custom.css">
    <!-- JS  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/static/js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/static/js/custom.js"  type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/static/js/vkbeautify.js"  type="text/javascript"></script>
    <?php wp_head(); 
    ?>
  </head>
  <body>
    <header class="blog-header py-3">
      <div class="row align-items-center">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 text-center">
          <a class="blog-header-logo text-dark" href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/static/img/arrow.png" /> <?php bloginfo( 'name' ); ?></a>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </header>
    <div class="container">
      <main role="main" class="container">
        <div class="row">