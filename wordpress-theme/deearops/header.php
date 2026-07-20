<?php
/**
 * Site header — ported 1:1 from the static site's shared header markup,
 * with nav aria-current wired to the current WordPress page.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() . '/assets/favicon-32.png' ); ?>">
<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/apple-touch-icon.png' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="<?php echo esc_url( deearops_url( 'home' ) ); ?>" aria-label="DeeAROps home">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-mark.png' ); ?>" alt="DeeAROps — infinity cloud logo" width="72" height="40">
      <span><span class="brand-name">DeeAROps</span><span class="brand-tag">Data Protection &amp; DR</span></span>
    </a>
    <nav class="site-nav" id="site-nav" aria-label="Main navigation">
      <ul>
        <li><a href="<?php echo esc_url( deearops_url( 'about' ) ); ?>"<?php echo deearops_nav_current( 'about' ); ?>>About</a></li>
        <li><a href="<?php echo esc_url( deearops_url( 'services' ) ); ?>"<?php echo deearops_nav_current( 'services' ); ?>>Services</a></li>
        <li><a href="<?php echo esc_url( deearops_url( 'solutions' ) ); ?>"<?php echo deearops_nav_current( 'solutions' ); ?>>Solutions</a></li>
        <li><a href="<?php echo esc_url( deearops_url( 'industries' ) ); ?>"<?php echo deearops_nav_current( 'industries' ); ?>>Industries</a></li>
        <li><a href="<?php echo esc_url( deearops_url( 'technology' ) ); ?>"<?php echo deearops_nav_current( 'technology' ); ?>>Technology</a></li>
        <li><a href="<?php echo esc_url( deearops_url( 'insights' ) ); ?>"<?php echo deearops_nav_current( 'insights' ); ?>>Insights</a></li>
        <li class="mobile-only"><a href="<?php echo esc_url( deearops_url( 'contact' ) ); ?>"<?php echo deearops_nav_current( 'contact' ); ?>>Talk to Our Experts</a></li>
      </ul>
    </nav>
    <div class="nav-cta"><a class="btn btn-primary" href="<?php echo esc_url( deearops_url( 'contact' ) ); ?>">Talk to Our Experts</a></div>
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Open menu">
      <span class="bar"></span><span class="bar"></span><span class="bar"></span>
    </button>
  </div>
</header>
