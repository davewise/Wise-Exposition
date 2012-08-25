<?php

/**
* Exit if file is directly accessed. 
*/ 
if ( !defined('ABSPATH')) exit;

/*
	
	Footer
	Establishes the widgetized footer and static post-footer section of iFeature. 
	Copyright (C) 2011 CyberChimps
	Version 2.0
	
*/

global $options, $themeslug;

?>
	
<!-- For sticky footer -->
<div class="push"></div>  
</div>	<!-- End of wrapper -->

<?php if ($options->get($themeslug.'_disable_footer') != "0"):?>	

</div><!--end container wrap-->

<!--<div class="footer">--> <!-- Footer class for sticky footer -->
	<!--<div id="footer">
     	<div class="container">
     		<div class="row">-->
    	
	<!-- Begin @synapse footer hook content-->
		<?php /*synapse_footer();*/ ?>
	<!-- End @synapse footer hook content-->
	
	<?php endif;?>
	

		<!--</div>--><!--end footer_wrap-->
	<!--</div>--><!--end footer-->
<!--</div>--> 

<?php if ($options->get($themeslug.'_disable_afterfooter') != "0"):?>

<!--	<div id="afterfooter">
		<div id="afterfooterwrap">
		<div class="row">	
-->		<!-- Begin @synapse afterfooter hook content-->
			<?php /*synapse_secondary_footer()*/; ?>
		<!-- End @synapse afterfooter hook content-->
				
		<!--</div>-->  <!--end afterfooterwrap-->	
	<!--</div>--> <!--end afterfooter-->	
		<!--</div> -->	
	<?php endif;?>
	
	<?php wp_footer(); ?>	
	
<!--</div>-->  <!--End of footer class for sticky footer -->

<div class="row" style="color:#3A60A6">&nbsp;
            <div class="container" style="margin-left:20px;">
                <hr>
                <footer>
                    <p>Copyright © 2012 WiseExposition. Contact: (415) 702-0499 or <a href="mailto:info@wiseexpostion.com">info@wiseexposition.com</a>. <br/>Design by Wise Enterprise - Serpent Global.</p>
                </footer>
            </div><!-- /container -->
		</div>
        <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../../../js/jquery-1.8.0.min.js"></script>
    <script src="../../../../js/bootstrap-transition.js"></script>
    <script src="../../../../js/bootstrap-alert.js"></script>
    <script src="../../../../js/bootstrap-modal.js"></script>
    <script src="../../../../js/bootstrap-dropdown.js"></script>
    <script src="../../../../js/bootstrap-scrollspy.js"></script>
    <script src="../../../../js/bootstrap-tab.js"></script>
    <script src="../../../../js/bootstrap-tooltip.js"></script>
    <script src="../../../../js/bootstrap-popover.js"></script>
    <script src="../../../../js/bootstrap-button.js"></script>
    <script src="../../../../js/bootstrap-collapse.js"></script>
    <script src="../../../../js/bootstrap-carousel.js"></script>
    <script src="../../../../js/bootstrap-typeahead.js"></script>
</body>

</html>