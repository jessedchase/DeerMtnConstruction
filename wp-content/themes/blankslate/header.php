<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="icon" href="http://www.deermountainconstruction.com/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://www.deermountainconstruction.com/favicon.ico" type="image/x-icon"> 
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div class="container">
		<div id="social">
        	<span>406.788.5614  </span>
        	<a href="mailto:ryan@deermountainconstruction.com"><img src="<?php echo get_site_url(); ?>/images/email.png" alt="Contact us about Bozeman, MT Remodel Services" /></a>
         	<a href="https://www.facebook.com/Deer-Mountain-Construction-LLC-194688207305675/timeline/" target="_blank"><img src="<?php echo get_site_url(); ?>/images/facebook.png" alt="Follow Deer Mountain Construction about Bozeman, MT Remodel Services" /></a>
    	</div>	
    </div>
<div id="header">
	<div id="nav">
        <div class="container">	
            <div id="logo">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/images/logo.png" alt="Deer Mountain Construction | Bozeman, MT Wood Countertops and finishes" /></a>
            </div>
            <div id="mobile"><a id="mobilelink" href="javascript:void(0)">Menu</a></div>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <div class="clear"></div>
        </div>
    </div>