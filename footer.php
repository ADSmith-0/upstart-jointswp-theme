<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>	
            <footer class="footer" role="contentinfo">
                <nav role="navigation">
                    <?php get_template_part('/parts/custom/global/footer');?>
                </nav>			
            </footer>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->