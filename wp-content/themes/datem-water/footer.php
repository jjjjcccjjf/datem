<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.2
*/

?>

<!-- Scripts -->
<script src="https://use.fontawesome.com/108c9331e1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jPushMenu.js"></script>

<!--call jPushMenu, required-->
<script>
jQuery(document).ready(function($) {
	$('.toggle-menu').jPushMenu();
});
</script>

<?php wp_footer(); ?>
</body>
</html>
