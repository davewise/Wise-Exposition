<?php 

/**
* Exit if file is directly accessed. 
*/ 
if ( !defined('ABSPATH')) exit;

/*
	Header
	Authors: Tyler Cunningham, Trent Lapinski
	Creates the theme header. 
	Copyright (C) 2011 CyberChimps
	Version 2.0
*/

/* Call globals. */	

	global $themename, $themeslug, $options;
	
/* End globals. */
	
?>
	<?php synapse_head_tag(); ?>

<?php wp_head(); ?> <!-- wp_head();-->
<link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.css">
<link href="../../../../css/bootstrap-responsive.css" rel="stylesheet">

</head><!-- closing head tag-->

<!-- Begin @synapse after_head_tag hook content-->
	<?php synapse_after_head_tag(); ?>
<!-- End @synapse after_head_tag hook content-->
	
<!-- Begin @synapse before_header hook  content-->
	<?php synapse_before_header(); ?> 
<!-- End @synapse before_header hook content -->

<!-- Adding wrapper class for sticky footer -->
<div class="wrapper">
			
<header>
<div class="navbar navbar-top">
            <div class="navbar-inner" style="background:#F5F5F5; color:#fff;">
				<div class="container">
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </a>
					<a class="brand" style="color:#fff; padding-left:0px;" href="../../../../index.html"><img height="50px" width="288" src="../../../../img/logo.png" /></a>
					<div class="nav-collapse collapse">
						<ul class="nav" style="font-size:22px; font-weight:500; ">
                            <li class="">
                                <a href="../../../../about.html">About</a>
                            </li>
                            <li class="">
                                <a href="../../../../solutions.html">Solutions</a>
                            </li>
                            <li class="">
                                <a href="../../../../clients.html">Clients</a>
                            </li>
                            <li class="">
                                <a href="../../../../portfolio.html">Portfolio</a>
                            </li>
                            <li class="active">
                                <a href=#>Blog</a>
                            </li> 
                        </ul>
					</div>
				</div>
			</div>
        </div>		
	<?php
		foreach(explode(",", $options->get('header_section_order')) as $fn) {
			if(function_exists($fn)) {
				call_user_func_array($fn, array());
			}
		}
	?>
</header>

<!-- Begin @synapse after_header hook -->
	<?php synapse_after_header(); ?> 
<!-- End @synapse after_header hook -->
