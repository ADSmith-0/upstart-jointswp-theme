<?php
$async_css = get_field('brands_block_async_css');

$image_1 = get_field('brands_image_1');
$image_1_alt = get_field('brands_image_1_alt');
$image_1_lazy_load = get_field('brands_image_1_lazy_load');
$image_2 = get_field('brands_image_2');
$image_2_alt = get_field('brands_image_2_alt');
$image_2_lazy_load = get_field('brands_image_2_lazy_load');
$image_3 = get_field('brands_image_3');
$image_3_alt = get_field('brands_image_3_alt');
$image_3_lazy_load = get_field('brands_image_3_lazy_load');

function get_image($image, $image_alt, $image_lazy_load){
    $lazy_load = ($image_lazy_load) ? "loading='lazy'" : "";
    $str = <<<STRING
        <img src="$image" alt="$image_alt" $image_lazy_load>
    STRING;
    return $str;
}
?>
    
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/styles/css/homepage/brands.css"
media="<?php echo ($async_css) ? 'print' : 'all';?>" 
onload="<?php echo ($async_css) ? "this.media='all';this.onload='null'": "";?>">
<section id="brands-wrapper">
    <section id="brands">
        <?php
            if($image_1) echo get_image($image_1, $image_1_alt, $image_1_lazy_load);
            if($image_2) echo get_image($image_2, $image_2_alt, $image_2_lazy_load);
            if($image_3) echo get_image($image_3, $image_3_alt, $image_3_lazy_load);
        ?>
    </section>
</section>