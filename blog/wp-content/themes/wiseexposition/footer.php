<?php
/**
 * Footer template.
 *
 * @package P2
 */
?>
	<div class="clear"></div>

</div> <!-- // wrapper -->

<div id="notify"></div>

<div id="help">
	<dl class="directions">
		<dt>c</dt><dd><?php _e( 'compose new post', 'p2' ); ?></dd>
		<dt>j</dt><dd><?php _e( 'next post/next comment', 'p2' ); ?></dd>
		<dt>k</dt> <dd><?php _e( 'previous post/previous comment', 'p2' ); ?></dd>
		<dt>r</dt> <dd><?php _e( 'reply', 'p2' ); ?></dd>
		<dt>e</dt> <dd><?php _e( 'edit', 'p2' ); ?></dd>
		<dt>o</dt> <dd><?php _e( 'show/hide comments', 'p2' ); ?></dd>
		<dt>t</dt> <dd><?php _e( 'go to top', 'p2' ); ?></dd>
		<dt>l</dt> <dd><?php _e( 'go to login', 'p2' ); ?></dd>
		<dt>h</dt> <dd><?php _e( 'show/hide help', 'p2' ); ?></dd>
		<dt><?php _e( 'shift', 'p2' ); ?> + esc</dt> <dd><?php _e( 'cancel', 'p2' ); ?></dd>
	</dl>
</div>

<?php wp_footer(); ?>

<div class="row" style="color:#3A60A6">&nbsp;
            <div class="container">
                <hr>
                <footer>
                    <p>Copyright © 2012 WiseExposition. Contact: (415) 702-0499 or <a href="mailto:info@wiseexpostion.com">info@wiseexposition.com</a>. <br/>Design by Wise Enterprise - Serpent Global.</p>
                </footer>
            </div><!-- /container -->
		</div>
        </body>
</html>