<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?></title>

    <!-- Link to style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="three columns">
          <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>

        <div class="nine columns">
          <?php wp_nav_menu(array (
            'theme_location' => 'header-menu',
            'container-class' => 'menu-header'
          ));
          ?>
        </div>
  </header>
