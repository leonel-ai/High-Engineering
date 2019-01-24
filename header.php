<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <nav class="navbar navbar-expand-md navbar-light bg-transparent">
      <a class="navbar-brand" href="/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"
          width="170" height="80" class="d-inline-block align-top" alt="High Engineering logo"/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </button>
            <div class="dropdown-menu dropdown-multicol" aria-labelledby="navbarDropdown">
              <div class="dropdown-col">
                <a class="dropdown-item" href="#">Oranges</a>
                <a class="dropdown-item" href="#">Bananas</a>
                <a class="dropdown-item" href="#">Apples</a>
              </div>
              <div class="dropdown-col">
                <a class="dropdown-item" href="#">Potatoes</a>
                <a class="dropdown-item" href="#">Leeks</a>
                <a class="dropdown-item" href="#">Cauliflowers</a>
              </div>
              <div class="dropdown-col">
                <a class="dropdown-item" href="#">Beef</a>
                <a class="dropdown-item" href="#">Pork</a>
                <a class="dropdown-item" href="#">Venison</a>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown">
            <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Applications
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-multicol" aria-labelledby="navbarDropdown">
              <div class="dropdown-col">
                <a class="dropdown-item" href="#">Oranges</a>
                <a class="dropdown-item" href="#">Bananas</a>
                <a class="dropdown-item" href="#">Apples</a>
              </div>
              <div class="dropdown-col">
                <a class="dropdown-item" href="#">Potatoes</a>
                <a class="dropdown-item" href="#">Leeks</a>
                <a class="dropdown-item" href="#">Cauliflowers</a>
              </div>
              <div class="dropdown-col">
                <a class="dropdown-item" href="#">Beef</a>
                <a class="dropdown-item" href="#">Pork</a>
                <a class="dropdown-item" href="#">Venison</a>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown">
            <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Resources
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>


        </ul>
      </div>
    </nav>


	<div id="content" class="site-content">