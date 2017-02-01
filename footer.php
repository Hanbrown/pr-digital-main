<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PR_Digital_Main
 */

?>

	<a href="#top" id="toTop" class="toTop hideMe"><span class="glyphicon glyphicon-arrow-up"></span></a>

<footer id="footer" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <address>Copyright &#169; <?php echo date('Y'); ?> <?php echo bloginfo( 'name' ) ?>. All rights reserved.</address>
      </div>
    </div>
  </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
