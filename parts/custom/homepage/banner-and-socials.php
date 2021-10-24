<?php

$title = get_field('title') ?? "Title for banner";
$image = get_field('image') ?? "Image placeholder";
$image_alt = get_field('image_alt') ?? "Image Description";

$twitter_link = get_field('twitter_link');
$facebook_link = get_field('facebook_link');
$instagram_link = get_field('instagram_link');
$linkedin_link = get_field('linkedin_link');
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/css/homepage/banner-and-socials.css">
<section id="banner-and-socials">
    <img id="b-a-s-img" src="<?php echo $image?>" alt="<?php echo $image_alt?>" height="708" width="810">
    <div id="b-a-s-content">
        <h1 id="b-a-s-title"><?php echo $title?></h1>
        <section class="socials">
            <?php if($twitter_link):?>
                <a href="http://twitter.com">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" alt="Twitter Icon">
                </a>
            <?php endif; ?>
            <?php if($facebook_link):?>
                <a href="http://facebook.com">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" alt="Facebook Icon">
                </a>
            <?php endif; ?>
            <?php if($instagram_link):?>
                <a href="http://instagram.com">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.png" alt="Instagram Icon">
                </a>
            <?php endif; ?>
            <?php if($linkedin_link):?>
                <a href="http://linkedin.com">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/linkedin.png" alt="LinkedIn Icon">
                </a>
            <?php endif; ?>
        </section>
    </div>
</section>