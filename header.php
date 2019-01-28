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

    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
      <div class="container-fluid" id="cta">
        <div class="row" itemscope itemtype="http://schema.org/LocalBusiness">
          <p class="display-5">Speak with a fall protection specialist: <span id="break"><br/></span><span class="phone" itemprop="telephone"><a href="tel:1-888-347-4141">1-888-347-4141</a></span></p>
        </div>
      </div>
      <div class="mx-md-auto d-md-flex d-block flex-md-nowrap" id="fullnav">
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
              <span class="rectangle"></span>
              <span class="triangle"></span>
              <div class="dropdown-menu dropdown-twocol" aria-labelledby="navbarDropdown">
                <div class="dropdown-row">
                  <a class="dropdown-item text-center" href="/products-overview/">Products Overview</a>
                </div>
                <div class="row" id="twocol-row">
                  <div class="dropdown-col col-md-6">
                    <a class="dropdown-item" href="/guardrail-systems/">Guardrail Systems</a>
                    <a class="dropdown-item" href="/self-closing-gates/">Self Closing Gates</a>
                    <a class="dropdown-item" href="pallet-gates/">Pallet Gates</a>
                    <a class="dropdown-item" href="/rigid-rail-systems/">Rigid Rail Systems</a>
                    <a class="dropdown-item" href="/lifeline-systems/">Lifeline Systems</a>
                    <a class="dropdown-item" href="/anchor-points/">Anchor Points</a>
                  </div>
                  <div class="dropdown-col col-md-6">
                    <a class="dropdown-item" href="/portable-fall-protection/">Portable Fall Protection</a>
                    <a class="dropdown-item" href="/crossovers-and-walkways/">Crossovers & Walkways</a>
                    <a class="dropdown-item" href="/work-platforms/">Work Platforms</a>
                    <a class="dropdown-item" href="/skylight-protection/">Skylight Protection</a>
                    <a class="dropdown-item" href="/custom-solutions/">Custom Solutions</a>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item dropdown">
              <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </button>
              <span class="rectangle"></span>
              <span class="triangle"></span>
              <div class="dropdown-menu single-col" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/hazard-survey/">Hazard Survey</a>
                <a class="dropdown-item" href="/design-engineering/">Design & Engineering</a>
                <a class="dropdown-item" href="/product-supply-installation/">Product Supply & Installation</a>
                <a class="dropdown-item" href="/inspection-testing-and-certification/">Inspection, Testing, & Certification</a>
                <a class="dropdown-item" href="recertification/">Recertification</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Applications
              </button>
              <span class="rectangle"></span>
              <span class="triangle"></span>
              <div class="dropdown-menu dropdown-multicol" aria-labelledby="navbarDropdown">
                <div class="dropdown-row">
                  <a class="dropdown-item text-center" href="/applications-overview/">Applications Overview</a>
                </div>
                <div class="row" id="multicol-row">
                  <div class="dropdown-col col-md-3">
                    <a class="dropdown-item" href="/rooftop/">Rooftop</a>
                    <a class="dropdown-item" href="/building-maintenance/">Building Maintenance</a>
                    <a class="dropdown-item" href="/manufacturing-and-industrial/">Manufacturing & Industrial</a>
                    <a class="dropdown-item" href="/oil-gas-chemical/">Oil & Gas/Chemical</a>
                    <a class="dropdown-item" href="/construction/">Construction</a>
                  </div>
                  <div class="dropdown-col col-md-3">
                    <a class="dropdown-item" href="/commercial/">Commercial</a>
                    <a class="dropdown-item" href="/retail/">Retail</a>
                    <a class="dropdown-item" href="/railcar-trucking/">Railcar/Trucking</a>
                    <a class="dropdown-item" href="/aircraft/">Aircraft</a>
                    <a class="dropdown-item" href="/stadiums-and-arenas/">Stadiums & Arenas</a>
                  </div>
                  <div class="dropdown-col col-md-3">
                    <a class="dropdown-item" href="/utilities/">Utilities</a>
                    <a class="dropdown-item" href="/distribution/">Distribution</a>
                    <a class="dropdown-item" href="/bridges/">Bridges</a>
                    <a class="dropdown-item" href="/piperacks/">Piperacks</a>
                    <a class="dropdown-item" href="/education-and-healthcare/">Education & Healthcare</a>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item dropdown">
              <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Resources
              </button>
              <span class="rectangle"></span>
              <span class="triangle"></span>
              <div class="dropdown-menu single-col" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/downloads/">Downloads</a>
                <a class="dropdown-item" href="/fall-protection-knowledge-base/">Fall Protection Knowledge Base</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </button>
              <span class="rectangle"></span>
              <span class="triangle"></span>
              <div class="dropdown-menu sm-col" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/contact/">Contact</a>
                <a class="dropdown-item" href="/testimonials/">Testimonials</a>
                <a class="dropdown-item" href="/case-studies/">Case Studies</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>


	<div id="content" class="site-content">