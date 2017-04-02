<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Access
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">	<div class="footer-hoder">
	  <small>
		<div>&copy; 2010&ndash;<?php echo date("Y"); ?> Anand Chowdhary</div>
		<div><a href="https://madewithlove.org.in" target="_blank">Made with <span style="color: #e74c3c">&hearts;</span> in India</a></div>
	  </small>
	  </footer><!-- #colophon -->
</div><!-- #page --></div>

<?php wp_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
	  var p = document.querySelectorAll("p");
  for (var i = 0; i < p.length; i++) {
	if (p[i].childElementCount === 1 && p[i].querySelector("img")) {
	  p[i].style.opacity = "0.1";
	  var d = document.createElement("div");
	  d.style.marginBottom = "20px";
	  d.innerHTML = p[i].innerHTML;
	  p[i].parentNode.insertBefore(d, p[i]);
	  p[i].parentNode.removeChild(p[i]);
	}
  }
  });
</script>

</body>
</html>
