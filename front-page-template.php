<?php
/*
* Template Name: Front Page
*/
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/css/homepage/main.css">
<main class="blue-square-background">
    <?php
        get_template_part('/parts/custom/homepage/banner-and-socials');
        get_template_part('/parts/custom/homepage/subtitle');
        get_template_part('/parts/custom/homepage/');
    ?>
</main>

<?php
get_footer();