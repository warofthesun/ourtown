<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->


<!-- sticky nav code -->
<script type="text/javascript">
var _rys = jQuery.noConflict();
_rys("document").ready(function(){
    _rys(window).scroll(function () {
        if (_rys(this).scrollTop() > 134) {
            _rys('#menu').addClass("f-nav");
        } else {
            _rys('#menu').removeClass("f-nav");
        }
    });

});
</script>


<?php wp_footer(); ?>
</div>

<div class="page_footer">
     <div class="footer_stripes"></div>
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
       <div class="footer_left"><a class="footer_twitter"  href="https://twitter.com/ourtownbikecart"></a><a class="footer_instagram" href="http://instagram.com/ourtownbikecart"></a><a class="footer_facebook" href="https://www.facebook.com/ourtownnashville"></a>
       <div style="clear:left"></div>
       <div class="footer_copyright">&copy; 2013 our town / isle of printing all rights reserved.</div>
       <div class="footer_madeinusa"></div>
       <div style="padding-top:3px;"> CODING - <a href="mailto:daniel@thesplitpixel.com?subject=Hi There">Daniel Brown</a><br /> DESIGN - <a href="http://www.isleofprinting.com" target="_blank">ISLE OF PRINTING</a></div>
       </div>

       <div class="footer_brought">in partnership with:</div>
       <div class="footer_clear"></div>
      <a class="footer_metroarts" href="http://www.nashville.gov/Arts-Commission.aspx" target="_blank"></a>
       <div class="footer_divider"></div>
        <a class="footer_isleoprinting" href="http://www.isleofprinting.com" target="_blank"></a>
        <div style="clear:both"></div>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</body>
</html>
