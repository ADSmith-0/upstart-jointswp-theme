<?php
$subtitle_text = get_field('subtitle_text');
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/styles/css/homepage/subtitle.css">
<div id="subtitle-wrapper">
    <p id="subtitle-text">
        <?php echo $subtitle_text ?>
    </p>
</div>