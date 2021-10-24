<?php
$async_css = get_field('description_block_async_css');

$logo_lazy = get_field('description_block_lazy_loading_logo');
$title = get_field('description_block_title');
$description = get_field('description_block_description');

$img_src = get_field('description_block_img_src');
$img_alt = get_field('description_block_img_alt');
$img_lazy = get_field('description_block_lazy_loading_img');
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/styles/css/homepage/description-block.css"
media="<?php echo ($async_css) ? 'print' : 'all';?>" 
onload="<?php echo ($async_css) ? "this.media='all';this.onload='null'": "";?>">

<section id="description-block">
    <section id="d-b-col-1">
        <img src="./" alt="Upstart Logo" <?php echo ($logo_lazy) ? 'loading="lazy"' : ""; ?>>
        <h3 id="d-b-title"><?php echo $title; ?></h3>
        <?php echo $description; ?>
    </section>
    <section id="d-b-col-2">
        <img src="<?php echo $img_src?>" alt="<?php echo $img_alt ?>" <?php echo ($img_lazy) ? 'loading="lazy"' : ""; ?>>
    </section>
</section>
