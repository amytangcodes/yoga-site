<footer>
	 <div class="container flexContainer">
	     <article class="footer leftSide">
	          <div class="phone">
	          	<i class="fa fa-phone"></i>
	          	<p>555-555-5555</p>
	          </div>
	          <div class="email">
	          	<i class="fa fa-envelope-o"></i>
	          	<p>yourname@youremail.com</p>
	          </div>
	          <div class="address">
	          	<i class="fa fa-map-marker"></i>
	          	<p>123 Main Street, Toronto, Canada</p>
	          </div>
	     </article>
	     <article class="footer middle">
	     	<img class="lotusBottom" src="<?php bloginfo('template_directory') ?>/img/lotus.svg" alt="">
	         <p>&copy; Monatang <?php echo date('Y'); ?></p>
	     </article>
	     <article class="footer rightSide">
	         <a href="#" class="facebook"><i class="fa fa-facebook-square"></i></a>
	         <a href="#" class="twitter"><i class="fa fa-twitter-square"></i></a>
	         <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
	         <a href="#" class="pinterest"><i class="fa fa-pinterest-square"></i></a>
	     </article>
	 </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>