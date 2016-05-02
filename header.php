<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load Stylesheets ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
   <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <meta property="og:title" content="<?php  wp_title('|', true, 'right'); ?>" />
  <meta property="og:site_name" content="<?php  wp_title('|', true, 'right'); ?>"/>
  <meta property="og:url"
  content="<?php bloginfo('url') ?>" />
  <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/logo.png" />
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:creator" content="@hjcnewmedia"> 
  <meta name="twitter:title" content="<?php  wp_title('|', true, 'right'); ?>">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="full clearfix">
<a href="#maincontent" id="skip-link" class="screen-reader-text" >Skip to main content</a>


<?php if( is_front_page() ) { require('fronthead.php'); }?>

<?php if( !is_front_page() ) { require('not-front-head.php'); }?>

</header>
<span id="maincontent"></span>
