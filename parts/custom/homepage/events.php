<?php
$async_css = get_field('events_block_async_css');

$post_1 = get_field('events_post_1');
$post_2 = get_field('events_post_2');
$post_3 = get_field('events_post_3');
$post_4 = get_field('events_post_4');
$post_5 = get_field('events_post_5');
$post_6 = get_field('events_post_6');

function create_card($img, $date, $excerpt, $href){
    $str = <<<STRING
    <section class="events-card">
        <section id="e-c-col-1">
            <img class="e-c-img" src="$img" alt="Card featured image">
        </section>
        <section id="e-c-col-2">
            <h4 class="e-c-date">$date</h4>
            <p class="e-c-excerpt">$excerpt</p>
            <a class="arrow-btn" href="$href">Find Out more</a>
        </section>
    </section>
    STRING;
    return $str;
}

function get_card($post){
    $img = get_the_post_thumbnail_url( $post->ID, 'medium');
    $date = get_the_date("d M y", $post);
    $excerpt = get_the_excerpt($post);
    $href = get_the_permalink($post);
    return create_card($img, $date, $excerpt, $href);
}
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/styles/css/homepage/events.css"
media="<?php echo ($async_css) ? 'print' : 'all';?>" 
onload="<?php echo ($async_css) ? "this.media='all';this.onload='null'": "";?>">

<section id="events">
    <h3 id="events-title">Events</h3>
    <section id="events-grid">
        <?php 
            if($post_1) echo get_card($post_1);
            if($post_2) echo get_card($post_2);
            if($post_3) echo get_card($post_3);
            if($post_4) echo get_card($post_4);
            if($post_5) echo get_card($post_5);
            if($post_6) echo get_card($post_6);
        ?>
    </section>
    <a class="arrow-btn bottom-btn" href="/events/">View more Events</a>
</section>