<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load Stylesheets ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="full">
<a href="#maincontent" id="skip-link" class="screen-reader-text" >Skip to main content</a>


<?php if( is_front_page() ) { require('fronthead.php'); }?>

<?php if( !is_front_page() ) { require('not-front-head.php'); }?>

</header>
<span id="maincontent"></span>
