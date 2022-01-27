<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */


?>

<?php
$bodyClass='';
if ( is_user_logged_in() ) {
    $bodyClass = 'mLoggedin';
	}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>
    <?php if ( !is_home() ) {
      echo removeEngStr(get_the_title());
      echo ' | ';
    } ?>
    Meertens Instituut
  </title>
	<!-- <title><?php //the_title();?></title> -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/meertens-style.css">

</head>
<body class="<?php echo $bodyClass ?>">

  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KXNM34"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KXNM34');</script>
  <!-- End Google Tag Manager -->


	<div class="screenReaderMenu">
    <a href="#main">skip to main content</a>
  </div>
