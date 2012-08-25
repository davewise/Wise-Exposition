<?php
/**
 * Header template.
 *
 * @package P2
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<base href="../../../../" 
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '&laquo;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="header">
<div class="navbar navbar-top">
            <div class="navbar-inner" style="background:#F5F5F5; color:#fff;">
				<div class="container">
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </a>
					<a class="brand" style="color:#fff; padding-top:25px;" href="index.html"><img height="50px" width="288" src="img/logo.png" /></a>
					<div class="nav-collapse collapse in">
						<ul class="nav" style="font-size:22px; font-weight:normal; ">
                            <li class="">
                                <a href="about.html">About</a>
                            </li>
                            <li class="">
                                <a href="solutions.html">Solutions</a>
                            </li>
                            <li class="">
                                <a href="clients.html">Clients</a>
                            </li>
                            <li class="">
                                <a href="portfolio.html">Portfolio</a>
                            </li>
                            <li class="active">
                                <a href="blog/">Blog</a>
                            </li> 
                        </ul>
					</div>
				</div>
			</div>
        </div>
<?php do_action( 'before' ); ?>
	<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<div role="navigation" class="site-navigation main-navigation">
		<h1 class="assistive-text"><?php _e( 'Menu', 'p2' ); ?></h1>
		<div class="assistive-text skip-link"><a href="#main" title="<?php esc_attr_e( 'Skip to content', 'p2' ); ?>"><?php _e( 'Skip to content', 'p2' ); ?></a></div>

		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'fallback_cb'    => '__return_false',
		) ); ?>
	</div>
	<?php endif; ?>
</div>

<div id="wrapper">

	<?php get_sidebar(); ?>