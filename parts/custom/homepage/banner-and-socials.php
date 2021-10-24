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
        <section id="b-a-s-socials">
            <?php if($twitter_link):?>
                <a href="http://twitter.com">
                    <img src="" alt="Twitter Icon">
                </a>
            <?php endif; ?>
            <?php if($facebook_link):?>
                <a href="http://facebook.com">
                    <img src="" alt="Facebook Icon">
                </a>
            <?php endif; ?>
            <?php if($instagram_link):?>
                <a href="http://instagram.com">
                    <img src="" alt="Instagram Icon">
                </a>
            <?php endif; ?>
            <?php if($linkedin_link):?>
                <a href="http://linkedin.com">
                    <img src="" alt="LinkedIn Icon">
                </a>
            <?php endif; ?>
        </section>
    </div>
</section>